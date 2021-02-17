<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserRegisteredSuccess;
use App\User;
use App\Products;
use Auth;

class AccountController extends Controller {

  use ResetsPasswords;

  /**
   * Where to redirect users after resetting their password.
   *
   * @var string
   */
  protected $redirectTo = '/account';

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    $this->middleware('auth');
  }

  public function setNewPassword(Request $request) {
    $user = Auth::user();

    Validator::make($request->all(), [
        'password' => 'required|min:6|confirmed',
    ])->validate();

    if ($user != null) {
      $password = $request->input('password');
      $user->forceFill(['password' => bcrypt($password)])->save();
      $response = "Password Reset Successfully";
      $responseType = "success";
    } else {
      $response = "Password Reset Failed";
      $responseType = "danger";
    }

    $responsePackage = array('response', 'user', 'responseType');
    
    return view('models.user_account', compact($responsePackage));
  }
  
  public function flagUserAccountToExpire(Request $request) {
    $userId = $request->input('id');
    $user = User::find($userId);
    if ($user != null) {
      $user->flagForExpiration = true;
      $user->save();
    }
    return $this->adminView($user);
  }

  public function validateRegistration(Request $request) {
    $hashSecretWord = SecretWord; //2Checkout Secret Word
    $sellerId = SellerID; //2Checkout account number
    $orderTotal = $request->input('total');
    $hashOrder = $request->input('order_number');
    $hasDemo = $request->has('demo');
    $demo = $hasDemo && $request->input('demo') == 'Y';
    if ($demo) {
      $hashOrder = 1;
    }

    $StringToHash = strtoupper(md5($hashSecretWord . $sellerId . $hashOrder . $orderTotal));

    if ($StringToHash != $request->input('key')) {
      $success = false;
    } else {
      $userEmail = $request->input('email');
      $user = User::where('email', '=', $userEmail)->first();
      $user->expires = \DateTime::createFromFormat('Y-m-d H:i:s', date("Y-m-d H:i:s"))->add(new \DateInterval('P365D'));
      $user->account_type = $request->input('acctype');
      $user->save();
      $success = true;
    }

    if ($success) {
      Mail::to($user)->send(new UserRegisteredSuccess($user));
      Mail::send('emails.userreg', ['user' => $user], function ($m) {
        $m->from('info@productivityMastery.com', 'MREA Business Plan');
        $m->to('daveherries@gmail.com', 'Dave Herries')->subject('User Registered');
      });
      return redirect('/');
    } else {
      return redirect('/login');
    }
  }

  public function upgradeUserByUser() {
    $userEmail = Auth::user()->email;
    $products = Products::where('account_type', '>', Auth::user()->account_type)->get();
    $package = array('userEmail', 'products');
    return view('models.purchase_product', compact($package));
  }
  
  public function downgradeUserByUser() {
    $user = Auth::user();
    $user->account_type--;
    $user->save();
  }
  
  public function getPurchaseView() {
    $userEmail = Auth::user()->email;
    $products = Products::all();
    $package = array('userEmail', 'products');
    return view('models.purchase_product', compact($package));
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function account(Request $request) {
    $user = Auth::user();
    $response = "";
    $responseType = "hidden";
    $package = array('user', 'response', 'responseType');
    return view('models.user_account', compact($package));
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function adminView($user = null) {
    $admin = Auth::user();
    if ($admin->shadowedUser != null) {
      $user = Auth::user()->shadowedUser;
    }
    $responsePackage = array('user');
    return view('models.admin_page', compact($responsePackage));
  }

  public function shadowUser(Request $request) {
    $admin = Auth::user();
    if ($admin->shadowedUser == null) {
      $userToShadowId = $request->input('id');

      $userToShadow = User::find($userToShadowId);

      $admin->shadowedUser()->save($userToShadow);

      $_SESSION[UserHasData] = false;
    } else {
      $admin->shadowedUser->user_id = null;
      $admin->shadowedUser->save();
      $_SESSION[UserHasData] = false;
    }
    return redirect('/');
  }

  public function getAllUsers(Request $request) {
    $users = User::paginate(50);
    return view('models.admin_page', [
        'users' => User::paginate(50)
    ]);
  }

  public function changeUserAdmin(Request $request) {
    $id = $request->input('id');
    $user = User::find($id);

    if ($user != Auth::user()) {
      if ($user->isAdmin()) {
        $user->account_type = 0;
      } else {
        $user->account_type = 3;
      }

      $user->save();
    }
    return $this->adminView($user);
  }

  public function downgradeUser(Request $request) {
    $id = $request->input('id');
    $user = User::find($id);

    if ($user != null && !$user->isAdmin()) {
      $at = $user->account_type - 1;
      $user->account_type = ($at < 0) ? 0 : $at;
      $user->save();
    }
    return $this->adminView($user);
  }

  public function upgradeUser(Request $request) {
    if (Auth::user()->isAdmin()) {
      $id = $request->input('id');
      $user = User::find($id);

      if (!$user->isAdmin()) {
        $at = $user->account_type + 1;
        $user->account_type = ($at > 2) ? 2 : $at;
        $user->save();
      }
      return $this->adminView($user);
    } else {
      $userEmail = Auth::user()->email;
      $products = Products::where('account_type', '>', Auth::user()->account_type)->get();
      $package = array('userEmail', 'products');
      return view('models.purchase_product', compact($package));
    }
  }

  public function updateUser(Request $request) {
    $user = Auth::user();
    $user->name = $request->input('name');
    $newEmail = $request->input('email');
    $response = "Change Successful";
    $responseType = "success";
    if ($user->email != $newEmail) {
      $test = User::where('email', '=', $newEmail)->get();
      if (count($test) == 0) {
        $user->email = $request->input('email');
      } else {
        $response = "The given email already exists";
        $responseType = "danger";
      }
    }
    $user->save();

    $responsePackage = array('user', 'response', 'responseType');
    return view('models.user_account', compact($responsePackage));
  }

  public function deleteUser(Request $request) {
    $id = $request->input('id');
    User::find($id)->delete();
    return $this->adminView();
  }

  public function getUser(Request $request) {
    $id = $request->input('id');
    $range = 0;
    $users = array();
    $user = User::find($id);
    $responsePackage = array('range', 'users', 'user');
    return view('models.admin_page', compact($responsePackage));
  }

  public function searchUser(Request $request) {
    $searchable = $request->input('searchable');
    $range = 0;
    if (strpos($searchable, '@') !== false) {
      $users = User::where('email', '=', $searchable)->get();
    } else {
      $users = User::where('name', 'LIKE', $searchable)->get();
    }
    $responsePackage = array('range', 'users');
    return view('models.admin_page', compact($responsePackage));
  }

}

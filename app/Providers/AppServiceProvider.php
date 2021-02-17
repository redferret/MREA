<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\HtmlString;

class AppServiceProvider extends ServiceProvider {

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot() {
    define('SecretWord', '');
    define('SellerID', '');
    define('AngularController', "ng-controller='AppController'");

    $this->makeFormMacros();
  }

  private function makeFormMacros() {
    \Form::macro('leftAd', function() {
      return new HtmlString(\Storage::get("CustomAds/leftAd.html"));
    });
    \Form::macro('rightAd', function() {
      return new HtmlString("<div></div>");
    });
    \Form::macro('product', function($productId, $accountType, $userEmail) {
      return new HtmlString("<input name='sid' value='" . SellerID . "' type='hidden'/>"
              . "<input name='product_id' value='" . $productId . "' type='hidden'/>"
              . "<input name='quantity' value='1' type='hidden'/>"
              . "<input name='acctype' value='" . $accountType . "' type='hidden'/>"
              . "<input name='email' value='" . $userEmail . "' type='hidden'/>");
    });
    \Form::macro('body', function($onLoad = null) {
      return ($onLoad == null) ?
              new HtmlString("<body " . AngularController . ">") :
              new HtmlString("<body onload='" . $onLoad . "' " . AngularController . ">");
    });
  }

  /**
   * Register any application services.
   *
   * @return void
   */
  public function register() {
    //
  }

}

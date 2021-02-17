@extends('layouts.app')
@section('style-sheets')
<link rel="stylesheet" href="{{asset("css/AccountPage.css")}}">
@endsection
@section('content')
<body>
  <table class='table' id="mainTable">
    <tbody style="border:none">
      <tr >
        <th class="{{$responseType}}" colspan="4">
          {{$response}}
        </th>
      </tr>
    </tbody>
    <thead>
      <tr class="tableTitle" style="color:white">
        <th colspan="4">
          User Account
        </th>
      </tr>
    </thead>
    <thead style="border:none">
      <tr>
        <th>Account Type</th>
        <th>Name</th>
        <th>Email</th>
        <th>
          Days Until Account will Expire
        </th>
      </tr>
    </thead>
    <tbody>
      {{Form::open(['url'=>url('/update/user')])}}
      <tr>
        <td>
          <label name="accounttype">
            {{$user->accountType()}}
          </label>
        </td>
        <td>
          <input class="input" type="text" 
                 required="required" name="name" value="{{$user->name}}"/>
        </td>
        <td>
          <input class="input" type="text" 
                 required="required" name="email" value="{{$user->email}}"/>
        </td>
        <td>
          @if ($user->flagForExpiration)
            {{$user->getDaysRemaining()}}
          @else
            @if ($user->account_type != 0) 
              {{'Until Cancelled'}}
            @else
              {{'N/A'}}
            @endif
          @endif
        </td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" value="Update"/></td>
        <td></td>
        <td>
        </td>
        <td></td>
      </tr>
      {{Form::close()}}
      @if ($user->account_type < 2)
        {{Form::open(['url'=>url('/upgrade/user')])}}
        <tr>
          <td><input type="submit" name="submit" value="Upgrade My Account"/></td>
          <td></td>
          <td>
          </td>
          <td></td>
        </tr>
        {{Form::close()}}
      @endif
<!--  This has been commented out for now.    
      {{Form::open(['url'=>url('/downgrade/user')])}}
      <tr>
        <td><input type="submit" name="submit" value="Downgrade My Account"/></td>
        <td></td>
        <td>
        </td>
        <td></td>
      </tr>
      {{Form::close()}}-->
    </tbody>
  </table>
</body>
@endsection
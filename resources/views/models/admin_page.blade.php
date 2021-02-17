@extends('layouts.app')
@section('style-sheets')
<link rel="stylesheet" href="{{asset("css/AdminPage.css")}}">
@endsection
@section('content')
{{Form::body()}}
<!--Main Table Goes Here-->
<table id="mainTableBody" class='table'>
  <tbody>
    <tr class="tableTitle">
      <th colspan="5">
        User Search
      </th>
    </tr>
    {{Form::open(['url'=>url('/admin/search/user')])}}
    <tr>
      <th >
        <div> Search by Email or by Name:</div>
      </th>
      <td colspan="3">
        <input type="text" name="searchable" style="width:240px"/>
      </td>
      <td>
        {{Form::submit('Ok', ['class'=>'formbutton'])}}
      </td>
    </tr>
    {{Form::close()}}
    {{Form::open(['url'=>url('/admin/get/all')])}}
    <tr>
      <th colspan="4"></th>
      <td>
        {{Form::submit('Get All', ['class'=>'formbutton'])}}
      </td>
    </tr>
    {{Form::close()}}
    {{Form::open(['url'=>url('/admin'), 'method' => 'GET'])}}
    <tr>
      <th colspan="4">
      </th>
      <td>
        {{Form::submit('Clear Table', ['class'=>'formbutton'])}}
      </td>
    </tr>
    {{Form::close()}}
  </tbody>
  <tbody style="border:none">
    <tr>
      <th style="height:25px"></th>
    </tr>
  </tbody>
  <tbody id="selectedusertable">
    @if(isset($user))
    <tr class="tableTitle">
      <th colspan ="5">
        <div>Selected Account</div>
      </th>
    </tr>
    <tr class="tableTop">
      <td>
        <div> Name </div>
      </td>
      <td>
        <div> Email </div>
      </td>
      <td>
        <div> Account Type </div>
      </td>
      <td>
        <div> Date Registered </div>
      </td>
      <td>
        <div> Flagged to Expire </div>
      </td>
    </tr>
    <tr class="tablerow2">
      <td>
        <div id="name" formatting="s!">
          {{$user->name}}
        </div>
      </td>
      <td>
        <div id="email" formatting="s!">
          {{$user->email}}
        </div>
      </td>
      <td>
        <div id="accounttype" formatting="s!">
          {{$user->accountType()}}
        </div>
      </td>
      <td>
        <div id="regdate" formatting="d!">
          {{$user->created_at}}
        </div>
      </td>
      <td>
        <div id="flagtoexpire" formatting="d!">
          {{$user->flagForExpiration? 'True' : 'False'}}
        </div>
      </td>
    </tr>
    @if($user != \Auth::user())
    <tr>
      <td>
        {{Form::open(['url'=>url('/shadow/user')])}}
        {{Form::hidden('id', $user->id)}}
        @if($user->shadowedUser == null)
        {{Form::submit('Shadow User', ['class'=>'button'])}}
        @else
        {{Form::submit('Unshadow User', ['class'=>'button'])}}
        @endif
        {{Form::close()}}
      </td>
      <td>
        {{Form::open(['url'=>url('/upgrade/user')])}}
        {{Form::hidden('id', $user->id)}}
        {{Form::submit('Upgrade', ['class'=>'button'])}}
        {{Form::close()}}
      </td>
      <td>
      </td>
      <td></td>
    </tr>
    <tr>
      <td>
        {{Form::open(['url'=>url('/flag/user')])}}
        {{Form::hidden('id', $user->id)}}
        {{Form::submit('Flag Account to Expire', ['class'=>'button'])}}
        {{Form::close()}}
      </td>
      <td>
        {{Form::open(['url'=>url('/downgrade/user')])}}
        {{Form::hidden('id', $user->id)}}
        {{Form::submit('Downgrade', ['class'=>'button'])}}
        {{Form::close()}}
      </td>
      <td>
        @if(!$user->isAdmin())
        {{Form::open(['url'=>url('/change/admin')])}}
        {{Form::hidden('id', $user->id)}}
        {{Form::submit('Make Admin', ['class'=>'button'])}}
        {{Form::close()}}
        @else
        {{Form::open(['url'=>url('/change/admin')])}}
        {{Form::hidden('id', $user->id)}}
        {{Form::submit('Remove Admin', ['class'=>'button'])}}
        {{Form::close()}}
        @endif
      </td>
      <td></td>
    </tr>
    @endif
    @endif
  </tbody>
  <tbody>
    @if(isset($users))
      <tr class="tableToph">
        <td>
          <div> Name </div>
        </td>
        <td>
          <div> Email </div>
        </td>
        <td>
          <div> Account Type </div>
        </td>
        <td>
          <div> Creation Date </div>
        </td>
      </tr>
      @foreach($users as $user)
        {{Form::open(['url'=>url('/admin/get/user')])}}
        {{Form::hidden('id', $user->id)}}
        <tr class="tablerow">
          <td>
            {{ Form::submit($user->name, ['class' => 'flatButton']) }}
          </td>
          <td>
            {{ Form::submit($user->email, ['class' => 'flatButton']) }}
          </td>
          <td>
            {{ Form::submit($user->accountType(), ['class' => 'flatButton']) }}
          </td>
          <td>
            {{ Form::submit($user->created_at, ['class' => 'flatButton']) }}
          </td>
        </tr>
        {{Form::close()}}
      @endforeach
    @endif
  </tbody>
</table>
</body>
@endsection
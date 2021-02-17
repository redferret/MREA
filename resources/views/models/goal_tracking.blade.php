@extends('layouts.app')
@section('style-sheets')
<link rel="stylesheet" href="{{asset('css/GoalTrackingStyles.css')}}">
@endsection
@section('scripts')
<script src='{{asset('js/GoalTracking.js')}}' type='text/javascript'></script>
@endsection
@section('content')
{{Form::body('onLoad(); buildMonthSelection();')}}
<table id="mainTable">
  <tbody>
    <tr>
      <td style="min-width:75px"></td>
      <td style="min-width:225px"></td>
      <td style="min-width:75px"></td>
      <td style="min-width:75px"></td>
      <td style="min-width:75px"></td>
      <td style="min-width:75px"></td>
      <td style="min-width:75px"></td>
      <td style="min-width:75px"></td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <th colspan='8' style='font-size: 16pt;text-align: left; border:none'>
        Goal vs. Actual Tracking Worksheet
      </th>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <th colspan='2' style='border:none'></th>
      <th style='color:white;background:black'>Monthly</th>
      <th colspan='2' style='background: #FFFF99'>
        <select class='dropdownmenu' id='monthSelection' onchange='select("selmonth", this);'>
          <option>January</option>
          <option>February</option>
          <option>March</option>
          <option>April</option>
          <option>May</option>
          <option>June</option>
          <option>July</option>
          <option>August</option>
          <option>September</option>
          <option>October</option>
          <option>November</option>
          <option>December</option>
        </select>
      </th>
      <th style='color:white;background:black'>Year</th>
      <th colspan='2' style='background: #CCFFCC'>
        <div style='text-align: center;' id='year' formatting='s!'></div>
      </th>
    </tr>
  </tbody>
  @if(Auth::user()->hasGoalTracking())
  <tbody class='mainBody'>
    <tr class='greenBanner'>
      <th>Category</th>
      <th></th>
      <th>Goal</th>
      <th>Actual</th>
      <th>Variance</th>
      <th>Goal</th>
      <th>Actual</th>
      <th>Variance</th>
    </tr>
    <tr class='redBanner'>
      <th colspan='2' style="border-right:none;">Leads Generated</th>
      <th colspan='6' style="border-left:none;"></th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Seller Leads</th>
      <th>
        <div style='text-align: center;' id='a1' formatting='#1'>0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i1' index='0' tabindex="1" formatting="#0"/>
      </th>
      <th>
        <div style='text-align: center;' id='a2' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='a3' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='a4' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='a5' formatting='#1'>0</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>% Conversion to Seller Contacts</th>
      <th>
        <div style='text-align: center;' id='a6' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a7' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a8' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a9' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a10' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a11' formatting='%1'>0.0%</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Seller Contacts</th>
      <th>
        <div style='text-align: center;' id='a12' formatting='#1'>0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i2' index='1' tabindex="2" formatting="#0"/>
      </th>
      <th>
        <div style='text-align: center;' id='a13' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='a14' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='a15' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='a16' formatting='#1'>0</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>% Conversion to Seller Appointments</th>
      <th>
        <div style='text-align: center;' id='a17' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a18' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a19' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a20' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a21' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a22' formatting='%1'>0.0%</div>
      </th>
    </tr>
    <tr style='border-bottom: 2pt solid black'>
      <th colspan='2' class='whiteCell'>Seller Appointments</th>
      <th>
        <div style='text-align: center;' id='a23' formatting='#1'>0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i3' index='2' tabindex="3" formatting="#0"/>
      </th>
      <th>
        <div style='text-align: center;' id='a24' formatting='#1'>#</div>
      </th>
      <th>
        <div style='text-align: center;' id='a25' formatting='#1'>#</div>
      </th>
      <th>
        <div style='text-align: center;' id='a26' formatting='#1'>#</div>
      </th>
      <th>
        <div style='text-align: center;' id='a27' formatting='#1'>#</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Buyer Leads</th>
      <th>
        <div style='text-align: center;' id='a28' formatting='#1'>0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i4' index='3' tabindex="4" formatting="#0"/>
      </th>
      <th>
        <div style='text-align: center;' id='a29' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='a30' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='a31' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='a32' formatting='#1'>0</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>% Conversion to Buyer Contacts</th>
      <th>
        <div style='text-align: center;' id='a33' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a34' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a35' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a36' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a37' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a38' formatting='%1'>0.0%</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Buyer Contacts</th>
      <th>
        <div style='text-align: center;' id='a39' formatting='#1'>0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i5' index='4' tabindex="5" formatting="#0"/>
      </th>
      <th>
        <div style='text-align: center;' id='a40' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='a41' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='a42' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='a43' formatting='#1'>0</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>% Conversion to Buyer Appointments</th>
      <th>
        <div style='text-align: center;' id='a44' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a45' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a46' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a47' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a48' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='a49' formatting='%1'>0.0%</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Buyer Appointments</th>
      <th>
        <div style='text-align: center;' id='a50' formatting='#1'>0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i6' index='5' tabindex="6" formatting="#0"/>
      </th>
      <th>
        <div style='text-align: center;' id='a51' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='a52' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='a53' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='a54' formatting='#1'>0</div>
      </th>
    </tr>
  </tbody>
  <!--**********************************************************************************************************************************-->
  <tbody class='mainBody'>
    <tr class='redBanner'>
      <th colspan='2' style="border-right:none;">Listings Taken</th>
      <th colspan='6' style="border-left:none;"></th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>% Seller Appointments Conversion to Listings</th>
      <th>
        <div style='text-align: center;' id='b1' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='b2' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='b3' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='b4' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='b5' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='b6' formatting='%1'>0.0%</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Seller Listings Taken</th>
      <th>
        <div style='text-align: center;' id='b7' formatting='#1'>0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i7' index='6' tabindex="7" formatting="#0"/>
      </th>
      <th>
        <div style='text-align: center;' id='b8' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='b9' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='b10' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='b11' formatting='#1'>0</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>% Buyer Appointments Conversion to B/A</th>
      <th>
        <div style='text-align: center;' id='b12' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='b13' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='b14' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='b15' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='b16' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='b17' formatting='%1'>0.0%</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Buyer Listings Taken</th>
      <th>
        <div style='text-align: center;' id='b18' formatting='#1'>0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i8' index='7' tabindex="8" formatting="#0"/>
      </th>
      <th>
        <div style='text-align: center;' id='b19' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='b20' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='b21' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='b22' formatting='#1'>0</div>
      </th>
    </tr>
  </tbody>
  <!--**********************************************************************************************************************************-->
  <tbody class='mainBody'>
    <tr class='redBanner'>
      <th colspan='2' style="border-right:none;">Contracts Written</th>
      <th colspan='6' style="border-left:none;"></th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>% Seller Listings to Contracts</th>
      <th>
        <div style='text-align: center;' id='c1' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='c2' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='c3' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='c4' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='c5' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='c6' formatting='%1'>0.0%</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Seller Contracts Written (units)</th>
      <th>
        <div style='text-align: center;' id='c7' formatting='#1'>0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i9' index='8' tabindex="9" formatting="#0"/>
      </th>
      <th>
        <div style='text-align: center;' id='c8' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='c9' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='c10' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='c11' formatting='#1'>0</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>% Buyer Listings to Contracts</th>
      <th>
        <div style='text-align: center;' id='c12' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='c13' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='c14' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='c15' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='c16' formatting='%1'>0.0%</div>
      </th>
      <th>
        <div style='text-align: center;' id='c17' formatting='%1'>0.0%</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Buyer Contracts Written (units)</th>
      <th>
        <div style='text-align: center;' id='c18' formatting='#1'>0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i10' index='9' tabindex="10" formatting="#0"/>
      </th>
      <th>
        <div style='text-align: center;' id='c19' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='c20' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='c21' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='c22' formatting='#1'>0</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Seller Contracts Written Volume</th>
      <th>
        <div style='text-align: center;' id='c23' formatting='$0'>$0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i11' index='10' tabindex="11" formatting="$0"/>
      </th>
      <th>
        <div style='text-align: center;' id='c24' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='c25' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='c26' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='c27' formatting='$0'>$0</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Buyer Contracts Written Volume</th>
      <th>
        <div style='text-align: center;' id='c28' formatting='$0'>$0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i12' index='11' tabindex="12" formatting="$0"/>
      </th>
      <th>
        <div style='text-align: center;' id='c29' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='c30' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='c31' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='c32' formatting='$0'>$0</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Seller Contracts Written GCI</th>
      <th>
        <div style='text-align: center;' id='c33' formatting='$0'>$0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i13' index='12' tabindex="13" formatting="$0"/>
      </th>
      <th>
        <div style='text-align: center;' id='c34' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='c35' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='c36' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='c37' formatting='$0'>$0</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Buyer Contracts Written GCI</th>
      <th>
        <div style='text-align: center;' id='c38' formatting='$0'>$0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i14' index='13' tabindex="14" formatting="$0"/>
      </th>
      <th>
        <div style='text-align: center;' id='c39' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='c40' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='c41' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='c42' formatting='$0'>$0</div>
      </th>
    </tr>
  </tbody>
  <!--**********************************************************************************************************************************-->
  <tbody class='mainBody'>
    <tr class='redBanner'>
      <th colspan='2' style="border-right:none;">Contracts Closed</th>
      <th colspan='6' style="border-left:none;"></th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Seller Contracts Closed (units)</th>
      <th>
        <div style='text-align: center;' id='d1' formatting='#1'>0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i15' index='14' tabindex="15" formatting="#0"/>
      </th>
      <th>
        <div style='text-align: center;' id='d2' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='d3' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='d4' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='d5' formatting='#1'>0</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Buyer Contracts Closed (units)</th>
      <th>
        <div style='text-align: center;' id='d6' formatting='#1'>0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i16' index='15' tabindex="16" formatting="#0"/>
      </th>
      <th>
        <div style='text-align: center;' id='d7' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='d8' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='d9' formatting='#1'>0</div>
      </th>
      <th>
        <div style='text-align: center;' id='d10' formatting='#1'>0</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Seller Contracts Closed Volume</th>
      <th>
        <div style='text-align: center;' id='d11' formatting='$0'>$0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i17' index='16' tabindex="17" formatting="$0"/>
      </th>
      <th>
        <div style='text-align: center;' id='d12' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='d13' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='d14' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='d15' formatting='$0'>$0</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Buyer Contracts Closed Volume</th>
      <th>
        <div style='text-align: center;' id='d16' formatting='$0'>$0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i18' index='17' tabindex="18" formatting="$0"/>
      </th>
      <th>
        <div style='text-align: center;' id='d17' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='d18' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='d19' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='d20' formatting='$0'>$0</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Seller Contracts Closed GCI</th>
      <th>
        <div style='text-align: center;' id='d21' formatting='$0'>$0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i19' index='18' tabindex="19" formatting="$0"/>
      </th>
      <th>
        <div style='text-align: center;' id='d22' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='d23' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='d24' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='d25' formatting='$0'>$0</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Buyer Contracts Closed GCI</th>
      <th>
        <div style='text-align: center;' id='d26' formatting='$0'>$0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i20' index='19' tabindex="20" formatting="$0"/>
      </th>
      <th>
        <div style='text-align: center;' id='d27' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='d28' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='d29' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='d30' formatting='$0'>$0</div>
      </th>
    </tr>
  </tbody>
  <!--**********************************************************************************************************************************-->
  <tbody class='mainBody'>
    <tr class='redBanner'>
      <th colspan='2' style="border-right:none;">Money</th>
      <th colspan='6' style="border-left:none;"></th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Total GCI</th>
      <th>
        <div style='text-align: center;' id='e1' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='e2' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='e3' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='e4' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='e5' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='e6' formatting='$0'>$0</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Cost of Sales</th>
      <th>
        <div style='text-align: center;' id='e7' formatting='$0'>$0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i21' index='20' tabindex="21" formatting="$0"/>
      </th>
      <th>
        <div style='text-align: center;' id='e8' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='e9' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='e10' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='e11' formatting='$0'>$0</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Operating Expenses</th>
      <th>
        <div style='text-align: center;' id='e12' formatting='$0'>$0</div>
      </th>
      <th class='yellowCell'>
        <input style='width: 75px;height:20px' onchange='updateAndPost(this)' 
               class='inputCell' type="text" id='i22' index='21' tabindex="22" formatting="$0"/>
      </th>
      <th>
        <div style='text-align: center;' id='e13' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='e14' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='e15' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='e16' formatting='$0'>$0</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='whiteCell'>Net Income</th>
      <th>
        <div style='text-align: center;' id='e17' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='e18' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='e19' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='e20' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='e21' formatting='$0'>$0</div>
      </th>
      <th>
        <div style='text-align: center;' id='e22' formatting='$0'>$0</div>
      </th>
    </tr>
  </tbody>
  @endif
</table>
</body>
@endsection
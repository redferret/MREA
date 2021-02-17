@extends('layouts.app')
@section('style-sheets')
<link rel="stylesheet" href="{{asset('css/EconomicModelStyles.css')}}">
@endsection
@section('content')
{{Form::body('updateEconomicModel()')}}
<table class='center' id='mainTable'>
  @include('models.economic_model_header')
  <tbody>
    <tr class='tableBanner'>
      <td style='text-align: left'>
        Buyers
      </td>
      <td>
        <div>Unit Value</div>
      </td>
      <td>
        <div>Assumptions</div>
      </td>
      <td>
        <div id='date10' formatting='s!'>####</div>
      </td>
      <td>
        <div id='date11' formatting='s!'>####</div>
      </td>
      <td>
        <div id='date12' formatting='s!'>####</div>
      </td>
    </tr>
  </tbody>
  <tbody class='buyersBody'>
    <tr class='sideBorder'>
      <td style='text-align: left'>
        % of Revenue from Buyers
      </td>
      <td></td>
      <td>
        <div id='e1' formatting='%0'>0%</div>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class='tableBody3 sideBorder'>
      <td style='text-align: left'>
        Gross Revenue from Buyers
      </td>
      <td></td>
      <td></td>
      <td>
        <div id='e2' formatting='$0'>$0</div>
      </td>
      <td>
        <div id='e3' formatting='$0'>$0</div>
      </td>
      <td>
        <div id='e4' formatting='$0'>$0</div>
      </td>
    </tr>
    <tr class='sideBorder'>
      <td style='text-align: left'>
        Commission
      </td>
      <td></td>
      <td>
        <div id='e5' formatting='%1'>0%</div>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class='tableBody3 sideBorder'>
      <td style='text-align: left'>
        Buyer Sold Volume
      </td>
      <td></td>
      <td></td>
      <td>
        <div id='e6' formatting='$0'>$0</div>
      </td>
      <td>
        <div id='e7' formatting='$0'>$0</div>
      </td>
      <td>
        <div id='e8' formatting='$0'>$0</div>
      </td>
    </tr>
    <tr class='sideBorder'>
      <td style='text-align: left'>
        Average Purchase Price
      </td>
      <td></td>
      <td>
        <div id='e9' formatting='$0'>$0</div>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class='tableBody3 sideBorder'>
      <td style='text-align: left'>
        Buyers Sold
      </td>
      <td style='background: #FF99CC'>
        <div id='e10' formatting='$2'>$0</div>
      </td>
      <td></td>
      <td>
        <div id='e11' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='e12' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='e13' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='sideBorder'>
      <td style='text-align: left'>
        Conversion Rate (%)
      </td>
      <td></td>
      <td>
        <div id='e14' formatting='%0'>0%</div>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class='tableBody3 sideBorder'>
      <td style='text-align: left'>
        Buyers Under Contract
      </td>
      <td style='background: #FF99CC'>
        <div id='e15' formatting='$2'>$0</div>
      </td>
      <td></td>
      <td>
        <div id='e16' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='e17' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='e18' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='sideBorder'>
      <td style='text-align: left'>
        Conversion Rate (%)
      </td>
      <td></td>
      <td>
        <div id='e19' formatting='%0'>0%</div>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class='tableBody3 sideBorder'>
      <td style='text-align: left'>
        Buyer Listings Taken
      </td>
      <td style='background: #FF99CC'>
        <div id='e20' formatting='$2'>$0</div>
      </td>
      <td></td>
      <td>
        <div id='e21' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='e22' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='e23' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='sideBorder'>
      <td style='text-align: left'>
        Conversion Rate (%)
      </td>
      <td></td>
      <td>
        <div id='e24' formatting='%0'>0%</div>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class='tableBody3 sideBorder'>
      <td style='text-align: left'>
        Buyer Listing Appointments
      </td>
      <td style='background: #FF99CC'>
        <div id='e25' formatting='$2'>$0</div>
      </td>
      <td></td>
      <td>
        <div id='e26' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='e27' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='e28' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='sideBorder'>
      <td style='text-align: left'>
        Buyer Contracts
      </td>
      <td>
        <div id='e29' formatting='$2'>$0</div>
      </td>
      <td>
        <div id='e30' formatting='%0'>0%</div>
      </td>
      <td>
        <div id='e31' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='e32' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='e33' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='tableBody3 sideBorder'>
      <td style='text-align: left'>
        Buyer Leads
      </td>
      <td style='background: #FF99CC'>
        <div id='e34' formatting='$2'>$0</div>
      </td>
      <td>
        <div id='e35' formatting='%0'>0%</div>
      </td>
      <td>
        <div id='e36' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='e37' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='e38' formatting='#2'>0.00</div>
      </td>
    </tr>
  </tbody>
  <tbody class='buyersBody' style='background: #CCFFCC'>
    <!-- ************************ Section ************************* -->
    <tr class='thickTopBorder sideBorder'>
      <td colspan='3' style='text-align: left'>
        Annual Buyer Listings Closed
      </td>
      <td>
        <div id='f1' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f2' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f3' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='topBorder sideBorder'>
      <td colspan='3' style='text-align: left'>
        Monthly Buyer Listings Closed
      </td>
      <td>
        <div id='f4' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f5' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f6' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='topBorder sideBorder'>
      <td style='text-align: left;border-right: none'>
        Weekly Buyer Listings Closed
      </td>
      <td style='border-right: none'># Weeks</td>
      <td style='text-align: center'>
        <div id='f7' formatting='#0'>0</div>
      </td>
      <td>
        <div id='f8' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f9' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f10' formatting='#2'>0.00</div>
      </td>
    </tr>
    <!-- ************************ Section ************************* -->
    <tr class='thickTopBorder sideBorder'>
      <td colspan='3' style='text-align: left'>
        Annual Buyer Listings Under Contract
      </td>
      <td>
        <div id='f11' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f12' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f13' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='topBorder sideBorder'>
      <td colspan='3' style='text-align: left'>
        Monthly Buyer Listings Under Contract
      </td>
      <td>
        <div id='f14' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f15' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f16' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='topBorder sideBorder'>
      <td style='text-align: left;border-right: none'>
        Weekly Buyer Listings Under Contract
      </td>
      <td style='border-right: none'># Weeks</td>
      <td style='text-align: center'>
        <div id='f17' formatting='#0'>0</div>
      </td>
      <td>
        <div id='f18' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f19' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f20' formatting='#2'>0.00</div>
      </td>
    </tr>
    <!-- ************************ Section ************************* -->
    <tr class='thickTopBorder sideBorder'>
      <td colspan='3' style='text-align: left'>
        Annual Buyer Listings Taken
      </td>
      <td>
        <div id='f21' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f22' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f23' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='topBorder sideBorder'>
      <td colspan='3' style='text-align: left'>
        Monthly Buyer Listings Taken
      </td>
      <td>
        <div id='f24' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f25' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f26' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='topBorder sideBorder'>
      <td style='text-align: left;border-right: none'>
        Weekly Buyer Listings Taken
      </td>
      <td style='border-right: none'># Weeks</td>
      <td style='text-align: center'>
        <div id='f27' formatting='#0'>0</div>
      </td>
      <td>
        <div id='f28' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f29' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f30' formatting='#2'>0.00</div>
      </td>
    </tr>
    <!-- ************************ Section ************************* -->
    <tr class='thickTopBorder sideBorder'>
      <td colspan='3' style='text-align: left'>
        Annual Buyer Listing Appointments
      </td>
      <td>
        <div id='f31' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f32' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f33' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='topBorder sideBorder'>
      <td colspan='3' style='text-align: left'>
        Monthly Buyer Listings Appointments
      </td>
      <td>
        <div id='f34' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f35' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f36' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='topBorder sideBorder'>
      <td style='text-align: left;border-right: none'>
        Weekly Buyer Listings Appointments
      </td>
      <td style='border-right: none'># Weeks</td>
      <td style='text-align: center'>
        <div id='f37' formatting='#0'>0</div>
      </td>
      <td>
        <div id='f38' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f39' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='f40' formatting='#2'>0.00</div>
      </td>
    </tr>
  </tbody>
</table>
</body>
@endsection

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
        Sellers
      </td>
      <td>
        <div>Unit Value</div>
      </td>
      <td>
        <div>Assumptions</div>
      </td>
      <td>
        <div id='date7' formatting='s!'>####</div>
      </td>
      <td>
        <div id='date8' formatting='s!'>####</div>
      </td>
      <td>
        <div id='date9' formatting='s!'>####</div>
      </td>
    </tr>
  </tbody>
  <tbody class='sellersBody'>
    <tr class='sideBorder'>
      <td style='text-align: left'>
        % of Revenue from Sellers
      </td>
      <td></td>
      <td>
        <div id='c1' formatting='%0'>0%</div>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class='tableBody3 sideBorder'>
      <td style='text-align: left'>
        Gross Revenue from Sellers
      </td>
      <td></td>
      <td></td>
      <td>
        <div id='c2' formatting='$0'>$0</div>
      </td>
      <td>
        <div id='c3' formatting='$0'>$0</div>
      </td>
      <td>
        <div id='c4' formatting='$0'>$0</div>
      </td>
    </tr>
    <tr class='sideBorder'>
      <td style='text-align: left'>
        Commission
      </td>
      <td></td>
      <td>
        <div id='c5' formatting='%1'>0%</div>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class='tableBody3 sideBorder'>
      <td style='text-align: left'>
        Seller Sold Volume
      </td>
      <td></td>
      <td></td>
      <td>
        <div id='c6' formatting='$0'>$0</div>
      </td>
      <td>
        <div id='c7' formatting='$0'>$0</div>
      </td>
      <td>
        <div id='c8' formatting='$0'>$0</div>
      </td>
    </tr>
    <tr class='sideBorder'>
      <td style='text-align: left'>
        Average Sales Price
      </td>
      <td></td>
      <td>
        <div id='c9' formatting='$0'>$0</div>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class='tableBody3 sideBorder'>
      <td style='text-align: left'>
        Sellers Closed
      </td>
      <td style='background: #FF99CC'>
        <div id='c10' formatting='$2'>$0</div>
      </td>
      <td></td>
      <td>
        <div id='c11' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='c12' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='c13' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='sideBorder'>
      <td style='text-align: left'>
        Conversion Rate (%)
      </td>
      <td></td>
      <td>
        <div id='c14' formatting='%0'>0%</div>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class='tableBody3 sideBorder'>
      <td style='text-align: left'>
        Seller Listings Under Contract
      </td>
      <td style='background: #FF99CC'>
        <div id='c15' formatting='$2'>$0</div>
      </td>
      <td></td>
      <td>
        <div id='c16' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='c17' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='c18' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='sideBorder'>
      <td style='text-align: left'>
        Conversion Rate (%)
      </td>
      <td></td>
      <td>
        <div id='c19' formatting='%0'>0%</div>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class='tableBody3 sideBorder'>
      <td style='text-align: left'>
        Seller Listings Taken
      </td>
      <td style='background: #FF99CC'>
        <div id='c20' formatting='$2'>$0</div>
      </td>
      <td></td>
      <td>
        <div id='c21' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='c22' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='c23' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='sideBorder'>
      <td style='text-align: left'>
        Conversion Rate (%)
      </td>
      <td></td>
      <td>
        <div id='c24' formatting='%0'>0%</div>
      </td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr class='tableBody3 sideBorder'>
      <td style='text-align: left'>
        Seller Listing Appointments
      </td>
      <td style='background: #FF99CC'>
        <div id='c25' formatting='$2'>$0</div>
      </td>
      <td></td>
      <td>
        <div id='c26' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='c27' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='c28' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='sideBorder'>
      <td style='text-align: left'>
        Seller Contracts
      </td>
      <td>
        <div id='c29' formatting='$2'>$0</div>
      </td>
      <td>
        <div id='c30' formatting='%0'>0%</div>
      </td>
      <td>
        <div id='c31' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='c32' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='c33' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='tableBody3 sideBorder'>
      <td style='text-align: left'>
        Seller Leads
      </td>
      <td style='background: #FF99CC'>
        <div id='c34' formatting='$2'>$0</div>
      </td>
      <td>
        <div id='c35' formatting='%0'>0%</div>
      </td>
      <td>
        <div id='c36' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='c37' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='c38' formatting='#2'>0.00</div>
      </td>
    </tr>
  </tbody>
  <tbody class='sellersBody' style='background: #CCFFCC'>
    <!-- ************************ Section ************************* -->
    <tr class='thickTopBorder sideBorder'>
      <td colspan='3' style='text-align: left'>
        Annual Seller Listings Closed
      </td>
      <td>
        <div id='d1' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d2' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d3' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='topBorder sideBorder'>
      <td colspan='3' style='text-align: left'>
        Monthly Seller Listings Closed
      </td>
      <td>
        <div id='d4' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d5' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d6' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='topBorder sideBorder'>
      <td style='text-align: left;border-right: none'>
        Weekly Seller Listings Closed
      </td>
      <td style='border-right: none'># Weeks</td>
      <td style='text-align: center'>
        <div id='d7' formatting='#0'>0</div>
      </td>
      <td>
        <div id='d8' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d9' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d10' formatting='#2'>0.00</div>
      </td>
    </tr>
    <!-- ************************ Section ************************* -->
    <tr class='thickTopBorder sideBorder'>
      <td colspan='3' style='text-align: left'>
        Annual Seller Listings Under Contract
      </td>
      <td>
        <div id='d11' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d12' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d13' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='topBorder sideBorder'>
      <td colspan='3' style='text-align: left'>
        Monthly Seller Listings Under Contract
      </td>
      <td>
        <div id='d14' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d15' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d16' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='topBorder sideBorder'>
      <td style='text-align: left;border-right: none'>
        Weekly Seller Listings Under Contract
      </td>
      <td style='border-right: none'># Weeks</td>
      <td style='text-align: center'>
        <div id='d17' formatting='#0'>0</div>
      </td>
      <td>
        <div id='d18' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d19' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d20' formatting='#2'>0.00</div>
      </td>
    </tr>
    <!-- ************************ Section ************************* -->
    <tr class='thickTopBorder sideBorder'>
      <td colspan='3' style='text-align: left'>
        Annual Seller Listings Taken
      </td>
      <td>
        <div id='d21' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d22' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d23' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='topBorder sideBorder'>
      <td colspan='3' style='text-align: left'>
        Monthly Seller Listings Taken
      </td>
      <td>
        <div id='d24' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d25' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d26' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='topBorder sideBorder'>
      <td style='text-align: left;border-right: none'>
        Weekly Seller Listings Taken
      </td>
      <td style='border-right: none'># Weeks</td>
      <td style='text-align: center'>
        <div id='d27' formatting='#0'>0</div>
      </td>
      <td>
        <div id='d28' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d29' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d30' formatting='#2'>0.00</div>
      </td>
    </tr>
    <!-- ************************ Section ************************* -->
    <tr class='thickTopBorder sideBorder'>
      <td colspan='3' style='text-align: left'>
        Annual Seller Listing Appointments
      </td>
      <td>
        <div id='d31' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d32' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d33' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='topBorder sideBorder'>
      <td colspan='3' style='text-align: left'>
        Monthly Seller Listings Appointments
      </td>
      <td>
        <div id='d34' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d35' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d36' formatting='#2'>0.00</div>
      </td>
    </tr>
    <tr class='topBorder sideBorder'>
      <td style='text-align: left;border-right: none'>
        Weekly Seller Listings Appointments
      </td>
      <td style='border-right: none'># Weeks</td>
      <td style='text-align: center'>
        <div id='d37' formatting='#0'>0</div>
      </td>
      <td>
        <div id='d38' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d39' formatting='#2'>0.00</div>
      </td>
      <td>
        <div id='d40' formatting='#2'>0.00</div>
      </td>
    </tr>
  </tbody>
</table>
@endsection

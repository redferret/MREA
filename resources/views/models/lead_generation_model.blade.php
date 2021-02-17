@extends('layouts.app')
@section('style-sheets')
<link rel="stylesheet" href="{{asset('css/LeadGenerationStyles.css')}}">
@endsection
@section('content')
{{Form::body('updateLeadGenerationModel()')}}
<table id='mainTable'>
  <tbody>
    <tr>
      <th style='min-width: 400px'></th>
      <th style='min-width: 40px'></th>
      <th style='min-width: 40px'></th>
      <th style='min-width: 40px'></th>
      <th style='min-width: 50px'></th>
      <th style='min-width: 50px'></th>
      <th style='min-width: 50px'></th>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <th colspan='4' class='tableHeader' style='text-align: left'>
        Lead Generation Model
      </th>
      <th colspan='3' class='tableHeader' style='font-size: 11pt; text-align: right'>
        <div id='agentName' formatting='s!'>-Agent-</div>
      </th>
    </tr>
    <tr>
      <th colspan='7' class='tableHeader' style='font-size: 10pt; text-align: right'>
        <div id='date' formatting='d!'>-Date-</div>
      </th>
    </tr>
  </tbody>
  <tbody class='table1'>
    <tr>
      <td colspan='7' style='text-align: left'>
        Forecasted Lead Generation Activity
      </td>
    </tr>
    <tr>
      <td colspan='2' style='text-align: left'>
        Option 1 - "Met" Database
      </td>
      <td style='text-align: center'>%</td>
      <td style='text-align: center'>Ratio</td>
      <td style='text-align: center'>
        <div id='date1' formatting='d!'>####</div>
      </td>
      <td style='text-align: center'>
        <div id='date2' formatting='d!'>####</div>
      </td>
      <td style='text-align: center'>
        <div id='date3' formatting='d!'>####</div>
      </td>
    </tr>
  </tbody>
  <tbody class ='table2'>
    <tr>
      <td colspan='2' style='text-align: left; background: white; border-bottom: none'>
        Using Your "Met" Database Only
      </td>
      <td style='text-align: center'>
        <div id='a1' formatting='%0'>100%</div>
      </td>
      <td style='text-align: center'>
        <label id='a2' formatting='#0'>0</label>:
        <label id='a3' formatting='#0'>0</label>
      </td>
      <td>
        <div id='a4' formatting='#0'>0</div>
      </td>
      <td>
        <div id='a5' formatting='#0'>0</div>
      </td>
      <td>
        <div id='a6' formatting='#0'>0</div>
      </td>
    </tr>
    <tr>
      <td colspan='2' style='text-align: left; background: white; border-top: none; border-bottom: none'>
        - Using 8x8 and 33 touch marketing system per year
      </td>
      <td colspan='2' style='background: white; border-bottom: none'>
      </td>
      <td style='background: white; border-bottom: none'></td>
      <td style='background: white; border-bottom: none'></td>
      <td style='background: white; border-bottom: none'></td>
    </tr>
    <tr>
      <td style='text-align: left; background: white; border-top:none'>
        - Existing contacts in your "Met" database
      </td>
      <td>
        <div id='a7' formatting='#0'>0</div>
      </td>
      <td colspan='2' style='background: white; border-top: none'></td>
      <td style='background: white; border-top: none'></td>
      <td style='background: white; border-top: none'></td>
      <td style='background: white; border-top: none'></td>
    </tr>
    <tr>
      <td colspan='4' style='text-align: left; background: white'>
        Gap Analysis: Names needed in "Met" database
      </td>
      <td>
        <div id='a8' formatting='#0'>0</div>
      </td>
      <td>
        <div id='a9' formatting='#0'>0</div>
      </td>
      <td>
        <div id='a10' formatting='#0'>0</div>
      </td>
    </tr>
    <!-- ******************** SPACE ****************** -->
    <tr>
      <td colspan='7' style='background: white; border: none'></td>
    </tr>
  </tbody>
  <tbody class="table2">
    <tr>
      <td style='text-align: left; background: white; border-bottom: none'>
        Number of Touches (33 or 41 if 8x8 is included)
      </td>
      <td style='border-bottom: none'>
        <div id='a11' formatting='#0'>0</div>
      </td>
      <td colspan='2' style='background: white; border-bottom: none'></td>
      <td style='background: white; border-bottom: none'></td>
      <td style='background: white; border-bottom: none'></td>
      <td style='background: white; border-bottom: none'></td>
    </tr>
    <tr>
      <td style='text-align: left; background: white; border-top: none'>
        Cost per Touch
      </td>
      <td style='border-top: none'>
        <div id='a12' formatting='$2'>$0.00</div>
      </td>
      <td colspan='2' style='background: white; border-top: none'></td>
      <td style='background: white; border-top: none'></td>
      <td style='background: white; border-top: none'></td>
      <td style='background: white; border-top: none'></td>
    </tr>
    <tr>
      <td colspan='4' style='text-align: left; background: white; font-size: 11pt'>
        Total Lead Generation Costs
      </td>
      <td>
        <div id='a13' formatting='$0'>$0.00</div>
      </td>
      <td>
        <div id='a14' formatting='$0'>$0.00</div>
      </td>
      <td>
        <div id='a15' formatting='$0'>$0.00</div>
      </td>
    </tr>
  </tbody>
  <!-- Next section of the main Table -->
  <tbody class='table1'>
    <!-- Space between each section of the table bodies -->
    <tr>
      <td colspan='7' style='background: white; border: none'></td>
    </tr>
    <tr>
      <td colspan='2' style='text-align: left;'>
        Option 2 - "Haven't Met" Database
      </td>
      <td style='text-align: center'>%</td>
      <td style='text-align: center'>Ratio</td>
      <td style='text-align: center'>
        <div id='date4' formatting='d!'>####</div>
      </td>
      <td style='text-align: center'>
        <div id='date5' formatting='d!'>####</div>
      </td>
      <td style='text-align: center'>
        <div id='date6' formatting='d!'>####</div>
      </td>
    </tr>
  </tbody>
  <tbody class ='table2'>
    <tr>
      <td colspan='2' style='text-align: left; background: white; border-bottom: none'>
        Using Your "Haven't Met" Database Only
      </td>
      <td style='text-align: center'>
        <div id='b1' formatting='%0'>100%</div>
      </td>
      <td style='text-align: center'>
        <label id='b2' formatting='#0'>0</label>:
        <label id='b3' formatting='#0'>0</label>
      </td>
      <td>
        <div id='b4' formatting='#0'>0</div>
      </td>
      <td>
        <div id='b5' formatting='#0'>0</div>
      </td>
      <td>
        <div id='b6' formatting='#0'>0</div>
      </td>
    </tr>
    <tr>
      <td colspan='2' style='text-align: left; background: white; border-top: none; border-bottom: none'>
        - Using 12 direct marketing touches per year
      </td>
      <td colspan='2' style='background: white; border-bottom: none'>
      </td>
      <td style='background: white; border-bottom: none'></td>
      <td style='background: white; border-bottom: none'></td>
      <td style='background: white; border-bottom: none'></td>
    </tr>
    <tr>
      <td style='text-align: left; background: white; border-top: none'>
        - Existing contacts in your "Haven't Met" database
      </td>
      <td>
        <div id='b7' formatting='#0'>0</div>
      </td>
      <td colspan='2' style='background: white; border-top: none'></td>
      <td style='background: white; border-top: none'></td>
      <td style='background: white; border-top: none'></td>
      <td style='background: white; border-top: none'></td>
    </tr>
    <tr>
      <td colspan='4' style='text-align: left; background: white'>
        Gap Analysis: Names needed in "Haven't Met" database
      </td>
      <td>
        <div id='b8' formatting='#0'>0</div>
      </td>
      <td>
        <div id='b9' formatting='#0'>0</div>
      </td>
      <td>
        <div id='b10' formatting='#0'>0</div>
      </td>
    </tr>
    <!-- **************** SPACE ********************** -->
    <tr>
      <td colspan='7' style='background: white; border: none'></td>
    </tr>
  </tbody>
  <tbody class="table2">
    <tr>
      <td style='text-align: left; background: white; border-bottom: none'>
        Number of Touches (12 direct mailings per year)
      </td>
      <td style='border-bottom: none'>
        <div id='b11' formatting='#0'>0</div>
      </td>
      <td colspan='2' style='background: white; border-bottom: none'></td>
      <td style='background: white; border-bottom: none'></td>
      <td style='background: white; border-bottom: none'></td>
      <td style='background: white; border-bottom: none'></td>
    </tr>
    <tr>
      <td style='text-align: left; background: white; border-top: none'>
        Cost per Touch
      </td>
      <td style='border-top: none'>
        <div id='b12' formatting='$2'>$0.00</div>
      </td>
      <td colspan='2' style='background: white; border-top: none'></td>
      <td style='background: white; border-top: none'></td>
      <td style='background: white; border-top: none'></td>
      <td style='background: white; border-top: none'></td>
    </tr>
    <tr>
      <td colspan='4' style='text-align: left; background: white; font-size: 11pt'>
        Total Lead Generation Costs
      </td>
      <td>
        <div id='b13' formatting='$0'>0</div>
      </td>
      <td>
        <div id='b14' formatting='$0'>0</div>
      </td>
      <td>
        <div id='b15' formatting='$0'>0</div>
      </td>
    </tr>
  </tbody>
  <tbody class='table1'>
    <tr>
      <td colspan='2' style='text-align: left'>
        Option 3 - Combined "Met" & "Haven't Met" Databases
      </td>
      <td style='text-align: center'>%</td>
      <td style='text-align: center'>Ratio</td>
      <td style='text-align: center'>
        <div id='date7' formatting='d!'>####</div>
      </td>
      <td style='text-align: center'>
        <div id='date8' formatting='d!'>####</div>
      </td>
      <td style='text-align: center'>
        <div id='date9' formatting='d!'>####</div>
      </td>
    </tr>
  </tbody>
  <tbody class='table2'>
    <tr>
      <td colspan='2' style='text-align: left;background:white;border-bottom:none'>
        - Met Database
      </td>
      <td style='text-align: center;border-bottom:none'>
        <div id='d1' formatting='%0'>0%</div>
      </td>
      <td style='text-align: center;border-bottom:none'>
        <label id='d2' formatting='#0'>0</label>:
        <label id='d3' formatting='#0'>0</label>
      </td>
      <td>
        <div id='d4' formatting='#0'>0</div>
      </td>
      <td>
        <div id='d5' formatting='#0'>0</div>
      </td>
      <td>
        <div id='d6' formatting='#0'>0</div>
      </td>
    </tr>
    <tr>
      <td colspan='2' style='text-align: left;background:white;border-top:none'>
        - Haven't Met Database
      </td>
      <td style='text-align: center;border-top:none'>
        <div id='d7' formatting='%0'>0%</div>
      </td>
      <td style='text-align: center;border-top:none'>
        <label id='d8' formatting='#0'>0</label>:
        <label id='d9' formatting='#0'>0</label>
      </td>
      <td>
        <div id='d10' formatting='#0'>0</div>
      </td>
      <td>
        <div id='d11' formatting='#0'>0</div>
      </td>
      <td>
        <div id='d12' formatting='#0'>0</div>
      </td>
    </tr>
    <tr>
      <td colspan='2' style='text-align: left;background:white'>
        Total Names in Both Databases
      </td>
      <td style='text-align: center'>
        <div id='d13' formatting='%0'>0%</div>
      </td>
      <td style='border: none;background:white'>
      </td>
      <td>
        <div id='d14' formatting='#0'>0</div>
      </td>
      <td>
        <div id='d15' formatting='#0'>0</div>
      </td>
      <td>
        <div id='d16' formatting='#0'>0</div>
      </td>
    </tr>
    <tr>
      <td style='text-align: left;background:white'>
        - Existing contacts in your "Met" database
      </td>
      <td>
        <div id='d17' formatting='#0'>0</div>
      </td>
      <td colspan ='5' style='background: white; border-top: none'></td>
    </tr>
    <tr>
      <td colspan='4' style='text-align: left; background: white'>
        Gap Analysis: Names needed in "Met" database
      </td>
      <td>
        <div id='d18' formatting='#0'>0</div>
      </td>
      <td>
        <div id='d19' formatting='#0'>0</div>
      </td>
      <td>
        <div id='d20' formatting='#0'>0</div>
      </td>
    </tr>
    <!-- **************** SPACE ********************** -->
    <tr>
      <td colspan='7' style='background: white; border: none'></td>
    </tr>
    <tr>
      <td style='text-align: left;background:white'>
        - Existing contacts in your "Haven't Met" database
      </td>
      <td>
        <div id='d21' formatting='#0'>0</div>
      </td>
      <td colspan ='5' style='background: white; border-top: none'></td>
    </tr>
    <tr>
      <td colspan='4' style='text-align: left; background: white'>
        Gap Analysis: Names needed in "Haven't Met" database
      </td>
      <td>
        <div id='d22' formatting='#0'>0</div>
      </td>
      <td>
        <div id='d23' formatting='#0'>0</div>
      </td>
      <td>
        <div id='d24' formatting='#0'>0</div>
      </td>
    </tr>
    <!-- **************** SPACE ********************** -->
    <tr>
      <td colspan='7' style='background: white; border: none'></td>
    </tr>
    <tr>
      <td style='text-align: left; background: white; border-bottom: none'>
        Number of Touches (33 or 41 if 8x8 is included)
      </td>
      <td style='border-bottom: none'>
        <div id='d25' formatting='#0'>0</div>
      </td>
      <td colspan='2' style='background: white; border-bottom: none'></td>
      <td style='background: white; border-bottom: none'></td>
      <td style='background: white; border-bottom: none'></td>
      <td style='background: white; border-bottom: none'></td>
    </tr>
    <tr>
      <td style='text-align: left; background: white; border-top: none'>
        Cost per Touch
      </td>
      <td style='border-top: none'>
        <div id='d26' formatting='$2'>$0.00</div>
      </td>
      <td colspan='2' style='background: white; border-top: none'></td>
      <td style='background: white; border-top: none'></td>
      <td style='background: white; border-top: none'></td>
      <td style='background: white; border-top: none'></td>
    </tr>
    <tr>
      <td colspan='4' style='text-align: left; background: white'>
        Cost for "Met" Database
      </td>
      <td>
        <div id='d27' formatting='$0'>$0</div>
      </td>
      <td>
        <div id='d28' formatting='$0'>$0</div>
      </td>
      <td>
        <div id='d29' formatting='$0'>$0</div>
      </td>
    </tr>
    <tr>
      <td style='text-align: left; background: white; border-bottom: none'>
        Number of Touches (12 direct mailing per year)
      </td>
      <td style='border-bottom: none'>
        <div id='d30' formatting='#0'>0</div>
      </td>
      <td colspan='2' style='background: white; border-bottom: none'></td>
      <td style='background: white; border-bottom: none'></td>
      <td style='background: white; border-bottom: none'></td>
      <td style='background: white; border-bottom: none'></td>
    </tr>
    <tr>
      <td style='text-align: left; background: white; border-top: none'>
        Cost per Touch
      </td>
      <td style='border-top: none'>
        <div id='d31' formatting='$2'>$0.00</div>
      </td>
      <td colspan='2' style='background: white; border-top: none'></td>
      <td style='background: white; border-top: none'></td>
      <td style='background: white; border-top: none'></td>
      <td style='background: white; border-top: none'></td>
    </tr>
    <tr>
      <td colspan='4' style='text-align: left; background: white'>
        Cost for "Haven't Met" Database
      </td>
      <td>
        <div id='d32' formatting='$0'>$0</div>
      </td>
      <td>
        <div id='d33' formatting='$0'>$0</div>
      </td>
      <td>
        <div id='d34' formatting='$0'>$0</div>
      </td>
    </tr>
    <!-- **************** SPACE ********************** -->
    <tr>
      <td colspan='7' style='background: white; border: none'></td>
    </tr>
    <tr>
      <td colspan='4' style='text-align: left; background: white; font-size: 11pt'>
        Total Lead Generation Costs
      </td>
      <td>
        <div id='d35' formatting='$0'>$0</div>
      </td>
      <td>
        <div id='d36' formatting='$0'>$0</div>
      </td>
      <td>
        <div id='d37' formatting='$0'>$0</div>
      </td>
    </tr>
  </tbody>
</table>
</body>
@endsection
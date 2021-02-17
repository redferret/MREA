
@extends('layouts.app')
@section('style-sheets')
<link rel="stylesheet" href="{{asset('css/LongTermPlanningStyles.css')}}">
@endsection
@section('content')
{{Form::body('updateLongTermPlanning();')}}
<table class='center' id="mainTable">
  <tr>
    <th style='min-width:35px'></th>
    <th style='min-width:200px'></th>
    <th style='min-width:55px'></th>
    <th style='min-width:55px'></th>
    <th style='min-width:55px'></th>
  </tr>
  <tr>
    <td colspan='3' style='font-size: 16pt'>
      Long Term Planning Overview
    </td>
    <td colspan='2' style='font-size: 12pt; text-align: right'>
      <div id='agentName' formatting='s!'>-Agent-</div>
    </td>
  </tr>
  <tr>
    <td colspan='5' style='font-size: 10pt; text-align: right'>
      <div id='date' formatting='d!'>-date-</div>
    </td>
  </tr>
  <tr style='background: black; text-align: center; color: white'>
    <td></td>
    <td class="paddingCells" style="font-weight:400; padding-right: 100px">
      Category
    </td>
    <td class="paddingCells" style="font-weight:400;">
      <div id='dateA1' formatting='#!'>####</div>
    </td>
    <td class="paddingCells outputCell" name='#0' style="font-weight:400;">
      <div id='dateA2' formatting='#!'>####</div>
    </td>
    <td class="paddingCells outputCell" name='#0' style="font-weight:400;">
      <div id='dateA3' formatting='#!'>####</div>
    </td>
  </tr>
  <tr style="background: #CCFFCC">
    <td class="leftBorderCells" style="background: white; border-right: none;">
      GCI
    </td>
    <td colspan=1 style="background: white"></td>
    <td class="rightBorderCells">
      <div class="outputCell" id='a1' formatting='$0'>0</div>
    </td>
    <td class="rightBorderCells">
      <div class="outputCell" id='a2' formatting='$0'>0</div>
    </td>
    <td class="rightBorderCells">
      <div class="outputCell" id='a3' formatting='$0'>0</div>
    </td>
  </tr>
  <tr style="background: #CCFFCC">
    <td class="leftBorderCells" style="background: white;">
      <div id='p1' formatting='%2'>0.00%</div>
    </td>
    <td class="leftBorderCells" style="background: white">
      Cost of Sales
    </td>
    <td class="rightBorderCells">
      <div class="outputCell" id='a4' formatting='$0'>0</div>
    </td>
    <td class="rightBorderCells">
      <div class="outputCell" id='a5' formatting='$0'>0</div>
    </td>
    <td class="rightBorderCells">
      <div class="outputCell" id='a6' formatting='$0'>0</div>
    </td>
  </tr>
  <tr style="background: #CCFFCC">
    <td class="leftBorderCells" style="background: white;border-bottom: 1pt solid black">
      <div id='p2' formatting='%2'>0.00%</div>
    </td>
    <td class="leftBorderCells" style="background: white;border-bottom: 1pt solid black">
      Operating Expenses
    </td>
    <td class="rightBorderCells" style="border-bottom: 1pt solid black">
      <div class="outputCell" id='a7' formatting='$0'>0</div>
    </td>
    <td class="rightBorderCells" style="border-bottom: 1pt solid black">
      <div class="outputCell" id='a8' formatting='$0'>0</div>
    </td>
    <td class="rightBorderCells" style="border-bottom: 1pt solid black">
      <div class="outputCell" id='a9' formatting='$0'>0</div>
    </td>
  </tr>
  <tr style="background: #CCFFCC">
    <td colspan=2 style="background: white; border: 1pt solid black">
      Net Income
    </td>
    <td class="rightBorderCells" style="border-bottom: 1pt solid black">
      <label class="outputCell" id='a10' formatting='$0'>0</label>
    </td>
    <td class="rightBorderCells" style="border-bottom: 1pt solid black">
      <label class="outputCell" id='a11' formatting='$0'>0</label>
    </td>
    <td class="rightBorderCells" style="border-bottom: 1pt solid black;">
      <label class="outputCell" id='a12' formatting='$0'>0</label>
    </td>
  </tr>
  <tr style="height: 18px">
    <td colspan=5></td>
  </tr>
  <tr style="background: rgb(0, 30, 0); color: white">
    <td colspan=5 style="padding-left: 100px">
      Volume
    </td>
  </tr>
  <!-- ************** Sales Table **************-->
  <tr style="height: 18px">
    <td colspan=5></td>
  </tr>
  <tr style="background: rgb(0, 30, 0); color: white;">
    <td colspan=5>
      Sales
    </td>
  </tr>
  <tr style="background: #CCFFCC">
    <td style="background: white; border-left: 1pt solid black"></td>
    <td style="background: white">
      Buyer
    </td>
    <td class='rightClosedBorder'>
      <label id='b1' class="outputCell" formatting="#0">#</label>
    </td>
    <td class='rightClosedBorder'>
      <label id='b2' class="outputCell" formatting="#0">#</label>
    </td>
    <td class='rightClosedBorder'>
      <label id='b3' class="outputCell" formatting="#0">#</label>
    </td>
  </tr>
  <tr style="background: #CCFFCC">
    <td style="background: white; border-left: 1pt solid black; border-bottom: 1pt solid black"></td>
    <td style="background: white; border-bottom: 1pt solid black">
      Seller
    </td>
    <td class='rightClosedBorder'>
      <label id='b4' class="outputCell" formatting="#0">#</label>
    </td>
    <td class='rightClosedBorder'>
      <label id='b5' class="outputCell" formatting="#0">#</label>
    </td>
    <td class='rightClosedBorder'>
      <label id='b6' class="outputCell" formatting="#0">#</label>
    </td>
  </tr>
  <!-- ************** Listings Taken Table **************-->
  <tr style="height: 18px">
    <td colspan=5></td>
  </tr>
  <tr style="background: rgb(0, 30, 0); color: white">
    <td colspan=5>
      Listings Taken
    </td>
  </tr>
  <tr style="background: #CCFFCC">
    <td style="background: white; border-left: 1pt solid black"></td>
    <td style="background: white">
      Buyer
    </td>
    <td class='rightClosedBorder'>
      <div id='c1' class="outputCell" formatting="#0">#</div>
    </td>
    <td class='rightClosedBorder'>
      <div id='c2' class="outputCell" formatting="#0">#</div>
    </td>
    <td class='rightClosedBorder'>
      <div id='c3' class="outputCell" formatting="#0">#</div>
    </td>
  </tr>
  <tr style="background: #CCFFCC">
    <td style="background: white; border-left: 1pt solid black; border-bottom: 1pt solid black"></td>
    <td style="background: white; border-bottom: 1pt solid black">
      Seller
    </td>
    <td class='rightClosedBorder'>
      <div id='c4' class="outputCell" formatting="#0">#</div>
    </td>
    <td class='rightClosedBorder'>
      <div id='c5' class="outputCell" formatting="#0">#</div>
    </td>
    <td class='rightClosedBorder'>
      <div id='c6' class="outputCell" formatting="#0">#</div>
    </td>
  </tr>
  <!-- ************** Appointments Taken Table **************-->
  <tr style="height: 18px">
    <td colspan=5></td>
  </tr>
  <tr style="background: rgb(0, 30, 0); color: white">
    <td colspan=5>
      Appointments
    </td>
  </tr>
  <tr style="background: #CCFFCC">
    <td style="background: white; border-left: 1pt solid black"></td>
    <td style="background: white">
      Buyer
    </td>
    <td class='rightClosedBorder'>
      <div id='d1' class="outputCell" formatting="#0">#</div>
    </td>
    <td class='rightClosedBorder'>
      <div id='d2' class="outputCell" formatting="#0">#</div>
    </td>
    <td class='rightClosedBorder'>
      <div id='d3' class="outputCell" formatting="#0">#</div>
    </td>
  </tr>
  <tr style="background: #CCFFCC">
    <td style="background: white; border-left: 1pt solid black; border-bottom: 1pt solid black"></td>
    <td style="background: white; border-bottom: 1pt solid black">
      Seller
    </td>
    <td class='rightClosedBorder'>
      <div id='d4' class="outputCell" formatting="#0">#</div>
    </td>
    <td class='rightClosedBorder'>
      <div id='d5' class="outputCell" formatting="#0">#</div>
    </td>
    <td class='rightClosedBorder'>
      <div id='d6' class="outputCell" formatting="#0">#</div>
    </td>
  </tr>
  <!-- ************** Met/Haven't Met Table **************-->
  <tr style="height: 18px">
    <td colspan=5></td>
  </tr>
  <tr style="background: rgb(0, 30, 0); color: white">
    <td colspan=5>
      Database: Assuming Option 3
    </td>
  </tr>
  <tr style="background: #CCFFCC">
    <td style="background: white; border-left: 1pt solid black"></td>
    <td style="background: white">
      Met
    </td>
    <td class='rightClosedBorder'>
      <div id='e1' class="outputCell" formatting="#0">#</div>
    </td>
    <td class='rightClosedBorder'>
      <div id='e2' class="outputCell" formatting="#0">#</div>
    </td>
    <td class='rightClosedBorder'>
      <div id='e3' class="outputCell" formatting="#0">#</div>
    </td>
  </tr>
  <tr style="background: #CCFFCC">
    <td style="background: white; border-left: 1pt solid black; border-bottom: 1pt solid black"></td>
    <td style="background: white; border-bottom: 1pt solid black">
      Haven't Met
    </td>
    <td class='rightClosedBorder'>
      <div id='e4' class="outputCell" formatting="#0">#</div>
    </td>
    <td class='rightClosedBorder'>
      <div id='e5' class="outputCell" formatting="#0">#</div>
    </td>
    <td class='rightClosedBorder'>
      <div id='e6' class="outputCell" formatting="#0">#</div>
    </td>
  </tr>
</table>
</body>
@endsection
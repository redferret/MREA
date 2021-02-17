@extends('layouts.app')
@section('style-sheets')
<link rel="stylesheet" href='{{asset('css/ActionPlanStyles.css')}}'/>
@endsection
@section('scripts')
<script src='{{asset('js/ActionPlans.js')}}' type='text/javascript'></script>
@endsection
@section('content')
{{Form::body('loadPlan(SomedayActionPlan);')}}
<table id='mainTable'>
  <tbody>
    <tr>
      <td style="min-width: 65px"></td>
      <td style="min-width: 70px"></td>
      <td style="min-width: 125px"></td>
      <td style="min-width: 70px"></td>
      <td style="min-width: 55px"></td>
      <td style="min-width: 70px"></td>
      <td style="min-width: 75px"></td>
      <td style="min-width: 95px"></td>
    </tr>
  </tbody>
  <tbody id='tabletitle'>
    <tr>
      <th colspan='6' id='title' formatting='s!'>Someday Action Plan</th>
      <th colspan='2' id='agent' formatting='s!'>
        <div id='agentName' formatting='s!'>-agent-</div>
      </th>
    </tr>
    <tr>
      <th id='year' formatting='s!'>
        <div id='modelYear' formatting='s!'>-year-</div>
      </th>
      <th colspan='3' style='text-align: left'>Lead-Generation Model</th>
      <th colspan='4' id='date'>
        <div id='startDate' formatting='s!'>-date-</div>
      </th>
    </tr>
  </tbody>
  <tbody class='tableBanner'>
    <tr>
      <th colspan='8' style='text-align: left'>Understanding My Options</th>
    </tr>
    <tr>
      <th></th>
      <th colspan='2'>Met</th>
      <th class='operator'>+</th>
      <th colspan='3'>Haven't Met</th>
      <th>Total</th>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <th class='bannerCell'>Option 1</th>
      <th class='greenCell'>
        <div id='a1' formatting='#0'>0</div>
      </th>
      <th>In Database</th>
      <th class='operator'>+</th>
      <th class='greenCell'>
        <div id='a2' formatting='#0'>0</div>
      </th>
      <th colspan='2' class='operator'>=</th>
      <th class='greenCell'>
        <div id='a3' formatting='#0'>0</div>
      </th>
    </tr>
    <tr>
      <th class='bannerCell'>Option 2</th>
      <th class='greenCell'>
        <div id='a4' formatting='#0'>0</div>
      </th>
      <th>In Database</th>
      <th class='operator' class='operator'>+</th>
      <th class='greenCell'>
        <div id='a5' formatting='#0'>0</div>
      </th>
      <th colspan='2' class='operator'>=</th>
      <th class='greenCell'>
        <div id='a6' formatting='#0'>0</div>
      </th>
    </tr>
    <tr>
      <th class='bannerCell'>Option 3</th>
      <th class='greenCell'>
        <div id='a7' formatting='#0'>0</div>
      </th>
      <th>In Database</th>
      <th class='operator'>+</th>
      <th class='greenCell'>
        <div id='a8' formatting='#0'>0</div>
      </th>
      <th colspan='2' class='operator'>=</th>
      <th class='greenCell'>
        <div id='a9' formatting='#0'>0</div>
      </th>
    </tr>
  </tbody>
  <tbody id='optionsTable'>
    <tr>
      <th colspan='8'>
        To Use Option 1 Set "Desired Closing Combination: 
        "Met" Database Percentage" in Assumptions to 100%
      </th>
    </tr>
    <tr>
      <th colspan='8'>
        To Use Option 2 Set "Desired Closing Combination: 
        "Haven't Met" D/B" in Assumptions to 100%
      </th>
    </tr>
    <tr>
      <th colspan='8'>
        To Use Option 3 Set "Desired Closing %" in Assumptions to desired %
      </th>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <th style='border-right: none'></th>
      <th colspan='2' style='text-align: left; border-left: none'>Closed Sales Goal</th>
      <th class='greenCell'>
        <div id='b1' formatting='#0'>0</div>
      </th>
      <th class='operator'>X</th>
      <th class='greenCell'>
        <div id='b2' formatting='%0'>0%</div>
      </th>
      <th colspan='2' style='text-align: left'>% from Met Database</th>
    </tr>
    <tr>
      <th colspan='3'></th>
      <th></th>
      <th></th>
      <th class='greenCell'>
        <div id='b3' formatting='#0'>0</div>
      </th>
      <th colspan='2' style='text-align: left'>Sales from Met Database</th>
    </tr>
    <tr>
      <th colspan='3'></th>
      <th class='greenCell'>
        <div id='b4' formatting='#0'>0</div>
      </th>
      <th class='operator'>X</th>
      <th class='greenCell'>
        <div id='b5' formatting='%0'>0%</div>
      </th>
      <th colspan='2' style='text-align: left'>% from Haven't Met DB</th>
    </tr>
    <tr>
      <th colspan='3'></th>
      <th></th>
      <th></th>
      <th class='greenCell'>
        <div id='b6' formatting='#0'>0</div>
      </th>
      <th colspan='2' style='text-align: left'>Sales from Haven't Met DB</th>
    </tr>
    <tr>
      <th class='greenCell'>
        <div id='b7' formatting='#0'>0</div>
      </th>
      <th colspan='4' style='text-align: left'>Sales from "Met" Database X "Met" Ratio</th>
      <th class='redCell'>
        <div id='b8' formatting='#0'>0</div>
      </th>
      <th colspan='2' style='text-align: left'>Contacts in Met Database</th>
    </tr>
    <tr>
      <th class='greenCell'>
        <div id='b9' formatting='#0'>0</div>
      </th>
      <th colspan='4' style='text-align: left'>Sales from "Haven't Met" Database X "Haven't Met" Ratio</th>
      <th class='redCell'>
        <div id='b10' formatting='#0'>0</div>
      </th>
      <th colspan='2' style='text-align: left'>Contacts in Haven't Met DB</th>
    </tr>
    <tr id='spacer'>
      <th colspan='8'></th>
    </tr>
  </tbody>
  <tbody>
    <tr class='tableBanner'>
      <th></th>
      <th colspan='3' style='text-align: left'>Goals</th>
      <th>Met</th>
      <th></th>
      <th>Haven't Met</th>
      <th></th>
    </tr>
    <tr>
      <th class='greenCell'>
        <div id='c1' formatting='#0'>0!</div>
      </th>
      <th colspan='3' style='text-align: left'>Three-Year Closed Sales Goal</th>
      <th class='greenCell'>
        <div id='c2' formatting='#0'>0!</div>
      </th>
      <th></th>
      <th class='greenCell'>
        <div id='c3' formatting='#0'>0!</div>
      </th>
      <th></th>
    </tr>
    <tr class='tableBanner'>
      <th></th>
      <th colspan='3' style='text-align: left'>Contacts to be added</th>
      <th>Met</th>
      <th></th>
      <th>Haven't Met</th>
      <th></th>
    </tr>
    <tr>
      <th></th>
      <th colspan='3' style='text-align: left'>Goal Numbers</th>
      <th class='greenCell'>
        <div id='d1' formatting='#0'>0</div>
      </th>
      <th></th>
      <th class='greenCell'>
        <div id='d2' formatting='#0'>0</div>
      </th>
      <th></th>
    </tr>
    <tr>
      <th class='operator'>--</th>
      <th colspan='3' style='text-align: left'>Current Numbers</th>
      <th class='greenCell'>
        <div id='d3' formatting='#0'>0</div>
      </th>
      <th></th>
      <th class='greenCell'>
        <div id='d4' formatting='#0'>0</div>
      </th>
      <th></th>
    </tr>
    <tr>
      <th class='operator'>=</th>
      <th colspan='3' style='text-align: left'>Contacts Needed to Add</th>
      <th class='redCell'>
        <div id='d5' formatting='#0'>0</div>
      </th>
      <th></th>
      <th class='redCell'>
        <div id='d6' formatting='#0'>0</div>
      </th>
      <th></th>
    </tr>
    <tr class='tableBanner'>
      <th></th>
      <th colspan='3' style='text-align: left'>Yearly Database Goals</th>
      <th>Met</th>
      <th></th>
      <th>Haven't Met</th>
      <th></th>
    </tr>
    <tr>
      <th>
      </th>
      <th colspan='3' style='text-align: left'>Three-Year Closed Sales Goal</th>
      <th class='greenCell'>
        <div id='d7' formatting='#0'>0</div>
      </th>
      <th></th>
      <th class='greenCell'>
        <div id='d8' formatting='#0'>0</div>
      </th>
      <th></th>
    </tr>
    <tr class='tableBanner'>
      <th></th>
      <th colspan='7' style='text-align: left'>Lead Generation Costs per Year</th>
    </tr>
    <tr class='tableBanner'>
      <th>Closed</th>
      <th colspan='2'></th>
      <th>Per Touch</th>
      <th class='operator'>X</th>
      <th colspan='2'># of Touches</th>
      <th>Total $</th>
    </tr>
    <tr>
      <th class='greenCell'>
        <div id='e1' formatting='#0'>0</div>
      </th>
      <th colspan='2' style='text-align: left'>Met: Closed Transactions @</th>
      <th class='greenCell'>
        <div id='e2' formatting='$2'>$0.00</div>
      </th>
      <th class='operator'>X</th>
      <th class='greenCell'>
        <div id='e3' formatting='#0'>0</div>
      </th>
      <th>= Total cost</th>
      <th class='greenCell'>
        <div id='e4' formatting='$0'>$0</div>
      </th>
    </tr>
    <tr>
      <th class='greenCell'>
        <div id='e5' formatting='#0'>0</div>
      </th>
      <th colspan='2' style='text-align: left'>Haven't Met: Closed T/A @</th>
      <th class='greenCell'>
        <div id='e6' formatting='$2'>$0.00</div>
      </th>
      <th class='operator'>X</th>
      <th class='greenCell'>
        <div id='e7' formatting='#0'>0</div>
      </th>
      <th>= Total cost</th>
      <th class='greenCell'>
        <div id='e8' formatting='$0'>$0</div>
      </th>
    </tr>
    <tr>
      <th colspan='7' style='text-align: right; border:none'>Total Direct and Indirect Marketing Costs per Year = </th>
      <th class='greenCell'>
        <div id='e9' formatting='$0'>$0</div>
      </th>
    </tr>
    <tr class='tableBanner'>
      <th></th>
      <th colspan='7' style='text-align: left'>Someday Organization Model</th>
    </tr>
    <tr>
      <th colspan='8' style='text-align: left'>My action plan for making my Organization Model happen.</th>
    </tr>
    <tr style='background: #FFFF99'>
      <th colspan='8'>
        <textarea rows='16' cols="88" id="f1" class='textArea'
                  formatting='s!' onchange='updateAndPost(this, SomedayActionPlan, "SomedayActionPlan");'></textarea>
      </th>
    </tr>
  </tbody>
</table>
</body>
@endsection
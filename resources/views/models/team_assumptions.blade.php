@extends('layouts.app')
@section('style-sheets')
<link rel="stylesheet" href="{{asset("css/TeamAssumptionsStyles.css")}}">
@endsection
@section('content')
{{Form::body('onLoad();')}}
<table class="center" id='mainTable'>
  <tbody style='border: none'>
    <tr>
      <th style='min-width: 225px'></th>
      <th style='min-width: 75px'></th>
      <th style='min-width: 75px'></th>
      <th style='min-width: 75px'></th>
      <th style='min-width: 75px'></th>
      <th style='min-width: 125px'></th>
      <th style='min-width: 45px'></th>
    </tr>
  </tbody>
  <tbody style='border: none'>
    <tr>
      <td colspan='4' class='tableTitle'>
        @if(Auth::user()->isSoloAgent())
        Agent Assumptions
        @else
        Team and Group Assumptions
        @endif
      </td>
      <td colspan='2' style='font-size: 11pt; text-align: right'>
        <div id='agentName' formatting='s!'>-Agent-</div>
      </td>
    </tr>
    <tr>
      <td colspan='6' style='font-size: 11pt; text-align: right'>
        <div id='date' formatting='d!'>-Date-</div>
      </td>
    </tr>
  </tbody>
  <tbody id="topRowAgents" class='largeBorder'>
  </tbody>
  <tbody id="centerRowAgents" class='largeBorder'>
  </tbody>
  <tbody class='largeBorder' style="display:none;">
  </tbody>
  <tbody>
    <tr>
      @if(Auth::user()->isTeamGroup())
      <td colspan='5' style='border:none;background:white;height:20px'></td>
      <td id='tstd' class='completeBorder' style='background: #FF6666; text-align: center'>
        <div id='ts1' formatting='%1'>100%</div>
      </td>
      @else
      <td colspan='6' style='border:none;background:white;height:20px'></td>
      @endif
    </tr>
  </tbody>
  <tbody id="agents">
    <tr>
      <td style='border:none; background:white;font-size: 11pt'>
        Agent Closed Transactions
      </td>
      @if(Auth::user()->isSoloAgent())
      <td colspan='4' style='border:2pt solid black; background: #CCFFCC;font-size: 11pt;text-align: center'>
        My Leads
      </td>
      @else
      <td colspan='2' style='border:2pt solid black; background: #CCFFCC;font-size: 11pt;text-align: center'>
        Team Leads
      </td>
      <td colspan='2' style='border:2pt solid black; background: #CCFFCC;font-size: 11pt;text-align: center'>
        Personal SOI Leads
      </td>
      @endif
      <td style='border:none'></td>
    </tr>
    <tr>
      <td style='border:none;background:white'></td>
      @if(Auth::user()->isTeamGroup())
      <td style='border:1pt solid black; background: #CCFFCC;font-size: 10pt;text-align: center'>
        Listings
      </td>
      <td style='border:1pt solid black; background: #CCFFCC;font-size: 10pt;text-align: center'>
        Sales
      </td>
      <td style='border:1pt solid black; background: #CCFFCC;font-size: 10pt;text-align: center'>
        Listings
      </td>
      <td style='border:1pt solid black; background: #CCFFCC;font-size: 10pt;text-align: center'>
        Sales
      </td>
      @else
      <td colspan='2' style='border:1pt solid black; background: #CCFFCC;font-size: 10pt;text-align: center'>
        Listings
      </td>
      <td colspan='2' style='border:1pt solid black; background: #CCFFCC;font-size: 10pt;text-align: center'>
        Sales
      </td>
      @endif
      <td style='border:1pt solid black; background: #CCFFCC;font-size: 10pt;text-align: center'>
        Total
      </td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td class='addrowbutton'>
        @if(Auth::user()->isTeamGroup())
        <div onclick="addNewAgent();" id='addRowDiv' class='hidden-print'>
          Add Agent
        </div>
        @endif
      </td>
      <td colspan ='5'style='border:none;background:white'></td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      @if(Auth::user()->isTeamGroup())
      <td style='text-align: left;font-size: 11pt'>
        Total
      </td>
      <td class='transTotals'>
        <div id="t1" formatting="#0" index="t1">0</div>
      </td>
      <td class='transTotals'>
        <div id="t2" formatting="#0" index="t2">0</div>
      </td>
      <td class='transTotals'>
        <div id="t3" formatting="#0" index="t3">0</div>
      </td>
      <td class='transTotals'>
        <div id="t4" formatting="#0" index="t4">0</div>
      </td>
      <td style='background: #CCFFCC; text-align: center;border: 1pt solid black;'>
        <div id="t5" formatting="#0" index="t5">0</div>
      </td>
      @else
      <td colspan ='5'style='border:none;background:white'></td>
      @endif
      <td style='background:white; border:none'></td>
    </tr>
  </tbody>
  <tbody class='totalsTable'>
    <tr>
      <td colspan='6' style='border: none; background: white; height: 15px'>
      </td>
    </tr>
    <tr>
      <td colspan='5'>
        Total Planned Listings Sold
      </td>
      <td style='background: #CCFFCC; text-align: center'>
        <div id='g1' formatting='#1'>0</div>
      </td>
    </tr>
    <tr>
      <td colspan='5'>
        Total Forecasted Listings Sold (from Economic Model)
      </td>
      <td style='background: #CCFFCC; text-align: center'>
        <div id='g2' formatting='#1'>0</div>
      </td>
    </tr>
    <tr>
      <td colspan='5'>
        Net Difference
      </td>
      <td style='background: #CCFFCC; text-align: center'>
        <div id='g3' formatting='#1'>0</div>
      </td>
    </tr>
    <tr style='border:none'>
      <td colspan='6' style='border: none; background: white; height: 15px'>
      </td>
    </tr>
    <tr>
      <td colspan='5'>
        Total Planned Purchases
      </td>
      <td style='background: #CCFFCC; text-align: center'>
        <div id='h1' formatting='#1'>0</div>
      </td>
    </tr>
    <tr>
      <td colspan='5'>
        Total Forecasted Listings Sold (from Economic Model)
      </td>
      <td style='background: #CCFFCC; text-align: center'>
        <div id='h2' formatting='#1'>0</div>
      </td>
    </tr>
    <tr>
      <td colspan='5'>
        Net Difference
      </td>
      <td style='background: #CCFFCC; text-align: center'>
        <div id='h3' formatting='#1'>0</div>
      </td>
    </tr>
  </tbody>
</table>
</body>
@endsection
@section('scripts')
<script src="{{asset("js/TeamAssumptions.js")}}" type="text/javascript"></script>
@endsection

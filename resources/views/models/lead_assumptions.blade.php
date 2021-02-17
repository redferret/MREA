@extends('layouts.app')
@section('style-sheets')
<link rel="stylesheet" href="{{asset("css/AssumptionsStyle.css")}}">
@endsection
@section('content')
{{Form::body('onLoad();')}}
<table class="center" >
  <tbody>
    <tr>
      <th style='min-width: 500px'></th>
      <th style='min-width: 45px'></th>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <th class='tableHeader' style='text-align: left'>
        Lead Generation Model Assumptions
      </th>
      <th class='tableHeader' style='font-size: 11pt; text-align: right'>
        <div id='agentName' formatting='s!'>-Agent-</div>
      </th>
    </tr>
    <tr>
      <th colspan='2' class='tableHeader' style='font-size: 10pt; 
          text-align: right;border-bottom: 1pt solid black'>
        <div id='date' formatting='d!'>-Date-</div>
      </th>
    </tr>
  </tbody>
  <tbody style='border-collapse: collapse;'>
    <!-- ********************* INPUT Box ********************** -->
    <tr>
      <td class=leftLabel>
        Existing &quot;Met&quot; Database Count
      </td>
      <td class=rightCell>
        <input onchange="updateAndPost(this, '/content/AssumptionMetDB')" formatting='#0' class=inputCell 
               type="text" id=a21 value="250" tabindex="21" />
      </td>
    </tr>
    <!-- ********************* INPUT Box ********************** -->
    <tr>
      <td class=leftLabel >
        Number of Touches (33 or 41 if 8x8 is included)
      </td>
      <td class=rightCell>
        <input onchange="updateAndPost(this, '/content/AssumptionMetDB')" formatting='#0' class=inputCell 
               type="text" id=a22 value="33" tabindex="22" />
      </td>
    </tr>
    <!-- ********************* INPUT Box ********************** -->
    <tr>
      <td class=leftLabel>
        Cost Per Touch (must consider &quot;all&quot; touches)
      </td>
      <td class=rightCell>
        <input onchange="updateAndPost(this, '/content/AssumptionMetDB')" formatting='$2' 
               class=inputCell type="text" id=a23 value="0.35" tabindex="23" />
      </td>
    </tr>
    <!-- ********************* INPUT Box ********************** -->
    <tr>
      <td class=leftLabel style='border-bottom: 1pt solid black'>
        Ratio of &quot;Met&quot; Contacts to Transactions:<em> (MREA Std.
          12:2 recommended)</em>
      </td>
      <td class=rightCell style='border-right: 1pt solid black; border-bottom: 1pt solid black; background: #FF99CC'>
        <input onchange="updateAndPost(this, '/content/AssumptionMetDB')" formatting='#0' 
               class=inputCell size='2' type="text" id=a24 value="12" tabindex="24" />
        <label style='background: #FF99CC'>To</label>
        <input onchange="updateAndPost(this, '/content/AssumptionMetDB')" formatting='#0' 
               class=inputCell size='2' type="text" id=a25 value="2" tabindex="25" />
      </td>
    </tr>
    <!-- ********************* INPUT Box ********************** -->
    <tr>
      <td class=leftLabel>
        Existing &quot;Haven't Met&quot; Database Count
      </td>
      <td class=rightCell>
        <input onchange="updateAndPost(this)" formatting='#0' 
               class=inputCell type="text" id=a26 value="401" tabindex="26" />
      </td>
    </tr>
    <!-- ********************* INPUT Box ********************** -->
    <tr>
      <td class=leftLabel>
        Number of Touches (12 direct mailings per year)
      </td>
      <td class=rightCell>
        <input onchange="updateAndPost(this)" formatting='#0' 
               class=inputCell type="text" id=a27 value="12" tabindex="27" />
      </td>
    </tr>
    <!-- ********************* INPUT Box ********************** -->
    <tr>
      <td class=leftLabel>Cost Per Touch (must consider &quot;all&quot; touches)</td>
      <td class=rightCell>
        <input onchange="updateAndPost(this)" formatting='$2' 
               class=inputCell type="text" id=a28 value="0.38" tabindex="28" />
      </td>
    </tr>
    <!-- ********************* INPUT Box ********************** -->
    <tr>
      <td class=leftLabel style='border-bottom: 1pt solid black'>
        Ratio of &quot;Haven't Met&quot; Contacts to Transactions:<em> (MREA Std.
          50:1 recommended)</em>
      </td>
      <td class=rightCell style='border-right: 1pt solid black; border-bottom: 1pt solid black; background: #FF99CC'>
        <input onchange="updateAndPost(this)" formatting='#0' 
               class=inputCell size='2' type="text" id=a29 value="12" tabindex="29" />
        <label style='background: #FF99CC'>To</label>
        <input onchange="updateAndPost(this)" formatting='#0' 
               class=inputCell size='2' type="text" id=a30 value="2" tabindex="30" />
      </td>
    </tr>
    <!-- ********************* INPUT Box ********************** -->
    <tr>
      <td class=leftLabel>
        Desired Closing Combination: &quot;Met&quot; Database Percentage
      </td>
      <td class=rightCell>
        <input onchange="updateAndPost(this)" formatting='%0' 
               class=inputCell type="text" id=a31 value="70" tabindex="31" />
      </td>
    </tr>
    <!-- ********************* INPUT Box ********************** -->
    <tr>
      <td class=leftLabel style='border-bottom: 1pt solid black'>
        Desired Closing Combination: &quot;Haven't Met&quot; Database Percentage
      </td>
      <td class=rightCell style='background: #CCFFCC; border-bottom: 1pt solid black'>
        <div id=b5 class="outputCell" formatting='%0' >0%</div>
      </td>
    </tr>
    <!-- ********************* INPUT Box ********************** -->
    <tr>
      <td class=leftLabel>
        Year for 1 Year Models
      </td>
      <td class=rightCell>
        <input onchange="updateAndPost(this)" formatting='s' 
               class=inputCell type="text" id=a32 value="2009" tabindex="32" />
      </td>
    </tr>
    <!-- ********************* INPUT Box ********************** -->
    <tr>
      <td class=leftLabel>
        Year for 3 Year Models
      </td>
      <td class=rightCell style='background: #CCFFCC'>
        <div id=b6 class="outputCell" formatting='s' ></div>
      </td>
    </tr>
    <!-- ********************* INPUT Box ********************** -->
    <tr>
      <td class=leftLabel>
        Year for Someday Models
      </td>
      <td class=rightCell style='background: #CCFFCC'>
        <div id=b7 class="outputCell" formatting='s' ></div>
      </td>
    </tr>
    <!-- ********************* INPUT Box ********************** -->
    <tr>
      <td class=leftLabel style='border-bottom:1.0pt solid black;'>
        Number of Years for &quot;Someday&quot;
      </td>
      <td class=rightCell style='border-bottom:1.0pt solid black;'>
        <input onchange="updateAndPost(this)" formatting='#0' 
               class=inputCell type="text" id=a33 value="5" tabIndex="35" />
      </td>
    </tr>
  </tbody>
</table>
</body>
@endsection
@section('scripts')
<script src='{{asset('js/Assumptions.js')}}' type='text/javascript'></script>
@endsection
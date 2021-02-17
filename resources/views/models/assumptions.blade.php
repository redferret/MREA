@extends('layouts.app')
@section('style-sheets')
<link rel="stylesheet" href="{{asset("css/AssumptionsStyle.css")}}">
@endsection
@section('scripts')
<script src='{{asset('js/Assumptions.js')}}' type='text/javascript'></script>
@endsection
@section('content')
{{Form::body('onLoad();')}}
<table class="center" >
  <tbody>
    <tr>
      <th style='min-width: 500px'>
        <div id='agentName' formatting='s!'style='visibility: hidden'></div>
      </th>
      <th style='min-width: 45px'>
        <div id='date' formatting='s!'style='visibility: hidden'></div>
      </th>
    </tr>
  </tbody>
  <tbody style='border-collapse: collapse'>
    <tr>
      <td colspan ='2' class='xlHeader1' style='border-bottom: 1pt solid black'>
        Assumptions
      </td>
    </tr>
    <!-- *************************************Date INPUT BOX *************************************-->
    <tr>
      <td class='leftLabel'>
        Creation Date
      </td>
      <td class=rightCell>
        <input onchange="updateAndPost(this)" class=inputCell type="date" id='a0' 
               tabindex="0" formatting="d!"/>
      </td>
    </tr>
    <!-- *************************************Name INPUT BOX *************************************-->    
    <tr>
      <td class=leftLabel>
        Name:
      </td>
      <td class=rightCell>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id='a1' value="" 
               tabindex="1"  formatting="s!"/>
      </td>
    </tr>
    <!-- *************************************Number of weeks INPUT BOX *************************************-->   
    <tr>
      <td class=leftLabel style='border-bottom: 1pt solid black'>
        Number of weeks you plan on working per year
      </td>
      <td class=rightCell style='border-bottom: 1pt solid black'>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id=a2 value="0" 
               tabindex="2" formatting="#0" />
      </td>
    </tr>
    <!-- *************************************FORECASTED NET INCOME INPUT BOX *************************************-->   
    <tr>
      <td class=leftLabel>
        Forecasted Net Income Before Taxes - 1 year
      </td>
      <td class=rightCell>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id=a3 value="0" 
               tabindex="3" formatting="$0" />
      </td>
    </tr>
    <!-- *************************************INPUT BOX *************************************-->   
    <tr>
      <td class=leftLabel>
        Forecasted Net Income Before Taxes - 3 year
      </td>
      <td class=rightCell>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id=a4 value="0" 
               tabindex="4" formatting="$0" />
      </td>
    </tr>
    <!-- *************************************INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='border-bottom: 1pt solid black'>
        Forecasted Net Income Before Taxes - Someday
      </td>
      <td class=rightCell style='border-bottom: 1pt solid black'>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id=a5 value="0" 
               tabindex="5" formatting="$0" />
      </td>
    </tr>
    <!-- *************************************Average Seller INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='border-bottom: 1pt dotted grey'>
        Average Seller Listing Commission %
      </td>
      <td class=rightCell style='border-bottom: 1pt dotted grey'>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id=a6 value="0" 
               tabindex="6" formatting="%1" />
      </td>
    </tr>
    <!-- *************************************INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='border-bottom: 1pt dotted grey'>
        Average Seller Listing Selling Price
      </td>
      <td class=rightCell style='border-bottom: 1pt dotted grey'>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id=a7 value="0" 
               tabindex="7" formatting="$0" />
      </td>
    </tr>
    <!-- *************************************INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='border-bottom: 1pt dotted grey'>
        Average Seller Leads to Contact Conversion Rate %
      </td>
      <td class=rightCell style='border-bottom: 1pt dotted grey'>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id=a8 value="10" 
               tabindex="8" formatting="%0" />
      </td>
    </tr>
    <!-- *************************************INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='border-bottom: 1pt dotted grey'>
        Average Seller Contact to Listing Appointment Conversion Rate %
      </td>
      <td class=rightCell style='border-bottom: 1pt dotted grey'>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id=a9 value="65" 
               tabindex="9" formatting="%0" />
      </td>
    </tr>
    <!-- *************************************INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='border-bottom: 1pt dotted grey'>
        Average Seller Listing Appointment to Listings Taken Conversion Rate %
      </td>
      <td class=rightCell style='background: #FF99CC; border-bottom: 1pt dotted grey'>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id=a10 value="75" 
               tabindex="10" formatting="%0" />
      </td>
    </tr>
    <!-- *************************************INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='border-bottom: 1pt dotted grey'>
        Average Seller Listing to Contract Conversion Rate %
      </td>
      <td class=rightCell style='background: #FF99CC; border-bottom: 1pt dotted grey'>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id=a11 value="65" 
               tabindex="11" formatting="%0" />
      </td>
    </tr>
    <!-- *************************************INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='border-bottom: 1pt solid black'>
        Average Seller Contract to Close %</td>
      <td class=rightCell style='border-bottom: 1pt solid black'>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id=a12 value="90" 
               tabindex="12" formatting="%0" />
      </td>
    </tr>
    <!-- *************************************Average Buying/Buyer INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='border-bottom: 1pt dotted grey'>
        Average Buying Commission %</td>
      <td class=rightCell style='border-bottom: 1pt dotted grey'>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id=a13 value="3" 
               tabindex="13" formatting="%1" />
      </td>
    </tr>
    <!-- *************************************INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='border-bottom: 1pt dotted grey'>
        Average Buying Purchase Price
      </td>
      <td class=rightCell style='border-bottom: 1pt dotted grey'>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id=a14 value="150000" 
               tabindex="14" formatting="$0" />
      </td>
    </tr>
    <!-- *************************************INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='border-bottom: 1pt dotted grey'>
        Average Buyer Lead to Contact Conversion Rate %
      </td>
      <td class=rightCell style='border-bottom: 1pt dotted grey'>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id=a15 value="10" 
               tabindex="15" formatting="%0" />
      </td>
    </tr>
    <!-- *************************************INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='border-bottom: 1pt dotted grey'>
        Average Buyer Contact to Listing Appointments Conversion Rate %
      </td>
      <td class=rightCell style='border-bottom: 1pt dotted grey'>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id=a16 value="65" 
               tabindex="16" formatting="%0" />
      </td>
    </tr>
    <!-- *************************************INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='border-bottom: 1pt dotted grey'>
        Average Buyer Listing Appointment to Listings Taken Conversion Rate %
      </td>
      <td class=rightCell style='background: #FF99CC; border-bottom: 1pt dotted grey'>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id=a17 value="65" 
               tabindex="17" formatting="%0" />
      </td>
    </tr>
    <!-- *************************************INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='border-bottom: 1pt dotted grey'>
        Average Buyer Listing to Contract Conversion Rate %
      </td>
      <td class=rightCell style='background: #FF99CC; border-bottom: 1pt dotted grey'>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id=a18 value="80" 
               tabindex="18" formatting="%0" />
      </td>
    </tr>
    <!-- *************************************INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='border-bottom: 1pt solid black'>
        Average Buyer Contract to Close %
      </td>
      <td class=rightCell style='border-bottom: 1pt solid black'>
        <input onchange="updateAndPost(this)" class=inputCell type="text" id=a19 value="95" 
               tabindex="19" formatting="%0" />
      </td>
    </tr>
    <!-- ************************************* Assumptions Calc INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='border-bottom: 1pt dotted grey'>
        Revenue from Sellers %
      </td>
      <td class=rightCell style='border-bottom: 1pt dotted grey'>
        <input onchange="updateAndPost(this)" 
               class=inputCell type="text" id=a20 value="90" 
               tabindex="20" formatting="%0" />
      </td>
    </tr>
    <!-- *************************************INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='padding: 5px 5px;border-bottom: 1pt dotted grey'>
        Revenue from Buyers %
      </td>
      <td class=rightCell style='padding: 5px 5px;background: #CCFFCC;border-bottom: 1pt dotted grey'>
        <div id='b1' class="outputCell" formatting='%0' >0%</div>
      </td>
    </tr>
    <!-- *************************************INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='padding: 5px 5px;border-bottom: 1pt dotted grey'>
        Cost of Sale (% of Gross Commission Income) <em>MREA Std:29.2%</em>
      </td>
      <td class=rightCell style='padding: 5px 5px;background: #CCFFCC;border-bottom: 1pt dotted grey'>
        <div id=b2 class="outputCell" formatting='%2' >0%</div>
      </td>
    </tr>
    <!-- *************************************INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='padding: 5px 5px;border-bottom: 1pt dotted grey'>
        Operating Expense (% of Gross Commission Income) <em>MREA Std:29.2%</em>
      </td>
      <td class=rightCell style='padding: 5px 5px;background: #CCFFCC;border-bottom: 1pt dotted grey'>
        <div id=b3 class="outputCell" formatting='%2' >0%</div>
      </td>
    </tr>
    <!-- *************************************INPUT BOX *************************************--> 
    <tr>
      <td class=leftLabel style='padding: 5px 5px;border-bottom: 1pt solid black'>
        Net Income (% of Gross Commission Income)
      </td>
      <td class=rightCell style='padding: 5px 5px;background: #CCFFCC; border-bottom: 1pt solid black'>
        <div id=b4 class="outputCell" formatting='%2' >0%</div>
      </td>
    </tr>
  </tbody>
</table>
</body>
@endsection

@extends('layouts.app')
@section('style-sheets')
<link rel="stylesheet" href="{{asset('css/BudgetModelStyles.css')}}">
@endsection
@section('scripts')
<script src='{{asset('js/BudgetModel.js')}}' type='text/javascript'></script>
@endsection
@section('content')
{{Form::body('onLoad();')}}
<table id='mainTable'>
  <tbody style='border:none'>
    <tr>
      <td style="min-width: 75px"></td>
      <td style="min-width: 235px"></td>
      <td style="min-width: 85px"></td>
      <td style="min-width: 65px"></td>
      <td style="min-width: 85px"></td>
      <td style="min-width: 85px"></td>
    </tr>
  </tbody>
  <tbody class='tableTitle' style='border:none'>
    <tr>
      <td colspan='4' style='font-size: 14pt'>Budget Model</td>
      <td colspan='2' style='text-align: right;font-size:11pt'>
        <div id='agentName' formatting='s!'>-Agent-</div>
      </td>
    </tr>
    <tr>
      <td colspan='6' style='text-align: right'>
        <div id='date' formatting='d!'>-Date-</div>
      </td>
    </tr>
  </tbody>
  <!-- ****************************************************** Table Break ******************************************************************-->
  <tbody class='tableBanner'>
    <tr>
      <td colspan='3'></td>
      <td>Company</td>
      <td>Agent</td>
      <td>% of Sales</td>
    </tr>
  </tbody>
  <!-- ****************************************************** Table Break ******************************************************************-->
  <tbody class='topTable1'>
  </tbody>
  <!-- ****************************************************** Table Break ******************************************************************-->
  <tbody class='tableBanner'>
    <tr>
      <td></td>
      <td style='text-align: left'>Operating</td>
      <td>Last Year</td>
      <td>Last Year</td>
      <td>This Year</td>
      <td>Budget</td>
    </tr>
    <tr>
      <td></td>
      <td style='text-align: left'>Budget</td>
      <td>Actual</td>
      <td>% of GCI</td>
      <td>Budget</td>
      <td>% of GCI</td>
    </tr>
  </tbody>
  <!-- ****************************************************** Table Break ******************************************************************-->
  <tbody class='topTable2'>
  </tbody>
  <tbody class='topTable2'>
    <tr class='bottomBorder'>
      <td colspan='2' style='font-weight: bold;background:white;text-align: left'>
        Gross Commission Income
      </td>
      <td>
        <div id='t1' formatting='$0'></div>
      </td>
      <td style='border-left:none'>
        <div id='t2' formatting='%1'></div>
      </td>
      <td>
        <div id='t3' formatting='$0'></div>
      </td>
      <td id='t4td' style='border-left:none'>
        <div id='t4' formatting='%1'></div>
      </td>
    </tr>
  </tbody>
  <!-- ****************************************************** Table Break ******************************************************************-->
  <tbody class='topTable2'>
  </tbody>
  <tbody class='topTable2'>
    <tr class='bottomBorder'>
      <td colspan='2' style='font-weight: bold;background:white;text-align: left'>
        Net Commission Income
      </td>
      <td>
        <div id='t5' formatting='$0'></div>
      </td>
      <td style='border-left:none'>
        <div id='t6' formatting='%1'></div>
      </td>
      <td>
        <div id='t7' formatting='$0'></div>
      </td>
      <td style='border-left:none'> 
        <div id='t8' formatting='%1'></div>
      </td>
    </tr>
  </tbody>
  <!-- ****************************************************** Table Break ******************************************************************-->
  <tbody class='costOfSaleRows' style='border-bottom: none'>
    <tr>
      <td colspan='2' style='text-align: left;border:none'>
        <em>
          Cost of Sale
        </em>
      </td>
      <td colspan='2'></td>
      <td></td>
      <td style='border:none'></td>
    </tr>
  </tbody>
  <tbody class='costOfSaleRows' style='border-top: none;border-bottom: none'>
  </tbody>
  <tbody class='costOfSaleRows' style='border-top: none'>
    <tr>
      <td colspan='2' class='addrowbutton'>
        <div onclick='addNewRow(BudgetModelItems, CostTable, false);' 
             id='addRowDiv' class='hidden-print'>
          Add Cost
        </div>
      </td>
      <td colspan='2'></td>
      <td></td>
      <td style='border-left:none'></td>
    </tr>
  </tbody>
  <!-- ****************************************************** Table Break ******************************************************************-->
  <tbody class='topTable3'>
    <tr>
      <td colspan='2' style='text-align: left;background:white;border-left: none;font-weight: bold'>
        Operating Cost of Sale
      </td>
      <td>
        <div id="c1" formatting="$0">$0</div>
      </td>
      <td style='border-left:none'>
        <div id="c2" formatting="%1">0%</div>
      </td>
      <td>
        <div id="c3" formatting="$0">$0</div>
      </td>
      <td style='border-left:none'>
        <div id="c4" formatting="%1">0%</div>
      </td>
    </tr>
    <tr>
      <td colspan='2' style='text-align: left;background:white;border-left: none;font-weight: bold'>
        Total Cost of Sale with Commissions
      </td>
      <td>
        <div id="c5" formatting="$0">$0</div>
      </td>
      <td style='border-left:none'>
        <div id="c6" formatting="%1">0%</div>
      </td>
      <td>
        <div id="c7" formatting="$0">$0</div>
      </td>
      <td style='border-left:none'>
        <div id="c8" formatting="%1">0%</div>
      </td>
    </tr>
    <tr class='bottomBorder'>
      <td colspan='2' style='text-align: left;background:white;border-left: none;font-weight: bold'>
        Gross Profit
      </td>
      <td>
        <div id="c9" formatting="$0">$0</div>
      </td>
      <td style='border-left:none'>
        <div id="c10" formatting="%1">0%</div>
      </td>
      <td>
        <div id="c11" formatting="$0">$0</div>
      </td>
      <td style='border-left:none'>
        <div id="c12" formatting="%1">0%</div>
      </td>
    </tr>
  </tbody>
  <!-- ****************************************************** Table Break ******************************************************************-->
  <tbody class='costOfSaleRows' style='border-bottom: none'>
    <tr>
      <td colspan='2' style='text-align: left;border:none'>
        <em>Operating Expenses</em>
      </td>
      <td colspan='2'></td>
      <td></td>
      <td style='border-left:none'></td>
    </tr>
  </tbody>
  <tbody class='costOfSaleRows'  style='border-top: none; border-bottom: none'>
    <tr style='background: #CCFFCC'>
      <td style='border:none;background:white'></td>
      <td style='text-align: left;border:none'>
        Lead Generation (Op. 3)
      </td>
      <td style='background: #FFFF99;'>
        <input style='text-align: right;width: 85px' onchange='updateAndPost(this);' 
               class=inputCell type="text" id='i0' tabindex="8" formatting="$0"/>
      </td>
      <td style='border-left:none'>
        <div id="l1" formatting="%1">0%</div>
      </td>
      <td>
        <div id="l2" formatting="$0">$0</div>
      </td>
      <td style='border-left:none'>
        <div id="l3" formatting="%1">0%</div>
      </td>
    </tr>
  </tbody>
  <tbody class='costOfSaleRows' style='border-top: none; border-bottom: none'>
  </tbody>
  <tbody class='costOfSaleRows' style='border-top: none'>
    <tr>
      <td colspan='2' class='addrowbutton'>
        <div onclick='addNewRow(BudgetModelItems, ExpenseTable, true);' 
             id='addRowDiv' class='hidden-print'>
          Add Expense
        </div>
      </td>
      <td colspan='2'></td>
      <td></td>
      <td style='border-left:none'></td>
    </tr>
  </tbody>
  <tbody class='topTable3'>
    <tr>
      <td colspan='2' style='text-align: left;background:white;border-left: none;font-weight: bold'>
        Total Operating Expenses
      </td>
      <td>
        <div id="d1" formatting="$0">$0</div>
      </td>
      <td style='border-left:none'>
        <div id="d2" formatting="%1">0%</div>
      </td>
      <td>
        <div id="d3" formatting="$0">$0</div>
      </td>
      <td style='border-left:none'>
        <div id="d4" formatting="%1">0%</div>
      </td>
    </tr>
    <tr>
      <td colspan='2' style='text-align: left;background:white;border-left: none;font-weight: bold'>
        Gross Income
      </td>
      <td>
        <div id="d5" formatting="$0">$0</div>
      </td>
      <td style='border-left:none'>
        <div id="d6" formatting="%1">0%</div>
      </td>
      <td style=" border-bottom: 2pt solid black">
        <div id="d7" formatting="$0">$0</div>
      </td>
      <td style='border-left:none; border-bottom: 2pt solid black'>
        <div id="d8" formatting="%1">0%</div>
      </td>
    </tr>
    <tr>
      <td colspan='2' style='text-align: left;background:white;border-left: none;font-weight: bold'>
        Taxes
      </td>
      <td>
        <div id="tax" formatting="$0">$0</div>
      </td>
      <td style='border-left:none; border-right: 2pt solid black;
          border-bottom: 2pt solid black; background: #FFFF99;'>
        <input style='text-align: right;width: 85px; height:15px' onchange='updateAndPost(this);' 
               class=inputCell type="text" id='i1' tabindex="8" formatting="%1"/>
      </td>
      <td>
        <div id="thisYearTax" formatting="$0">$0</div>
      </td>
      <td style='border-left:none;border-bottom: 2pt solid black'>
        <div id="percentThisYearTax" formatting="%1">0.0%</div>
      </td>
    </tr>
    <tr>
      <td colspan='2' style='text-align: left;background:white;
          border-left: none;border-bottom: 2pt solid black;
          font-weight: bold'>
        Net Income after Tax
      </td>
      <td style=" border-bottom: 2pt solid black; border-right: 2pt solid black">
        <div id="netLastYear" formatting="$0">$0</div>
      </td>
      <td style='border:none;background: white'>
        <div></div>
      </td>
      <td style=" border-bottom: 2pt solid black; border-right: 2pt solid black">
        <div id="netThisYear" formatting="$0">$0</div>
      </td>
    </tr>
    <tr>
  </tbody>
</table>
</body>
@endsection
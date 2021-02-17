@extends('layouts.app')
@section('style-sheets')
<link rel="stylesheet" href="{{asset("css/AnnualActionPlanStyles.css")}}">
@endsection
@section('content')
{{Form::body('updateAnnualActionPlan();')}}
<table id='mainTable'>
  <tbody class='tableSet'>
    <tr>
      <th style="min-width: 65px"></th>
      <th style="min-width: 175px"></th>
      <th style="min-width: 60px"></th>
      <th style="min-width: 50px"></th>
      <th style="min-width: 75px"></th>
      <th style="min-width: 80px"></th>
      <th style="min-width: 125px"></th>
    </tr>
  </tbody>
  <tbody style='border:none'>
    <tr class='tableTitle'>
      <td colspan='4' style='font-size: 14pt; font-weight: bold;border:none'>
        Annual Action Plan
      </td>
      <td colspan='3' style='font-size: 11pt; text-align: right;font-weight: bold;border:none'>
        <div id='agent' formatting='s!'>-Agent-</div>
      </td>
    </tr>
    <tr class='tableTitle'>
      <td style='border:none;text-align: right;font-weight: bold'>
        <div id='annual' formatting='s!'>-year-</div>
      </td>
      <td colspan='5' style='border:none;font-weight: bold'>Lead-Generation Model</td>
      <td style='text-align: right;font-size: 10pt;font-weight: bold;border:none'>
        <div id='date' formatting='d!'>-Date-</div>
      </td>
    </tr>
  </tbody>
  <tbody>
    <tr class='tableBanner'>
      <td></td>
      <td colspan='2'>Goals</td>
      <td style='text-align: center'>Met</td>
      <td></td>
      <td style='text-align: center'>Haven't Met</td>
      <td></td>
    </tr>
  </tbody>
  <tbody class='topSection'>
    <tr>
      <td style='text-align: center;background: #CCFFCC'>
        <div id='a1' formatting='#0'>0</div>
      </td>
      <td colspan='2'>Closed sales this year</td>
      <td style='text-align: center;background: #CCFFCC'>
        <div id='a2' formatting='#0'>0</div>
      </td>
      <td></td>
      <td style='text-align: center;background: #CCFFCC'>
        <div id='a3' formatting='#0'>0</div>
      </td>
      <td></td>
    </tr>
  </tbody>
  <tbody>
    <tr class='tableBanner'>
      <td></td>
      <td colspan='2'>Contacts to be added</td>
      <td style='text-align: center'>Met</td>
      <td></td>
      <td style='text-align: center'>Haven't Met</td>
      <td></td>
    </tr>
  </tbody>
  <tbody class='topSection'>
    <tr>
      <td></td>
      <td colspan='2'>Goal Numbers</td>
      <td style='text-align: center;background: #CCFFCC'>
        <div id='a4' formatting='#0'>0</div>
      </td>
      <td></td>
      <td style='text-align: center;background: #CCFFCC'>
        <div id='a5' formatting='#0'>0</div>
      </td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td colspan='2'>Current Numbers</td>
      <td style='text-align: center;background: #CCFFCC'>
        <div id='a6' formatting='#0'>0</div>
      </td>
      <td></td>
      <td style='text-align: center;background: #CCFFCC'>
        <div id='a7' formatting='#0'>0</div>
      </td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td colspan='2'>Contacts Needed this Year</td>
      <td style='text-align: center;background: #CCFFCC'>
        <div id='a8' formatting='#0'>0</div>
      </td>
      <td></td>
      <td style='text-align: center;background: #CCFFCC'>
        <div id='a9' formatting='#0'>0</div>
      </td>
      <td></td>
    </tr>
  </tbody>
  <tbody>
    <tr class='tableBanner'>
      <td style='text-align: center'>Month</td>
      <td colspan='2'>Monthly Database Goals</td>
      <td style='text-align: center'>Met</td>
      <td></td>
      <td style='text-align: center'>Haven't Met</td>
      <td></td>
    </tr>
  </tbody>
  <tbody class='databaseSection'>
    <tr>
      <td style='background:white'>1</td>
      <td style='text-align: left;border:1pt solid black'>January</td>
      <td></td>
      <td style='text-align: center;'>
        <div id='a10' formatting='#0'>0</div>
      </td>
      <td></td>
      <td style='text-align: center'>
        <div id='a11' formatting='#0'>0</div>
      </td>
      <td></td>
    </tr>
    <tr>
      <td style='background:white'>2</td>
      <td style='text-align: left;border:1pt solid black'>February</td>
      <td></td>
      <td style='text-align: center'>
        <div id='a12' formatting='#0'>0</div>
      </td>
      <td></td>
      <td style='text-align: center'>
        <div id='a13' formatting='#0'>0</div>
      </td>
      <td></td>
    </tr>
    <tr>
      <td style='background:white'>3</td>
      <td style='text-align: left;border:1pt solid black'>March</td>
      <td></td>
      <td style='text-align: center'>
        <div id='a14' formatting='#0'>0</div>
      </td>
      <td></td>
      <td style='text-align: center'>
        <div id='a15' formatting='#0'>0</div>
      </td>
      <td></td>
    </tr>
    <tr>
      <td style='background:white'>4</td>
      <td style='text-align: left;border:1pt solid black'>April</td>
      <td></td>
      <td style='text-align: center'>
        <div id='a16' formatting='#0'>0</div>
      </td>
      <td></td>
      <td style='text-align: center'>
        <div id='a17' formatting='#0'>0</div>
      </td>
      <td></td>
    </tr>
    <tr>
      <td style='background:white'>5</td>
      <td style='text-align: left;border:1pt solid black'>May</td>
      <td></td>
      <td style='text-align: center'>
        <div id='a18' formatting='#0'>0</div>
      </td>
      <td></td>
      <td style='text-align: center'>
        <div id='a19' formatting='#0'>0</div>
      </td>
      <td></td>
    </tr>
    <tr>
      <td style='background:white'>6</td>
      <td style='text-align: left;border:1pt solid black'>June</td>
      <td></td>
      <td style='text-align: center'>
        <div id='a20' formatting='#0'>0</div>
      </td>
      <td></td>
      <td style='text-align: center'>
        <div id='a21' formatting='#0'>0</div>
      </td>
      <td></td>
    </tr>
    <tr>
      <td style='background:white'>7</td>
      <td style='text-align: left;border:1pt solid black'>July</td>
      <td></td>
      <td style='text-align: center'>
        <div id='a22' formatting='#0'>0</div>
      </td>
      <td></td>
      <td style='text-align: center'>
        <div id='a23' formatting='#0'>0</div>
      </td>
      <td></td>
    </tr>
    <tr>
      <td style='background:white'>8</td>
      <td style='text-align: left;border:1pt solid black'>August</td>
      <td></td>
      <td style='text-align: center'>
        <div id='a24' formatting='#0'>0</div>
      </td>
      <td></td>
      <td style='text-align: center'>
        <div id='a25' formatting='#0'>0</div>
      </td>
      <td></td>
    </tr>
    <tr>
      <td style='background:white'>9</td>
      <td style='text-align: left;border:1pt solid black'>September</td>
      <td></td>
      <td style='text-align: center'>
        <div id='a26' formatting='#0'>0</div>
      </td>
      <td></td>
      <td style='text-align: center'>
        <div id='a27' formatting='#0'>0</div>
      </td>
      <td></td>
    </tr>
    <tr>
      <td style='background:white'>10</td>
      <td style='text-align: left;border:1pt solid black'>October</td>
      <td></td>
      <td style='text-align: center'>
        <div id='a28' formatting='#0'>0</div>
      </td>
      <td></td>
      <td style='text-align: center'>
        <div id='a29' formatting='#0'>0</div>
      </td>
      <td></td>
    </tr>
    <tr>
      <td style='background:white'>11</td>
      <td style='text-align: left;border:1pt solid black'>November</td>
      <td></td>
      <td style='text-align: center'>
        <div id='a30' formatting='#0'>0</div>
      </td>
      <td></td>
      <td style='text-align: center'>
        <div id='a31' formatting='#0'>0</div>
      </td>
      <td></td>
    </tr>
    <tr>
      <td style='background:white'>12</td>
      <td style='text-align: left;border:1pt solid black'>December</td>
      <td></td>
      <td style='text-align: center'>
        <div id='a32' formatting='#0'>0</div>
      </td>
      <td></td>
      <td style='text-align: center'>
        <div id='a33' formatting='#0'>0</div>
      </td>
      <td></td>
    </tr>
  </tbody>
  <tbody>
    <tr class='tableBanner'>
      <td></td>
      <td colspan='6'>8 x 8 High Impact Marketing Program</td>
    </tr>
    <tr class='tableBanner'>
      <td style='text-align: center'>Week</td>
      <td colspan='3'>I Will Make Contact By:</td>
      <td colspan='3' style='text-align: center'>Quick Referral Reminder</td>
    </tr>
  </tbody>
  <tbody class='databaseReferral'>
    <tr>
      <td style='background:white;text-align: center'>1</td>
      <td colspan='3'>
        <div id='b1' formatting='s!'></div>
      </td>
      <td colspan='3'>
        <div id='b9' formatting='s!'></div>
      </td>
    </tr>
    <tr>
      <td style='background:white;text-align: center'>2</td>
      <td colspan='3'>
        <div id='b2' formatting='s!'></div>
      </td>
      <td colspan='3'>
        <div id='b10' formatting='s!'></div>
      </td>
    </tr>
    <tr>
      <td style='background:white;text-align: center'>3</td>
      <td colspan='3'>
        <div id='b3' formatting='s!'></div>
      </td>
      <td colspan='3'>
        <div id='b11' formatting='s!'></div>
      </td>
    </tr>
    <tr>
      <td style='background:white;text-align: center'>4</td>
      <td colspan='3'>
        <div id='b4' formatting='s!'></div>
      </td>
      <td colspan='3'>
        <div id='b12' formatting='s!'></div>
      </td>
    </tr>
    <tr>
      <td style='background:white;text-align: center'>5</td>
      <td colspan='3'>
        <div id='b5' formatting='s!'></div>
      </td>
      <td colspan='3'>
        <div id='b13' formatting='s!'></div>
      </td>
    </tr>
    <tr>
      <td style='background:white;text-align: center'>6</td>
      <td colspan='3'>
        <div id='b6' formatting='s!'></div>
      </td>
      <td colspan='3'>
        <div id='b14' formatting='s!'></div>
      </td>
    </tr>
    <tr>
      <td style='background:white;text-align: center'>7</td>
      <td colspan='3'>
        <div id='b7' formatting='s!'></div>
      </td>
      <td colspan='3'>
        <div id='b15' formatting='s!'></div>
      </td>
    </tr>
    <tr>
      <td style='background:white;text-align: center'>8</td>
      <td colspan='3'>
        <div id='b8' formatting='s!'></div>
      </td>
      <td colspan='3'>
        <div id='b16' formatting='s!'></div>
      </td>
    </tr>
  </tbody>
  <tbody>
    <tr class='tableBanner'>
      <td></td>
      <td colspan='6'>33 Touch Program</td>
    </tr>
    <tr class='tableBanner'>
      <td style='text-align: center'>Qty:</td>
      <td colspan='3'>I Will Make These Touches</td>
      <td colspan='3' style='text-align: center'>Quick Referral Reminder</td>
    </tr>
  </tbody>
  <tbody class='databaseReferral'>
    <tr>
      <td style='text-align: center'>
        <div id='c1' formatting="#0">0</div>
      </td>
      <td colspan='3'>
        <div id='c17' formatting="s!"></div>
      </td>
      <td colspan='3'>
        <div id='c33' formatting="s!"></div>
      </td>
    </tr>
    <tr>
      <td style='text-align: center'>
        <div id='c2' formatting="#0">0</div>
      </td>
      <td colspan='3'>
        <div id='c18' formatting="s!"></div>
      </td>
      <td colspan='3'>
        <div id='c34' formatting="s!"></div>
      </td>
    </tr>
    <tr>
      <td style='text-align: center'>
        <div id='c3' formatting="#0">0</div>
      </td>
      <td colspan='3'>
        <div id='c19' formatting="s!"></div>
      </td>
      <td colspan='3'>
        <div id='c35' formatting="s!"></div>
      </td>
    </tr>
    <tr>
      <td style='text-align: center'>
        <div id='c4' formatting="#0">0</div>
      </td>
      <td colspan='3'>
        <div id='c20' formatting="s!"></div>
      </td>
      <td colspan='3'>
        <div id='c36' formatting="s!"></div>
      </td>
    </tr>
    <tr>
      <td style='text-align: center'>
        <div id='c5' formatting="#0">0</div>
      </td>
      <td colspan='3'>
        <div id='c21' formatting="s!"></div>
      </td>
      <td colspan='3'>
        <div id='c37' formatting="s!"></div>
      </td>
    </tr>
    <tr>
      <td style='text-align: center'>
        <div id='c6' formatting="#0">0</div>
      </td>
      <td colspan='3'>
        <div id='c22' formatting="s!"></div>
      </td>
      <td colspan='3'>
        <div id='c38' formatting="s!"></div>
      </td>
    </tr>
    <tr>
      <td style='text-align: center'>
        <div id='c7' formatting="#0">0</div>
      </td>
      <td colspan='3'>
        <div id='c23' formatting="s!"></div>
      </td>
      <td colspan='3'>
        <div id='c39' formatting="s!"></div>
      </td>
    </tr>
    <tr>
      <td style='text-align: center'>
        <div id='c8' formatting="#0">0</div>
      </td>
      <td colspan='3'>
        <div id='c24' formatting="s!"></div>
      </td>
      <td colspan='3'>
        <div id='c40' formatting="s!"></div>
      </td>
    </tr>
    <tr>
      <td style='text-align: center'>
        <div id='c9' formatting="#0">0</div>
      </td>
      <td colspan='3'>
        <div id='c25' formatting="s!"></div>
      </td>
      <td colspan='3'>
        <div id='c41' formatting="s!"></div>
      </td>
    </tr>
    <tr>
      <td style='text-align: center'>
        <div id='c10' formatting="#0">0</div>
      </td>
      <td colspan='3'>
        <div id='c26' formatting="s!"></div>
      </td>
      <td colspan='3'>
        <div id='c42' formatting="s!"></div>
      </td>
    </tr>
    <tr>
      <td style='text-align: center'>
        <div id='c11' formatting="#0">0</div>
      </td>
      <td colspan='3'>
        <div id='c27' formatting="s!"></div>
      </td>
      <td colspan='3'>
        <div id='c43' formatting="s!"></div>
      </td>
    </tr>
    <tr>
      <td style='text-align: center'>
        <div id='c12' formatting="#0">0</div>
      </td>
      <td colspan='3'>
        <div id='c28' formatting="s!"></div>
      </td>
      <td colspan='3'>
        <div id='c44' formatting="s!"></div>
      </td>
    </tr>
    <tr>
      <td style='text-align: center'>
        <div id='c13' formatting="#0">0</div>
      </td>
      <td colspan='3'>
        <div id='c29' formatting="s!"></div>
      </td>
      <td colspan='3'>
        <div id='c45' formatting="s!"></div>
      </td>
    </tr>
    <tr>
      <td style='text-align: center'>
        <div id='c14' formatting="#0">0</div>
      </td>
      <td colspan='3'>
        <div id='c30' formatting="s!"></div>
      </td>
      <td colspan='3'>
        <div id='c46' formatting="s!"></div>
      </td>
    </tr>
    <tr>
      <td style='text-align: center'>
        <div id='c15' formatting="#0">0</div>
      </td>
      <td colspan='3'>
        <div id='c31' formatting="s!"></div>
      </td>
      <td colspan='3'>
        <div id='c47' formatting="s!"></div>
      </td>
    </tr>
    <tr>
      <td style='text-align: center'>
        <div id='c16' formatting="#0">0</div>
      </td>
      <td colspan='3'>
        <div id='c32' formatting="s!"></div>
      </td>
      <td colspan='3'>
        <div id='c48' formatting="s!"></div>
      </td>
    </tr>
  </tbody>
  <tbody class='bottomSection'>
    <tr>
      <td colspan='7' style='background: black'></td>
    </tr>
    <tr>
      <td>
        <div id='d1' formatting='#0'>0</div>
      </td>
      <td style='background:white;text-align: left'>"Met: Closed Transactions @</td>
      <td>
        <div id='d2' formatting='$2'>$0.00</div>
      </td>
      <td style='background:white'>X</td>
      <td>
        <div id='d3' formatting='#0'>0</div>
      </td>
      <td style='background:white'>= Total cost</td>
      <td style='text-align: right'>
        <div id='d4' formatting='$0'>$0</div>
      </td>
    </tr>
    <tr>
      <td>
        <div id='d5' formatting='#0'>0</div>
      </td>
      <td style='background:white;text-align: left'>"Haven't Met: Closed T/A @</td>
      <td>
        <div id='d6' formatting='$2'>$0.00</div>
      </td>
      <td style='background:white'>X</td>
      <td>
        <div id='d7' formatting='#0'>0</div>
      </td>
      <td style='background:white'>= Total cost</td>
      <td style='text-align: right'>
        <div id='d8' formatting='$0'>$0</div>
      </td>
    </tr>
  </tbody>
  <tbody class='tableSet'>
    <tr>
      <td colspan='6' style='text-align: right; font-weight: bold;border:none'>Total Marketing Costs per Year = </td>
      <td style='border:1pt solid black;text-align: right;background: #CCFFCC'>
        <div id='d9' formatting='$0'>$0</div>
      </td>
    </tr>
  </tbody>
</table>
</body>
@endsection
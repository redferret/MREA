@extends('layouts.app')
@section('scripts')
<script type="text/javascript" src="{{asset('js/Annual411.js')}}"></script>
@endsection
@section('style-sheets')
<link rel="stylesheet" href="{{asset("css/MyAnnual411Styles.css")}}"/>
@endsection
@section('content')
{{Form::body('onLoad();')}}
<table id="mainTable">
  <tbody class='tableSet'>
    <tr>
      <th style="min-width: 130px"></th>
      <th style="min-width: 25px"></th>
      <th style="min-width: 25px"></th>
      <th style="min-width: 130px"></th>
      <th style="min-width: 25px"></th>
      <th style="min-width: 25px"></th>
      <th style="min-width: 130px"></th>
      <th style="min-width: 25px"></th>
      <th style="min-width: 25px"></th>
      <th style="min-width: 130px"></th>
      <th style="min-width: 25px"></th>
      <th style="min-width: 25px"></th>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td colspan='8' style='text-align: left; font-size: 14pt; 
          font-weight: bold; background:white; border:none'>
        My Annual 4-1-1 Goal Worksheet
      </td>
      <td colspan='4' style='text-align: center; font-size: 12pt; font-weight: bold; background: #CCFFCC'>
        <div id="agent" formatting="s!">-Agent-</div>
      </td>
    </tr>
    <tr>
      <td colspan='8' style='text-align: left; font-size: 11pt; font-weight: bold; background: #FF99CC'>
        The Eight Goal Categories of the Millionaire Real Estate Agent
      </td>
      <td colspan='4' style='text-align: center; font-size: 12pt; font-weight: bold; background: #CCFFCC'>
        <div id="date" formatting="s!">-Date-</div>
      </td>
    </tr>
    <tr class='tableBanner'>
      <td colspan='6'>
        My Annual Goals
      </td>
      <td style='text-align: right'>Year of:</td>
      <td></td>
      <td colspan='4' style='background: #CCFFCC; color: black; text-align: center'>
        <div id="a0" formatting="s!">20##</div>
      </td>
    </tr>
    <tr class='tableBanner2'>
      <td colspan='3'>Business</td>
      <td colspan='3'>Job</td>
      <td colspan='3'>Personal Finance</td>
      <td colspan='3'>Personal</td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td style='background:white'>"Met" Contacts</td>
      <td colspan='2' class='styleBox1'>
        <div id="a1" formatting="#0">0</div>
      </td>
      <td style='background:white'>"Met" Contacts</td>
      <td colspan='2' class='styleBox3'>
        <input onchange='updateAndPostAnnual(this)'
               type="text" class="inputCell inputCell2" style='width:53px; height:17px' id="i1" formatting="#0" value="0" tabindex="1"/>
      </td>
      <td colspan='3' rowspan='16' style="background: #FFFF99">
        <textarea rows='17' cols="24" id="i13" class='textArea' formatting="s!" tabindex="13"
                  onchange='updateAndPostAnnual(this);'></textarea>
      </td>
      <td colspan='3' rowspan='16' style="background: #FFFF99">
        <textarea rows='17' cols="24" id="i14" class='textArea' formatting="s!" tabindex="14"
                  onchange='updateAndPostAnnual(this);'></textarea>
      </td>
    </tr>
    <tr>
      <td style='background:white'>"Haven't Met" Cont.</td>
      <td colspan='2' class='styleBox1'>
        <div id="a2" formatting="#0">0</div>
      </td>
      <td style='background:white'>"Haven't Met" Cont.</td>
      <td colspan='2' class='styleBox3'>
        <input onchange='updateAndPostAnnual(this);'
               type="text" class="inputCell inputCell2" style='width:53px; height:17px' id="i2" formatting="#0" value="0" tabindex="2"/>
      </td>
    </tr>
    <tr>
      <td style='background:white'>Leads</td>
      <td colspan='2' class='styleBox2'>
        <div id="a3" formatting="#0">0</div>
      </td>
      <td style='background:white'>Leads</td>
      <td colspan='2' class='styleBox3'>
        <input onchange='updateAndPostAnnual(this);'
               type="text" class="inputCell inputCell2" style='width:53px; height:17px' id="i3" formatting="#0" value="0" tabindex="3"/>
      </td>
    </tr>
    <tr>
      <td style='background:white'>B/S Listing Appts.</td>
      <td colspan='2' class='styleBox1'>
        <div id="a4" formatting="#0">0</div>
      </td>
      <td style='background:white'>B/S Listing Appts.</td>
      <td colspan='2' class='styleBox3'>
        <input onchange='updateAndPostAnnual(this);'
               type="text" class="inputCell inputCell2" style='width:53px; height:17px' id="i4" formatting="#0" value="0" tabindex="4"/>
      </td>
    </tr>
    <tr>
      <td style='background:white'>B/S Listings</td>
      <td colspan='2' class='styleBox2'>
        <div id="a5" formatting="#0">0</div>
      </td>
      <td style='background:white'>B/S Listings</td>
      <td colspan='2' class='styleBox3'>
        <input onchange='updateAndPostAnnual(this);'
               type="text" class="inputCell inputCell2" style='width:53px; height:17px' id="i5" formatting="#0" value="0" tabindex="5"/>
      </td>
    </tr>
    <tr>
      <td style='background:white'>Contracts Written</td>
      <td colspan='2' class='styleBox2'>
        <div id="a6" formatting="#0">0</div>
      </td>
      <td style='background:white'>Contracts Written</td>
      <td colspan='2' class='styleBox3'>
        <input onchange='updateAndPostAnnual(this);'
               type="text" class="inputCell inputCell2" style='width:53px; height:17px' id="i6" formatting="#0" value="0" tabindex="6"/>
      </td>
    </tr>
    <tr>
      <td style='background:white'>Closed</td>
      <td colspan='2' class='styleBox2'>
        <div id="a7" formatting="#0">0</div>
      </td>
      <td style='background:white'>Closed</td>
      <td colspan='2' class='styleBox3'>
        <input onchange='updateAndPostAnnual(this);'
               type="text" class="inputCell inputCell2" style='width:53px; height:17px' id="i7" formatting="#0" value="0" tabindex="7"/>
      </td>
    </tr>
    <tr>
      <td style='background:white'>Money (Total GCI)</td>
      <td colspan='2' class='styleBox2'>
        <div id="a8" formatting="$0">0</div>
      </td>
      <td style='background:white'>Money (Total GCI)</td>
      <td colspan='2' class='styleBox3'>
        <input onchange='updateAndPostAnnual(this);'
               type="text" class="inputCell inputCell2" style='width:53px; height:17px' id="i8" formatting="$0" value="$0" tabindex="8"/>
      </td>
    </tr>
    <tr>
      <td colspan='3' style='background: #FF99CC; text-align: center'>People</td>
      <td colspan='3' rowspan='8' style="background: #FFFF99">
        <textarea rows='7' cols="24" id="i12" class='textArea' formatting="s!" tabindex="12"
                  onchange='updateAndPostAnnual(this);'></textarea>
      </td>
    </tr>
    <tr>
      <td colspan='3' style='height: 15px; background: #FFFF99'>
        <textarea rows='1' cols="24" id="i9" class='textArea' formatting="s!" tabindex="9"
                  onchange='updateAndPostAnnual(this);'></textarea>
      </td>
    </tr>
    <tr>
      <td colspan='3' style='background: #FF99CC; text-align: center'>Systems/Tools</td>
    </tr>
    <tr>
      <td colspan='3' style='height: 15px; background: #FFFF99'>
        <textarea rows='1' cols="24" id="i10" class='textArea' formatting="s!" tabindex="10"
                  onchange='updateAndPostAnnual(this);'></textarea>
      </td>
    </tr>
    <tr>
      <td colspan='3' style='background: #FF99CC; text-align: center'>Education</td>
    </tr>
    <tr>
      <td colspan='3' style='height: 15px; background: #FFFF99'>
        <textarea rows='1' cols="24" id="i11" class='textArea' formatting="s!" tabindex="11"
                  onchange='updateAndPostAnnual(this);'></textarea>
      </td>
    </tr>
  </tbody>
  <tbody>
    <tr class='tableBanner'>
      <td colspan='6'>My Monthly Goals</td>
      <td colspan='3' style='text-align: right'>Month of:</td>
      <td colspan='3' style='background: #FFFF99; text-align: center; color: black'>
        <select class='dropdownmenu' id="s1" onchange='optionChangeMonth(this);'>
          <option>January</option>
          <option>February</option>
          <option>March</option>
          <option>April</option>
          <option>May</option>
          <option>June</option>
          <option>July</option>
          <option>August</option>
          <option>September</option>
          <option>October</option>
          <option>November</option>
          <option>December</option>
        </select>
      </td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td style='background:white'>"Met" Contacts</td>
      <td colspan='2' class='styleBox1'>
        <div id='b1' formatting='#0'>0</div>
      </td>
      <td style='background:white'>"Met" Contacts</td>
      <td colspan='2' class='styleBox1'>
        <div id='b2' formatting='#0'>0</div>
      </td>
      <td colspan='3' rowspan='16' style="background: #FFFF99">
        <textarea rows='17' cols="24" id="j4" class='textArea' formatting="s!" tabindex="19"
                  onchange='updateAndPostMonthly(this);'></textarea>
      </td>
      <td colspan='3' rowspan='16' style="background: #FFFF99">
        <textarea rows='17' cols="24" id="j5" class='textArea' formatting="s!" tabindex="20"
                  onchange='updateAndPostMonthly(this);'></textarea>
      </td>
    </tr>
    <tr>
      <td style='background:white'>"Haven't Met" Cont.</td>
      <td colspan='2' class='styleBox1'>
        <div id='b3' formatting='#0'>0</div>
      </td>
      <td style='background:white'>"Haven't Met" Cont.</td>
      <td colspan='2' class='styleBox1'>
        <div id='b4' formatting='#0'>0</div>
      </td>
    </tr>
    <tr>
      <td style='background:white'>Leads</td>
      <td colspan='2' class='styleBox2'>
        <div id='b5' formatting='#0'>0</div>
      </td>
      <td style='background:white'>Leads</td>
      <td colspan='2' class='styleBox1'>
        <div id='b6' formatting='#0'>0</div>
      </td>
    </tr>
    <tr>
      <td style='background:white'>B/S Listing Appts.</td>
      <td colspan='2' class='styleBox1'>
        <div id='b7' formatting='#0'>0</div>
      </td>
      <td style='background:white'>B/S Listing Appts.</td>
      <td colspan='2' class='styleBox1'>
        <div id='b8' formatting='#0'>0</div>
      </td>
    </tr>
    <tr>
      <td style='background:white'>B/S Listings</td>
      <td colspan='2' class='styleBox2'>
        <div id='b9' formatting='#0'>0</div>
      </td>
      <td style='background:white'>B/S Listings</td>
      <td colspan='2' class='styleBox1'>
        <div id='b10' formatting='#0'>0</div>
      </td>
    </tr>
    <tr>
      <td style='background:white'>Contracts Written</td>
      <td colspan='2' class='styleBox2'>
        <div id='b11' formatting='#0'>0</div>
      </td>
      <td style='background:white'>Contracts Written</td>
      <td colspan='2' class='styleBox1'>
        <div id='b12' formatting='#0'>0</div>
      </td>
    </tr>
    <tr>
      <td style='background:white'>Closed</td>
      <td colspan='2' class='styleBox2'>
        <div id='b13' formatting='#0'>0</div>
      </td>
      <td style='background:white'>Closed</td>
      <td colspan='2' class='styleBox1'>
        <div id='b14' formatting='#0'>0</div>
      </td>
    </tr>
    <tr>
      <td style='background:white'>Money (Total GCI)</td>
      <td colspan='2' class='styleBox2'>
        <div id='b15' formatting='$0'>0</div>
      </td>
      <td style='background:white'>Money (Total GCI)</td>
      <td colspan='2' class='styleBox1'>
        <div id='b16' formatting='$0'>0</div>
      </td>
    </tr>
    <tr>
      <td colspan='3' style='background: #FF99CC; text-align: center'>People</td>
      <td colspan='3' rowspan='8' style='background: #FFFF99'>
        <textarea rows='7' cols="24" id="j3" class='textArea' formatting="s!" tabindex="18"
                  onchange='updateAndPostMonthly(this);'></textarea>
      </td>
    </tr>
    <tr>
      <td colspan='3' style='height: 15px;background: #FFFF99'>
        <textarea rows='1' cols="24" id="j0" class='textArea' formatting="s!" tabindex="15"
                  onchange='updateAndPostMonthly(this);'></textarea>
      </td>
    </tr>
    <tr>
      <td colspan='3' style='background: #FF99CC; text-align: center'>Systems/Tools</td>
    </tr>
    <tr>
      <td colspan='3' style='height: 15px;background: #FFFF99'>
        <textarea rows='1' cols="24" id="j1" class='textArea' formatting="s!" tabindex="16"
                  onchange='updateAndPostMonthly(this);'></textarea>
      </td>
    </tr>
    <tr>
      <td colspan='3' style='background: #FF99CC; text-align: center'>Education</td>
    </tr>
    <tr>
      <td colspan='3' style='height: 15px;background: #FFFF99'>
        <textarea rows='1' cols="24" id="j2" class='textArea' formatting="s!" tabindex="17"
                  onchange='updateAndPostMonthly(this);'></textarea>
      </td>
    </tr>
  </tbody>
  <tbody>
    <tr class='tableBanner' style='text-align: center'>
      <td colspan='3'>
        Week 1
      </td>
      <td colspan='3'>
        Week 2
      </td>
      <td colspan='3'>
        Week 3
      </td>
      <td colspan='3'>
        Week 4
      </td>
    </tr>
    <tr>
      <td style='background: white'>Leads</td>
      <td class='styleBox1'>
        <div id='c1' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week1" 
               style="width:25px; height:17px" id="w0" week="0"
               formatting="#0" value="0" tabindex="21"/>
      </td>
      <td style='background: white'>Leads</td>
      <td class='styleBox1'>
        <div id='c6' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week2" 
               style="width:25px; height:17px" id="w6" week="1"
               formatting="#0" value="0" tabindex="26"/>
      </td>
      <td style='background: white'>Leads</td>
      <td class='styleBox1'>
        <div id='c11' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week3" 
               style="width:25px; height:17px" id="w12" week="2"
               formatting="#0" value="0" tabindex="31"/>
      </td>
      <td style='background: white'>Leads</td>
      <td class='styleBox1'>
        <div id='c16' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week4" 
               style="width:25px; height:17px" id="w18" week="3"
               formatting="#0" value="0" tabindex="36"/>
      </td>
    </tr>
    <tr>
      <td style='background: white'>B/S Listing Appts.</td>
      <td class='styleBox1'>
        <div id='c2' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week1" 
               style="width:25px; height:17px" id="w1" week="0"
               formatting="#0" value="0" tabindex="22"/>
      </td>
      <td style='background: white'>B/S Listing Appts.</td>
      <td class='styleBox1'>
        <div id='c7' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week2" 
               style="width:25px; height:17px" id="w7" week="1"
               formatting="#0" value="0" tabindex="27"/>
      </td>
      <td style='background: white'>B/S Listing Appts.</td>
      <td class='styleBox1'>
        <div id='c12' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week3" 
               style="width:25px; height:17px" id="w13" week="2"
               formatting="#0" value="0" tabindex="32"/>
      </td>
      <td style='background: white'>B/S Listing Appts.</td>
      <td class='styleBox1'>
        <div id='c17' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week4" 
               style="width:25px; height:17px" id="w19" week="3"
               formatting="#0" value="0" tabindex="37"/>
      </td>
    </tr>
    <tr>
      <td style='background: white'>B/S Listings</td>
      <td class='styleBox1'>
        <div id='c3' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week1" 
               style="width:25px; height:17px" id="w2" week="0"
               formatting="#0" value="0" tabindex="23"/>
      </td>
      <td style='background: white'>B/S Listings</td>
      <td class='styleBox1'>
        <div id='c8' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week2" 
               style="width:25px; height:17px" id="w8" week="1"
               formatting="#0" value="0" tabindex="28"/>
      </td>
      <td style='background: white'>B/S Listings</td>
      <td class='styleBox1'>
        <div id='c13' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week3" 
               style="width:25px; height:17px" id="w14" week="2"
               formatting="#0" value="0" tabindex="33"/>
      </td>
      <td style='background: white'>B/S Listings</td>
      <td class='styleBox1'>
        <div id='c18' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week4" 
               style="width:25px; height:17px" id="w20" week="3"
               formatting="#0" value="0" tabindex="38"/>
      </td>
    </tr>
    <tr>
      <td style='background: white'>"Met" Contacts</td>
      <td class='styleBox1'>
        <div id='c4' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week1" week="0"
               id="w3" formatting="#0" value="0" tabindex="24"/>
      </td>
      <td style='background: white'>"Met" Contacts</td>
      <td class='styleBox1'>
        <div id='c9' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week2" week="1"
               id="w9" formatting="#0" value="0" tabindex="29"/>
      </td>
      <td style='background: white'>"Met" Contacts</td>
      <td class='styleBox1'>
        <div id='c14' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week3" week="2"
               id="w15" formatting="#0" value="0" tabindex="34"/>
      </td>
      <td style='background: white'>"Met" Contacts</td>
      <td class='styleBox1'>
        <div id='c19' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week4" week="3"
               id="w21" formatting="#0" value="0" tabindex="39"/>
      </td>
    </tr>
    <tr>
      <td style='background: white'>"Haven't Met" Cont.</td>
      <td class='styleBox1'>
        <div id='c5' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week1" week="0"
               id="w4" formatting="#0" value="0" tabindex="25"/>
      </td>
      <td style='background: white'>"Haven't Met" Cont.</td>
      <td class='styleBox1'>
        <div id='c10' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week2" week="1"
               id="w10" formatting="#0" value="0" tabindex="30"/>
      </td>
      <td style='background: white'>"Haven't Met" Cont.</td>
      <td class='styleBox1'>
        <div id='c15' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week3" week="2"
               id="w16" formatting="#0" value="0" tabindex="35"/>
      </td>
      <td style='background: white'>"Haven't Met" Cont.</td>
      <td class='styleBox1'>
        <div id='c20' formatting='#0'>0</div>
      </td>
      <td class='styleBox3'>
        <input onchange='updateAndPostWeekly(this);'
               type="text" class="inputCell inputCell2 week4" week="3"
               id="w22" formatting="#0" value="0" tabindex="40"/>
      </td>
    </tr>
    <tr>
      <td colspan='3' style='height:125px;background: #FFFF99'>
        <textarea rows='8' cols="24" id="w5" week="0"
                  class='textArea week1' formatting="s!" tabindex="41"
                  onchange='updateAndPostWeekly(this);'></textarea>
      </td>
      <td colspan='3' style='height:125px;background: #FFFF99'>
        <textarea rows='8' cols="24" id="w11" week="1"
                  class='textArea week2' formatting="s!" tabindex="42"
                  onchange='updateAndPostWeekly(this);'></textarea>
      </td>
      <td colspan='3' style='height:125px;background: #FFFF99'>
        <textarea rows='8' cols="24" id="w17" week="2"
                  class='textArea week3' formatting="s!" tabindex="42"
                  onchange='updateAndPostWeekly(this);'></textarea>
      </td>
      <td colspan='3' style='height:125px;background: #FFFF99'>
        <textarea rows='8' cols="24" id="w23" week="3"
                  class='textArea week4' formatting="s!" tabindex="42"
                  onchange='updateAndPostWeekly(this);'></textarea>
      </td>
    </tr>
  </tbody>
</table>
</body>           
@endsection
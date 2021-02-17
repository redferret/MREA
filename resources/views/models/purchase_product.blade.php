
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html style="background-color: rgb(57, 115, 172);">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Purchase Page</title>
  </head>
  <body>
    <div id="header" class="container-group fix" style="color: rgb(2, 0,
      48); font-family: Georgia, &quot;Times New Roman&quot;, Times,
      serif; font-size: medium; font-style: normal;
      font-variant-ligatures: normal; font-variant-caps: normal;
      font-weight: 400; letter-spacing: normal; orphans: 2; text-align:
      start; text-indent: 0px; text-transform: none; white-space:
      normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width:
      0px; background-color: rgb(57, 115, 172); text-decoration-style:
      initial; text-decoration-color: initial;" align="center">
      <div class="outline">
        <div id="branding" class="container fix" align="center">
          <div class="texture">
            <div class="content" style="width: 800px;">
              <div class="content-pad" style="padding: 0px;">
                <div class="branding_wrap"><a class="mainlogo-link"
                    href="http://productivitymastery.com/"
                    title="Productivity Mastery" style="color: rgb(34,
                    94, 155);"><img class="mainlogo-img"
src="http://productivitymastery.com/wp-content/uploads/2011/12/PM-Logo.png"
                      alt="Productivity Mastery"></a></div>
              </div>
            </div>
          </div>
        </div>
        <div id="sidebar_universal" class="container fix" align="center">
          <div class="texture">
            <div class="content" style="width: 800px;">
              <div class="content-pad">
                <ul id="list_sidebar_universal" class="sidebar_widgets
                  fix">
                  <li id="text-3" class="widget_text widget fix">
                    <div class="widget-pad">
                      <div class="textwidget"><font style="color: white;
                          font-size: 14pt;"
                          face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"
                          size="4">**Do not navigate back to this page
                          after selecting a product</font>
                        <table border="1" cellpadding="0"
                          cellspacing="2" width="749">
                          <tbody>
                            <tr>
                              <td width="150"><br>
                              </td>
                              <td valign="middle"
                                width="417"><br>
                              </td>
                              <td valign="middle"><br>
                              </td>
                            </tr>
                            
                            @foreach($products as $product)
                            <tr height="50">
                              <td align="center" height="50" width="240">
                                {{Form::open(['url'=>'https://www.2checkout.com/checkout/purchase'])}}
                                {{Form::product($product->productId, $product->account_type, $userEmail)}}
                                  <p><font
                                      face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"
                                      size="2"><font
                                        face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"
                                        size="2">
                                      {{Form::submit('Purchase', 
                                        ['style'=>'background: rgb(247,
                                              247, 247); border-color:
                                              rgb(221, 221, 221) rgb(233,
                                              233, 233) rgb(233, 233, 233)
                                              rgb(221, 221, 221);'])}}
                                      <span>&nbsp;</span><br>
                                  </font></font></p>
                               
                                {{Form::close()}}
                              </td>
                              <td align="center" height="50"
                                valign="middle" width="417"><big><font
                                    face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"
                                    size="2"><big>{{$product->name}}</big></font></big></td>
                              <td align="center" height="50"
                                valign="middle">
                                <div><big><font
                                      face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"
                                      size="2"><big>{{sprintf('$%s', number_format($product->price, 2))}}</big></font></big></div>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                        {{Form::open(['url'=>'/'])}}
                          {{Form::product(-1, 0, $userEmail)}}
                          <p>
                          {{Form::submit('Continue with Limited/Free Version', 
                              ['style'=>'background: rgb(247, 247,
                              247); border-color: rgb(221, 221, 221)
                              rgb(233, 233, 233) rgb(233, 233, 233)
                              rgb(221, 221, 221);'])}}
                          </p>
                        {{Form::close()}}
                      </div>
                    </div>
                  </li>
                  <li id="text-3" class="widget_text widget fix">
                    <div class="widget-pad">
                      <div class="textwidget">
                        <h3 style="font-family: Georgia, &quot;Times New
                          Roman&quot;, Times, serif; letter-spacing:
                          normal; text-transform: none; font-weight:
                          normal; font-variant: normal; font-style:
                          normal; color: rgb(0, 0, 0); margin: 0px 0px
                          0.1em; padding: 0px; line-height: 1.2em;
                          font-size: 1.5em; text-align: start;
                          text-indent: 0px; white-space: normal;
                          word-spacing: 0px;"><small><font
                              color="#000066" face="Helvetica, Arial,
                              sans-serif"><small><small><b>Refund
                                    Policy:</b>&nbsp;If you are not 100%
                                  satisfied with your purchase, within
                                  30 days from the purchase date, we
                                  will fully refund the cost of your
                                  order.</small></small></font></small></h3>
                        <h3 style="font-family: Georgia, &quot;Times New
                          Roman&quot;, Times, serif; letter-spacing:
                          normal; text-transform: none; font-weight:
                          normal; font-variant: normal; font-style:
                          normal; color: rgb(0, 0, 0); margin: 0px 0px
                          0.1em; padding: 0px; line-height: 1.2em;
                          font-size: 1.5em; text-align: start;
                          text-indent: 0px; white-space: normal;
                          word-spacing: 0px;"><small><br>
                          </small></h3>
                        <h3 style="font-family: Georgia, &quot;Times New
                          Roman&quot;, Times, serif; letter-spacing:
                          normal; text-transform: none; font-weight:
                          normal; font-variant: normal; font-style:
                          normal; color: rgb(0, 0, 0); margin: 0px 0px
                          0.1em; padding: 0px; line-height: 1.2em;
                          font-size: 1.5em; text-align: start;
                          text-indent: 0px; white-space: normal;
                          word-spacing: 0px;"><small><small><small><font
                                  color="#000066"><font face="Helvetica,
                                    Arial, sans-serif"><b>Privacy Policy</b><b>:</b><span>&nbsp;</span>We





                                    take your privacy seriously and will
                                    take all measures to protect your
                                    personal information. Any personal
                                    information received will only be
                                    used to fulfill your order, and may
                                    be used for internal analytical
                                    purposes. We will not sell or
                                    redistribute your information to
                                    anyone or any other business.<span>&nbsp;</span></font></font></small></small><font
                              color="#000066" face="Helvetica, Arial,
                              sans-serif"><small><small><br>
                                </small></small></font></small></h3>
                        <br>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="page-main" class="container-group fix" style="color: rgb(2,
      0, 48); font-family: Georgia, &quot;Times New Roman&quot;, Times,
      serif; font-size: medium; font-style: normal;
      font-variant-ligatures: normal; font-variant-caps: normal;
      font-weight: 400; letter-spacing: normal; orphans: 2; text-align:
      start; text-indent: 0px; text-transform: none; white-space:
      normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width:
      0px; background-color: rgb(255, 255, 255); text-decoration-style:
      initial; text-decoration-color: initial;" align="center">
    </div>
  </body>
</html>

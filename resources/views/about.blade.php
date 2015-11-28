<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>|->Wc to Login<-|</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<head>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Laravel Project</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="http://localhost/test-laravel-5-project/public/work">Home</a></li>
                    <li><a href="">Item</a></li>

                    <li><a href="{{action('loginController@logout')}}">Logout</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
</head>


<div align="center" style="padding-top:50px; height:1000px">
    <h1 align="center"> Enter Question and Answer</h1>
    <script >
     $("#location_id").change(function (e)
     {
         e.preventDefault();
         $.ajax({
             type:'post',
             url:
         })

     })

    </script>

    <form action="" method="post">
        <div style="margin-bottom:15px"><input name="location_id" type="text" placeholder="Location Id"/></div>
        <table>
            <tr align="center">
                <th width="40px" align="center" scope="col">Number</th>
                <td width="380px" scope="col"><strong>Question</strong></td>
                <td width="160px" align="center" scope="col"><strong>Option A</strong></td>
                <td width="160px" align="center" scope="col"><strong>Option B</strong></td>
                <td width="160px" align="center" scope="col"><strong>Option C</strong></td>
                <td width="160px" align="center" scope="col"><strong>Option D</strong></td>
                <td width="120px" align="center" scope="col"><strong>Currect Answer</strong></td>
            </tr>
            <tr>
                <td align="center" valign="middle">1</td>
                <td style="padding-bottom:5px"><textarea name="q1" cols="50" rows="1"></textarea></td>
                <td><input name="a11" type="text" size="17px"/></td>
                <td><input name="a12" type="text" size="17px"/></td>
                <td><input name="a13" type="text" size="17px"/></td>
                <td><input name="a14" type="text" size="17px"/></td>
                <td align="center"><select name="a15">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">2</td>
                <td style="padding-bottom:5px"><textarea name="q2" cols="50" rows="1"></textarea></td>
                <td><input name="a21" type="text" size="17px"/></td>
                <td><input name="a22" type="text" size="17px"/></td>
                <td><input name="a23" type="text" size="17px"/></td>
                <td><input name="a24" type="text" size="17px"/></td>
                <td align="center"><select name="a25">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center">3</td>
                <td style="padding-bottom:5px"><textarea name="q3" cols="50" rows="1"></textarea></td>
                <td><input name="a31" type="text" size="17px"/></td>
                <td><input name="a32" type="text" size="17px"/></td>
                <td><input name="a33" type="text" size="17px"/></td>
                <td><input name="a34" type="text" size="17px"/></td>
                <td align="center"><select name="a35">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">4</td>
                <td style="padding-bottom:5px"><textarea name="q4" cols="50" rows="1"></textarea></td>
                <td><input name="a41" type="text" size="17px"/></td>
                <td><input name="a42" type="text" size="17px"/></td>
                <td><input name="a43" type="text" size="17px"/></td>
                <td><input name="a44" type="text" size="17px"/></td>
                <td align="center"><select name="a45">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">5</td>
                <td style="padding-bottom:5px"><textarea name="q5" cols="50" rows="1"></textarea></td>
                <td><input name="a51" type="text" size="17px"/></td>
                <td><input name="a52" type="text" size="17px"/></td>
                <td><input name="a53" type="text" size="17px"/></td>
                <td><input name="a54" type="text" size="17px"/></td>
                <td align="center"><select name="a55">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">6</td>
                <td style="padding-bottom:5px"><textarea name="q6" cols="50" rows="1"></textarea></td>
                <td><input name="a61" type="text" size="17px"/></td>
                <td><input name="a62" type="text" size="17px"/></td>
                <td><input name="a63" type="text" size="17px"/></td>
                <td><input name="a64" type="text" size="17px"/></td>
                <td align="center"><select name="a65">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">7</td>
                <td style="padding-bottom:5px"><textarea name="q7" cols="50" rows="1"></textarea></td>
                <td><input name="a71" type="text" size="17px"/></td>
                <td><input name="a72" type="text" size="17px"/></td>
                <td><input name="a73" type="text" size="17px"/></td>
                <td><input name="a74" type="text" size="17px"/></td>
                <td align="center"><select name="a75">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">8</td>
                <td style="padding-bottom:5px"><textarea name="q8" cols="50" rows="1"></textarea></td>
                <td><input name="a81" type="text" size="17px"/></td>
                <td><input name="a82" type="text" size="17px"/></td>
                <td><input name="a83" type="text" size="17px"/></td>
                <td><input name="a84" type="text" size="17px"/></td>
                <td align="center"><select name="a85">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">9</td>
                <td style="padding-bottom:5px"><textarea name="q9" cols="50" rows="1"></textarea></td>
                <td><input name="a91" type="text" size="17px"/></td>
                <td><input name="a92" type="text" size="17px"/></td>
                <td><input name="a93" type="text" size="17px"/></td>
                <td><input name="a94" type="text" size="17px"/></td>
                <td align="center"><select name="a95">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">10</td>
                <td style="padding-bottom:5px"><textarea name="q10" cols="50" rows="1"></textarea></td>
                <td><input name="a101" type="text" size="17px"/></td>
                <td><input name="a102" type="text" size="17px"/></td>
                <td><input name="a103" type="text" size="17px"/></td>
                <td><input name="a104" type="text" size="17px"/></td>
                <td align="center"><select name="a105">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">11</td>
                <td style="padding-bottom:5px"><textarea name="q11" cols="50" rows="1"></textarea></td>
                <td><input name="a111" type="text" size="17px"/></td>
                <td><input name="a112" type="text" size="17px"/></td>
                <td><input name="a113" type="text" size="17px"/></td>
                <td><input name="a114" type="text" size="17px"/></td>
                <td align="center"><select name="a115">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">12</td>
                <td style="padding-bottom:5px"><textarea name="q12" cols="50" rows="1"></textarea></td>
                <td><input name="a121" type="text" size="17px"/></td>
                <td><input name="a122" type="text" size="17px"/></td>
                <td><input name="a123" type="text" size="17px"/></td>
                <td><input name="a124" type="text" size="17px"/></td>
                <td align="center"><select name="a125">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">13</td>
                <td style="padding-bottom:5px"><textarea name="q13" cols="50" rows="1"></textarea></td>
                <td><input name="a131" type="text" size="17px"/></td>
                <td><input name="a132" type="text" size="17px"/></td>
                <td><input name="a133" type="text" size="17px"/></td>
                <td><input name="a134" type="text" size="17px"/></td>
                <td align="center"><select name="a135">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">14</td>
                <td style="padding-bottom:5px"><textarea name="q14" cols="50" rows="1"></textarea></td>
                <td><input name="a141" type="text" size="17px"/></td>
                <td><input name="a142" type="text" size="17px"/></td>
                <td><input name="a143" type="text" size="17px"/></td>
                <td><input name="a144" type="text" size="17px"/></td>
                <td align="center"><select name="a145">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">15</td>
                <td style="padding-bottom:5px"><textarea name="q15" cols="50" rows="1"></textarea></td>
                <td><input name="a151" type="text" size="17px"/></td>
                <td><input name="a152" type="text" size="17px"/></td>
                <td><input name="a153" type="text" size="17px"/></td>
                <td><input name="a154" type="text" size="17px"/></td>
                <td align="center"><select name="a155">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">16</td>
                <td style="padding-bottom:5px"><textarea name="q16" cols="50" rows="1"></textarea></td>
                <td><input name="a161" type="text" size="17px"/></td>
                <td><input name="a162" type="text" size="17px"/></td>
                <td><input name="a163" type="text" size="17px"/></td>
                <td><input name="a64" type="text" size="17px"/></td>
                <td align="center"><select name="a167">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">17</td>
                <td style="padding-bottom:5px"><textarea name="q17" cols="50" rows="1"></textarea></td>
                <td><input name="a171" type="text" size="17px"/></td>
                <td><input name="a172" type="text" size="17px"/></td>
                <td><input name="a173" type="text" size="17px"/></td>
                <td><input name="a174" type="text" size="17px"/></td>
                <td align="center"><select name="a178">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">18</td>
                <td style="padding-bottom:5px"><textarea name="q18" cols="50" rows="1"></textarea></td>
                <td><input name="a181" type="text" size="17px"/></td>
                <td><input name="a182" type="text" size="17px"/></td>
                <td><input name="a183" type="text" size="17px"/></td>
                <td><input name="a184" type="text" size="17px"/></td>
                <td align="center"><select name="a185">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">19</td>
                <td style="padding-bottom:5px"><textarea name="q19" cols="50" rows="1"></textarea></td>
                <td><input name="a191" type="text" size="17px"/></td>
                <td><input name="a192" type="text" size="17px"/></td>
                <td><input name="a193" type="text" size="17px"/></td>
                <td><input name="a194" type="text" size="17px"/></td>
                <td align="center"><select name="a195">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">20</td>
                <td style="padding-bottom:5px"><textarea name="q20" cols="50" rows="1"></textarea></td>
                <td><input name="a201" type="text" size="17px"/></td>
                <td><input name="a202" type="text" size="17px"/></td>
                <td><input name="a203" type="text" size="17px"/></td>
                <td><input name="a204" type="text" size="17px"/></td>
                <td align="center"><select name="a205">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>


        </table>
        <input name="Submit" type="button" value="submit"/>
    </form>
</div>

<footer style="text-align:center">
    <p> Copyright@2015</p>
</footer>

</body>
</html>

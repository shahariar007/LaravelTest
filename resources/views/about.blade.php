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


    <form action="{{action('DFController@QInsert')}}" id="qform" method="post">
        <div style="margin-bottom:15px"><input name="location_id" id="location_id" type="text" placeholder="Location Id"/></div>
        <p id="idcheck" style="color: #880000"></p>
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
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">2</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center">3</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">4</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">5</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">6</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">7</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1">
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">8</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">9</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">10</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">11</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">12</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">13</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">14</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">15</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">16</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">17</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">18</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">19</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>
            <tr>
                <td align="center" valign="middle">20</td>
                <td style="padding-bottom:5px"><textarea class="q1"   cols="50" rows="1"></textarea></td>
                <td><input class="a1" type="text" size="17px"/></td>
                <td><input class="a2" type="text" size="17px"/></td>
                <td><input class="a3" type="text" size="17px"/></td>
                <td><input class="a4" type="text" size="17px"/></td>
                <td align="center"><select class="c1" >
                        <option value="1">Answer A</option>
                        <option value="2">Answer B</option>
                        <option value="3">Answer C</option>
                        <option value="4">Answer D</option>
                    </select></td>
            </tr>


        </table>
        <input class="insertbutton" id="qinsert" type="button" value="Save"  />
    </form>
</div>
<script >
    $('#location_id').keyup(function (e)
    {

        $.ajax({
            type:"get",
            url:"{{action('DFController@CheckLID')}}",
            data:
            {
              locationid: $('#location_id').val()
            },

            success : function(response)
            {
                console.log(response);
                if(response==1)
                {
                    $(document).ready(function(){
                            $('#idcheck').text("Already Exist");
                        });
                }
                else
                {
                    $(document).ready(function(){
                        $('#idcheck').text("");
                    });
                }
            }

        })

    });


</script>
<script >
    $(document).ready(function () {
        $('#qinsert').click(function(e){
            e.preventDefault();
            e.stopPropagation();
            $.ajax({
                type:"get",
                url:"{{action('DFController@QInsert')}}",
                data:
                {
                    Locationid:$('#location_id').val(),
                    Questionset:getQuestion($('.q1')),
                    Questionop:[getOptions($('.a1')),getOptions($('.a2')),getOptions($('.a3')),getOptions($('.a4'))],
                   CurrectAns:getAnswar($('.c1'))
                },

                success : function(response)
                {
                    console.log(response);


                }

            })
        });
        function getOptions(option){
            var o = [];
            option.each(function (i) {
                o.push($(this).val())
            })
            return o;
        }
        function getQuestion(option){
            var o = [];
            option.each(function (i) {
                o.push($(this).val())
            })
            return o;
        }
        function getAnswar(option){
            var o = [];
            option.each(function (i) {
                o.push($(this).val())
            })
            return o;
        }
    });


</script>
<footer style="text-align:center">
    <p> Copyright@2015</p>
</footer>

</body>
</html>

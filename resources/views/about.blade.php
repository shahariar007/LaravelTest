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
                    <li><a href="{{action('QuesController@showLoginCk')}}">Question</a></li>

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
        <div style="margin-bottom:15px"><input name="location_id" id="location_id" type="text"
                                               placeholder="Location Id"/></div>
        <p id="idcheck" style="color: #880000"></p>

        <div>
            <input name="addbutton" value="Add" type="button" class="addbuttoncls"/>
            <input name="removebutton" value="Remove" type="button" class="removebuttoncls"/>

        </div>
        <table class="rowadd" style="border-collapse:separate;border-spacing: 0 0.5em;">
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
                <td><textarea class="q1" cols="50" rows="1"></textarea></td>
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
        </table>
        <input class="insertbutton" id="qinsert" type="button" value="Save"/>
    </form>
    <p id="insertNotification"></p>
</div>
<script>
    $('#location_id').keyup(function (e) {

        $.ajax({
            type: "get",
            url: "{{action('DFController@CheckLID')}}",
            data: {
                locationid: $('#location_id').val()
            },

            success: function (response) {
                console.log(response);
                if (response == 1) {
                    $(document).ready(function () {
                        $('#idcheck').text("Location Exist ");
                    });
                }
                else {
                    $(document).ready(function () {
                        $('#idcheck').text("");
                    });
                }
            }

        })

    });


</script>
<script>

    $(document).ready(function () {
        $('#qinsert').click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            if ($.trim(($('#location_id').val().length))==0)
            {
              alert("location ID cant be null")
            }else {
                $.ajax({
                    type: "get",
                    url: "{{action('DFController@QInsert')}}",
                    data: {
                        Locationid: $('#location_id').val(),
                        Questionset: getQuestion($('.q1')),
                        Questionop: [getOptions($('.a1')), getOptions($('.a2')), getOptions($('.a3')), getOptions($('.a4'))],
                        CurrectAns: getAnswar($('.c1'))
                    },

                    success: function (response) {
                        console.log(response);
                        if (response == 1) {
                            $(document).ready(function () {
                                $('#insertNotification').text("Data Successfully Save");
                                $('.q1').val("");
                                $('.a1').val("");
                                $('.a2').val("");
                                $('.a3').val("");
                                $('.a4').val("");
                                $('.c1').val("");
                                $('#location_id').val("");

                                //location.reload(true);
                            });
                        }
                        else {
                            $(document).ready(function () {
                                $('#insertNotification').text(response);
                            });

                        }


                    }

                })
            }
        });
        function getOptions(option) {
            var o = [];
            option.each(function (i) {
                o.push($(this).val())
            })
            return o;
        }

        function getQuestion(option) {
            var o = [];
            option.each(function (i) {
                o.push($(this).val())
            })
            return o;
        }

        function getAnswar(option) {
            var o = [];
            option.each(function (i) {
                o.push($(this).val())
            })
            return o;
        }
    });


</script>
<script>
    var i = 2;
    $('.addbuttoncls').click(function () {

        $(".rowadd").append('<tr style="padding-bottom:5px"><td align="center" valign="middle">' + (i++) + '</td><td ><textarea class="q1"cols="50" rows="1"></textarea></td><td><input class="a1" type="text" size="17px"/></td><td><input class="a2" type="text" size="17px"/></td><td><input class="a3" type="text" size="17px"/></td><td><input class="a4" type="text" size="17px"/></td><td align="center"><select class="c1" ><option value="1">Answer A</option><option value="2">Answer B</option><option value="3">Answer C</option><option value="4">Answer D</option></select></td></tr>');
    });
    $('.removebuttoncls').click(function () {
        if ($(".rowadd tr").length != 2) {
            $(".rowadd tr:last-child").remove();
            i--;
        }
        else {
            alert("You cannot delete first row");
        }

    });
</script>
{{--<footer style="text-align:center; position:relative">
    <p> Copyright@2015</p>
</footer>--}}

</body>
</html>

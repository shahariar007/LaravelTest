<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    {{--{!! Html::style('css/app.css') !!}
    {!! Html::style('css/style.css') !!}

    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}--}}
    {{--<link rel="stylesheet" href="{{asset('css/css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

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
                <li><a href="{{action('loginController@addloginC')}}">Add Question</a></li>
                <li><a href="{{action('loginController@logout')}}">Logout</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>

<body>
<div class="container">
    @yield('content')
</div>

<div align="center" style="padding-top:50px; height:1000px">
    <h1>Questions And Answers</h1>

    <select class="locationset" id="locaid">
        <option value="">Select Location</option>
        @foreach($location as $p)
            <option value='{{$p}}'>{{$p}}</option>
        @endforeach
    </select>
    <input type="button" id="edit" value="edit">
    <input type="button" id="delete" value="Delete">

    <p id="confrm"></p>
    <table class="datashow"
           style="border-collapse:separate;border-spacing: 0 0.5em;text-align: center; padding-left: 20px">
        <tr align="center">
            <td width="40px" scope="col"><strong>No:</strong></td>
            <td width="380px" scope="col"><strong>Question</strong></td>
            <td width="160px" align="center" scope="col"><strong>Option A</strong></td>
            <td width="160px" align="center" scope="col"><strong>Option B</strong></td>
            <td width="160px" align="center" scope="col"><strong>Option C</strong></td>
            <td width="160px" align="center" scope="col"><strong>Option D</strong></td>
            <td width="120px" align="center" scope="col"><strong>Correct Answer</strong></td>
        </tr>
        <tbody id="loadlid">

        </tbody>

    </table>

</div>
<!-- /.container -->

<script>

    $('#delete').click(function (e) {
        $.ajax({
            type: "get",
            url: "{{action('QuesController@Delete')}}",
            data: {
                locid: $('#locaid').val()
            },

            success: function (response) {
                if(response==1)
                {
                    $(document).ready(function () {
                        $('#confrm').text("Location id Delete Successfully");
                        $('.locationset :selected').remove();
                        $('#loadlid').empty();

                    })
                }

            }
        })

    });
</script>
<script>
    $('.locationset').change(function (e) {

        $.ajax({
            type: "get",
            url: "{{action('QuesController@Getalldata')}}",
            data: {
                locid: $('#locaid').val()
            },

            success: function (response) {
                var trHTML = '';
                console.log(response);
                response.forEach(function (item, i) {

                    trHTML += '<tr><td>' + (i + 1) + '</td><td>' + item.question + '</td>';
                    item.option.forEach(function (option, i) {
                        trHTML += '<td>' + option + '</td>'
                    })
                    trHTML += '<td>' + item.answer + '</td></tr>'
                });
                $('#loadlid').html(trHTML);
            }


        })

    });
</script>
</body>
</html>
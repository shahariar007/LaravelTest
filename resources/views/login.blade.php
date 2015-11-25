<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
                    <li><a href="">Home</a></li>
                    <li><a href="http://localhost/test-laravel-5-project/public/about">About</a></li>
                    <li><a href="">Item</a></li>

                    <li><a href="http://localhost/test-laravel-5-project/public/registration">Registration</a> </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
</head>


<div style="text-align:center;min-height:800px;max-width:1500px;padding-top:100px">

    <form action="{{action('loginController@login')}}" method="post">
        {{csrf_field()}}
        <table align="center" >
            <tr align="center"> LOGIN </tr>
            <tr >
                <td style="padding-bottom:10px" >Email:</td>
                <td style="padding-bottom:10px"><input name="user_email" type="text" /></td>
            </tr>
            <tr >
                <td>Password:</td>
                <td><input name="user_password" type="password" /></td>
            </tr>
            <tr>
                <td></td>
                <td style="padding-top:5px"><input name="Submit" value="Login" type="submit" /></td>
            </tr>

        </table>

    </form>
</div>
<footer>
    <p style="text-align:center"> copyright</p>>
</footer>
</body>
</html>

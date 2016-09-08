<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin - Sergio Osmena</title>

    <!-- Bootstrap -->
    <link href="{{URL::asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('bower_components/bootstrap-sidebar/dist/css/sidebar.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
        </head>
        <body style="padding-top:20px;">
            <div class="container-fluid">
                <div class="row">
                    <div id = "mainContent" class="col-md-12">
                        <img  style="max-height:150px;" src="{{url::asset('images/so.png')}}" class="img-responsive center">
                        <h2 class="text-center">Sergio Osmeña Sr. Highschool Students Login Page</h2>
                        <div class="col-sm-6 col-md-offset-3 col-sm-offset-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Login</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-6">
                                        <form class="loginForm" method="post" action="{{ route('cms.store')}}">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                <input type="text" name="username" id="username" class="form-control" placeholder="Admin Username">
                                            </div>
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                            </div>
                                            <br>
                                            <div class="btn-group">
                                                <input type="submit" class="btn btn-default">
                                            </div>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <span class="fa fa-lock"></span>&nbsp<span>Forgot your password?</strong><br>
                                            &nbsp<a href="">Recover it here.</a>
                                        </p>
                                        <p>
                                            <span class="glyphicon glyphicon-user"></span>&nbsp<span>Not a student yet?</strong><br>
                                            &nbsp<a href="">Learn more.</a>
                                        </p>
                                        <p>
                                            <span class="fa fa-comment"></span>&nbsp<span>Have a question?</strong><br>
                                            &nbsp<a href="">Contact us.</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
            <footer>
                © 2016 Sergio Osmenia High School All Rights Reserved
            </footer>
            <script type="text/javascript" src="{{URL::asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
            <script type="text/javascript" src="{{URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
            <script type="text/javascript" src="{{URL::asset('bower_components/bootstrap-sidebar/dist/js/sidebar.js')}}"></script>
            <script type="text/javascript" src="{{URL::asset('js/custom.js')}}"></script>
        </body>
        </html>





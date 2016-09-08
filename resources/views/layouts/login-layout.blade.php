<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Sergio Osmena</title>

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
  <body>
    @yield('body')

    <footer>
      © 2016 Sergio Osmenia High School All Rights Reserved
<!--      <ul>
        <li>Mission and Vision</li>
        <li>Contact</li>  
        <li>Contact</li>
      </ul> -->
    </footer>
    <script type="text/javascript" src="{{URL::asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('bower_components/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('bower_components/bootstrap-sidebar/dist/js/sidebar.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/custom.js')}}"></script>
  </body>
  </html>

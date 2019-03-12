<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Login</title>
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="{{asset('login/img/metis-tile.png')}}" />
    <link rel="stylesheet" href="{{asset('login-form/lib/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('backend/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('login-form/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('login-form/lib/metismenu/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('login-form/lib/onoffcanvas/onoffcanvas.css')}}">
    <link rel="stylesheet" href="{{asset('login-form/lib/animate.css/animate.css')}}">
</head>

<body class="login">

      <div class="form-signin">
    <div class="text-center">
        <img src="{{asset('login-form/img/logo.png')}}" alt="Metis Logo">
    </div>
    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="{{url('login')}}" method="POST">
              {{ csrf_field() }}
                <p class="text-muted text-center">
                    Enter your Email and password
                </p>
                <input type="email" placeholder="Email" class="form-control top" name="email">
                <input type="password" placeholder="Password" class="form-control bottom" name="password">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
        </div>
  </div>


    <!--jQuery -->
    <script src="{{asset('login-form/lib/jquery/jquery.js')}}"></script>

    <!--Bootstrap -->
    <script src="{{asset('login-form/lib/bootstrap/js/bootstrap.js')}}"></script>


    <!-- <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('.list-inline li > a').click(function() {
                    var activeForm = $(this).attr('href') + ' > form';
                    //console.log(activeForm);
                    $(activeForm).addClass('animated fadeIn');
                    //set timer to 1 seconds, after that, unload the animate animation
                    setTimeout(function() {
                        $(activeForm).removeClass('animated fadeIn');
                    }, 1000);
                });
            });
        })(jQuery);
    </script> -->
</body>

</html>

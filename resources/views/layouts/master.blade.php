<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('backend/css/bootstrap-responsive.min.css')}}" />
<!-- <link rel="stylesheet" href="{{asset('backend/css/fullcalendar.css')}}" /> -->
<link rel="stylesheet" href="{{asset('backend/css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{asset('backend/css/matrix-media.css')}}" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<!-- <link rel="stylesheet" href="{{asset('backend/css/jquery.gritter.css')}}" /> -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
@yield('css')
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
@include('layouts.header')
@include('layouts.navigation')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
  @yield('content')
</div>
<script src="{{asset('backend/js/excanvas.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.ui.custom.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
<!-- <script src="{{asset('backend/js/jquery.flot.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('backend/js/jquery.peity.min.js')}}"></script>
<script src="{{asset('backend/js/fullcalendar.min.js')}}"></script> -->
<script src="{{asset('backend/js/matrix.js')}}"></script>
<!-- <script src="js/matrix.dashboard.js"></script>
<script src="js/jquery.gritter.min.js"></script>
<script src="js/matrix.interface.js"></script>
<script src="js/matrix.chat.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/matrix.form_validation.js"></script>
<script src="js/jquery.wizard.js"></script>
<script src="js/jquery.uniform.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/matrix.popover.js"></script> -->
<script src="{{asset('backend/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/js/matrix.tables.js')}}"></script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {

          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();
          }
          // else, send page to designated URL
          else {
            document.location.href = newURL;
          }
      }
  }

function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
@yield('js')
</body>
</html>

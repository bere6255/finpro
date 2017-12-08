<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>fist services</title>
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" href="css/style.css"/>
      <link rel="stylesheet" href="css/custom.css"/>
    <link rel="shortcut icon" href="images/favicon.png"/>
</head>
<body>
<div class=" container-scroller">
  <!--Navbar-->
  @yield('navber')
  <!--End navbar-->
  <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">

          <!-- SIDEBAR ENDS -->
          @yield('sideber')
          <!-- login start-->
          <div class="home_content_wrapper">
            @yield('loginmodel')
              <!--log in ends -->

              <!--slogan start-->
              @yield('slogan')
              <!--slogan end-->
              <!--catigory start-->
              @yield('content')
              <!--catigory end-->
              @yield('divider')
              <!-- plane setion start -->
              @yield('product')
            </div>

            <!-- footer start-->
            <footer class="home_footr">
                <div class="container-fluid clearfix">
                  <span class="float-right">
                      <a href="#">Fist Services</a> &copy; 2017
                  </span>
                </div>
            </footer>

        </div>


</div>
</div>
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/tether/dist/js/tether.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/chart.js/dist/Chart.min.js"></script>
<script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/misc.js"></script>
<script src="js/chart.js"></script>
<script src="js/maps.js"></script>
<script src="js/custom.js"></script>
</body>

</html>

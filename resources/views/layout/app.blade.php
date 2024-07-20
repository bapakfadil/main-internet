<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <title>@yield('title')</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Berry is trending dashboard template made using Bootstrap 5 design framework. Berry is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="codedthemes">

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{url('/assets/images/awinet.png')}}" type="image/x-icon"> <!-- [Google Font] Family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" id="main-font-link" >
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href='{{"/assets/fonts/tabler-icons.min.css"}}' >
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href='{{"../assets/fonts/feather.css"}}' >
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href='{{"../assets/fonts/fontawesome.css"}}' >
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href='{{"../assets/fonts/material.css"}}'>
<!-- [Template CSS Files] -->
<link rel="stylesheet" href='{{"/assets/css/style.css"}}'>
<link rel="stylesheet" href='{{"/assets/css/style-preset.css"}}'>

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->
  <body>
    <!-- [ Pre-loader ] start -->

<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
@include('layout.sidebar')
<!-- [ Sidebar Menu ] end --> 
 <!-- [ Header Topbar ] start -->
@include('layout.navbar')
<!-- [ Header ] end -->
    <!-- [ Main Content ] start -->
   @yield('content')
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
      <div class="footer-wrapper container-fluid">
        <div class="row">
          <div class="col-sm-6 my-1">
            <p class="m-0">Berry &#9829; crafted by Team <a href="https://themeforest.net/user/codedthemes"
                target="_blank">Codedthemes</a></p>
          </div>
          <div class="col-sm-6 ms-auto my-1">
            <ul class="list-inline footer-link mb-0 justify-content-sm-end d-flex">
              <li class="list-inline-item"><a href="../index.html">Home</a></li>
              <li class="list-inline-item"><a href="https://codedthemes.gitbook.io/berry-bootstrap/"
                  target="_blank">Documentation</a></li>
              <li class="list-inline-item"><a href="https://codedthemes.support-hub.io/" target="_blank">Support</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer> <!-- Required Js -->
<script src='{{"../assets/js/plugins/popper.min.js"}}'></script>
<script src='{{"../assets/js/plugins/simplebar.min.js"}}'></script>
<script src='{{"../assets/js/plugins/bootstrap.min.js"}}'></script>
<script src='{{"../assets/js/fonts/custom-font.js"}}'></script>
<script src='{{"../assets/js/pcoded.js"}}'></script>
<script src='{{"../assets/js/plugins/feather.min.js"}}'></script>





<script>layout_change('light');</script>
<script>font_change("Roboto");</script>
<script>change_box_container('false');</script>
<script>layout_caption_change('true');</script>
<script>layout_rtl_change('false');</script>
<script>preset_change("preset-1");</script>


    <!-- [Page Specific JS] start -->
    <!-- Apex Chart -->
    <script src='{{"../assets/js/plugins/apexcharts.min.js"}}'></script>
    <script src='{{"../assets/js/pages/dashboard-default.js"}}'></script>
    <!-- [Page Specific JS] end -->
  </body>
  <!-- [Body] end -->
</html>

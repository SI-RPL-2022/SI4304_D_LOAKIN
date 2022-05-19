<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>LOAKIN - Driver Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assetsdriver/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetsdriver/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetsdriver/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assetsdriver/vendors/jquery-bar-rating/css-stars.css')}}" />
    <link rel="stylesheet" href="{{asset('assetsdriver/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assetsdriver/css/demo_2/style.css')}}" />
    <!-- End layout styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" type="image/png" href="{{asset('logoatas.png')}}">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_horizontal-navbar.html -->
        {{-- navbar --}}
        @include('Driver.Layout.Navbar')
      <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper pb-0">
                  {{-- content --}}
                  @yield('content')

                  {{-- footer --}}
                  @include('Driver.Layout.Footer')
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{asset('assetsdriver/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assetsdriver/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('assetsdriver/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assetsdriver/vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assetsdriver/vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('assetsdriver/vendors/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('assetsdriver/vendors/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{asset('assetsdriver/vendors/flot/jquery.flot.stack.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assetsdriver/js/off-canvas.js')}}"></script>
    <script src="{{asset('assetsdriver/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assetsdriver/js/misc.js')}}"></script>
    <script src="{{asset('assetsdriver/js/settings.js')}}"></script>
    <script src="{{asset('assetsdriver/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assetsdriver/js/dashboard.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Head -->
    @include('backend.includes.head')

    <!-- CSS -->
    @include('backend.includes.css')
  </head>

  <body>

    <!-- Left Side Bar -->
    @include('backend.includes.sidebar')

    <!-- Top head Bar -->
    @include('backend.includes.topbar')

    <!-- Right Side Bar -->
    @include('backend.includes.rightbar')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

    @yield('content')
     <!-- Footer Part -->
     @include('backend.includes.footer')

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <!-- Scripts -->
    @include('backend.includes.scripts')
  </body>
</html>

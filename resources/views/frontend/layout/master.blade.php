<!DOCTYPE html>
<html lang="en">

<head>
     @include('frontend.include.head-titles')
    
    
</head>

<body>
   @include('frontend.include.header')

        <!-- Body container start -->

            @yield('body-content')

        <!-- Body container end -->

    <!-- Footer section start -->
         @include('frontend.include.footer')
    <!-- Footer section end -->
   <script>
       @if (Session::has('message'))
           toastr.options = {
           "closeButton": true,
           "progressBar": true
       }
       toastr.success("{{ session('message') }}");
       @endif

               @if (Session::has('error'))
           toastr.options = {
           "closeButton": true,
           "progressBar": true
       }
       toastr.error("{{ session('error') }}");
       @endif

               @if (Session::has('info'))
           toastr.options = {
           "closeButton": true,
           "progressBar": true
       }
       toastr.info("{{ session('info') }}");
       @endif

               @if (Session::has('warning'))
           toastr.options = {
           "closeButton": true,
           "progressBar": true
       }
       toastr.warning("{{ session('warning') }}");
       @endif
   </script>

     @include('frontend.include.script')

</body>
</html>



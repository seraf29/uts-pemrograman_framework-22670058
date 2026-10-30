<!DOCTYPE html>
<html lang="en">

<head>
    @include('landing.partials.head')
</head>

<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">

        @include('landing.partials.header')

        @yield('content')

        @include('landing.partials.footer')
    </div>

    @include('landing.partials.scripts')

</body><!-- End of .page_wrapper -->

</html>

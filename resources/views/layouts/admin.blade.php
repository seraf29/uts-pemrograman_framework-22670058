<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.head')
</head>

<body>
@hasSection('plain')
    {{-- Halaman tanpa menubar/footer (mis. login) --}}
    @yield('content')
@else
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('admin.partials.header')
        @include('admin.partials.sidebar')

        <div class="main-content">
            @yield('content')

            @include('admin.partials.footer')
        </div>
    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>
@endif

    @include('admin.partials.scripts')
</body>

</html>

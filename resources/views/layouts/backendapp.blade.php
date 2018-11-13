

<!DOCTYPE html>

<html lang="en">
<head>
    @include('particles.backend.header')
</head>
<body>
<div class="ui-app">
    <div class="ui-app__wrapper">
        <div id="prepage-loader" style="display: none;">
            <div class="ui-app__prepage-loader spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        @include('particles.backend.topnav')
        @include('particles.backend.sidenav')
        <main>

            <!-- Page content -->
            <div class="row">
                <!-- Analytics Header -->

                @yield('admin-content')

            </div>
            <!--End Page content -->

        </main>

        @include('particles.backend.footer')
    </div>

</div>

@include('particles.backend.javascript')


</body>
</html>


<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @include('particles.backend.header')
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    @include('particles.backend.topnav')
    @include('particles.backend.sidenav')
<div class="app-content content">
    <div class="content-wrapper">
       
                @yield('admin-content')
      
    </div>
</div>
@include('particles.backend.footer')


@include('particles.backend.javascript')


</body>
</html>


<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.bo.head')
        @yield('additionalCss')
    </head>

<body class="body-wrapper">
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        @include('partials.bo.topbarheader')
        @include('partials.bo.sidebar')

        <div class="main">
            <div class="page-wrapper" style="min-height: 250px;">
	            @yield('content')
        </div>

            @include('partials.bo.footer')
            </div>
    </div>
        <!-- JAVASCRIPTS -->
        @include('partials.bo.footerjs')
        @yield('additionalJs1')
        @yield('additionalJs2')
  
</body>

</html>
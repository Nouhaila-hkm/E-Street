<!DOCTYPE html>
<html lang="en">
<head>
 @include('partials.fo.headersjs')
 @yield('additionalCss')
</head>

<body class="body-wrapper">

@include('partials.fo.navjs')

<div class="main">
	@yield('content')
</div>

@include('partials.fo.footer')


  <!-- JAVASCRIPTS -->
  @include('partials.fo.footerjs')
  @yield('additionalJs1')
  @yield('additionalJs2')
  
</body>

</html>
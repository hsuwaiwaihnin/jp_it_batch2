<!DOCTYPE html>
<html>
<head>
	<title>Backend @yield('title')</title>
	<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<div class="container">
@yield('content')
</div>
</body>
</html>
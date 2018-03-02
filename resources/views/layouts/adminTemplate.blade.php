<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="ldd map service">
	<meta name="author" content="Land development department">
	<title>LDD Services :: Admin</title>
	@include('layouts.adminMainStyle')
	@yield('style')
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		@yield('content')
		@include('layouts.adminMainScript')
	</div>
	@yield('script')
</body>
</html>

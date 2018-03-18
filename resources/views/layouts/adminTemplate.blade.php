<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LDD Services :: Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="ldd map service">
	<meta name="author" content="Land development department">
	@include('layouts.adminMainStyle')
	@yield('style')
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		@include('layouts.adminHeader')
		@include('layouts.adminLeftSidebar')
		@yield('content')
		@include('layouts.adminFooter')
		@include('layouts.adminControlSidebar')
	</div>
	@include('layouts.adminMainScript')
	@yield('script')
</body>
</html>

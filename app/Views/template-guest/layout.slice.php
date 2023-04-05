<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('page_title')</title>
	@include('template-guest.includes.header')	
</head>
<body class="layout-top-nav layout-navbar-fixed layout-fixed">
	<div class="wrapper">
		@include('template-guest.includes.navbar')

      @yield('page_content')

		@include('template-guest.includes.sidebar')

		<input type="hidden" id="txt_baseUrl" value="<?php echo base_url(); ?>">

		@include('template-guest.includes.footer')
	</div>
</body>
</html>
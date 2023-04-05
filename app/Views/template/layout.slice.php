<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('page_title')</title>
	@include('template.includes.header')	
</head>
<body class="layout-top-nav layout-navbar-fixed layout-fixed">
	<div class="wrapper">
		@include('template.includes.navbar')

      @yield('page_content')

		@include('template.includes.sidebar')

		<input type="hidden" id="txt_baseUrl" value="<?php echo base_url(); ?>">



		@include('template.includes.footer')
	</div>
</body>
</html>
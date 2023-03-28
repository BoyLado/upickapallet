<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h4>Login Credentials</h4>

	<p>Bidder Name: #{{ $bidderNumber }} - {{ $bidderName }}</p>
	<p>Email: {{ $bidderEmailAddress }}</p>
	<p>Password: {{ $bidderPassword }}</p>
	<p>Click <a href="<?php echo base_url(); ?>">here</a> to login.</p>

</body>
</html>
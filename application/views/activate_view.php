<!DOCTYPE html>
<html>
<head>
	<title>Account activation</title>
</head>
<body>
	<?php 
	if (!empty($message)) {
		echo $message;
	}
	?>
	<div>
		<a href="<?php echo base_url('auth/login') ?>">Click here to login</a>
	</div>
</body>
</html>
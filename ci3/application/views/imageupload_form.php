<!DOCTYPE html>
<html>
<head>
	<style>
		.float{
			float:center;
		}
	</style>
    <title>Upload Image in Codeigniter</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php echo @$error; ?> 
	<?php echo form_open_multipart('LoginDashboard/upload');?>
	<?php echo "<input type='file' name='profile_pic' size='20' />"; ?>
	<?php echo "<center><input type='submit' name='submit' value='upload' /> </center>";?>
	<?php echo "</form>"?>
</body>
</body>
</html>
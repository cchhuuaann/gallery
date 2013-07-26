<?php
	
	require_once('variables.php');
	require_once('functions.php');
	
?><!DOCTYPE html>
<html>
	<head>
		<title>Gallery</title>
		<style>
body {
	background-color: silver;
	background-image:
		linear-gradient(335deg, #b00 23px, transparent 23px),
		linear-gradient(155deg, #d00 23px, transparent 23px),
		linear-gradient(335deg, #b00 23px, transparent 23px),
		linear-gradient(155deg, #d00 23px, transparent 23px);
	background-size: 58px 58px;	
	background-position: 0px 2px, 4px 35px, 29px 31px, 34px 6px;
}
div.gallery {

}
div.gallery  div.image {
	width: 50%;
	background-color: #ffffff;
}
		</style>
	</head>
	<body>
			<?php echo vystup() ; ?>
	</body>
</html>

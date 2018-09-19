<!DOCTYPE html>
<html>
<head>
	<title>Meu site</title>
	<link href="<?php echo BASE_URL; ?>assets/css/style.css" rel="stylesheet" type="text/css" >
</head>
<body>
	<?php
		$this->loadViewInTemplete($viewName, $viewData);
	?>

	<script type="text/javascript" >var BASE_URL = '<?php echo BASE_URL; ?>'; </script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>
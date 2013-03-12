<!DOCTYPE html>

<html>
<head>
<title>Login</title>
<link rel="stylesheet" href=<?php echo base_url() ?>media/bootstrap/css/bootstrap.css>
<link rel="stylesheet" href=<?php echo base_url() ?>media/bootstrap/css/bootstrap-responsive.css>
</head>

<body>

<h1>Login</h1>

<?php echo validation_errors(); ?>
<?php echo form_open('admin/login'); ?>

<p>
	<?php
		echo form_label('Email:', 'email');
		echo form_input('email', '','id="email"');
	?>
</p>

<p>
        <?php
                echo form_label('Contrasena:', 'contrasena');
                echo form_input('contrasena', '','id="contrasena"');
        ?>
</p>

<?php echo form_submit('submit', 'Login'); ?>
<?php echo form_close(); ?>

</body>
</html>

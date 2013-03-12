<!DOCTYPE html>

<html>
<head>
<title>New Team Form</title>
<link rel="stylesheet" href=<?php echo base_url() ?>media/bootstrap/css/bootstr$
<link rel="stylesheet" href=<?php echo base_url() ?>media/bootstrap/css/bootstr$
</head>

<body>

<h1>Login</h1>

<?php echo validation_errors(); ?>
<?php echo form_open('team/save'); ?>

	<p><?php echo form_label('Name:', 'name');
         echo form_input('name', '','id="name"');
	?></p>

	<p><?php echo form_label('Short Name:', 'short name');
	 echo form_input('sort_name', '','id="short_name"');
	?></p>

	// Recomiendo colocar un "input date" dinamico
        <p><?php echo form_label('Founded Date:', 'founded date');
         echo form_input('founded_date', '','id="founded_date"');
        ?></p>

<?php echo form_submit('submit', 'Guardar'); ?>
<?php echo form_close(); ?>

</body>
</html>


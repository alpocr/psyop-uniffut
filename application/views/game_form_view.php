<!DOCTYPE html>

<html>
<head>
<title>New/Edit Game Form</title>
<link rel="stylesheet" href=<?php echo base_url() ?>media/bootstrap/css/bootstr$
<link rel="stylesheet" href=<?php echo base_url() ?>media/bootstrap/css/bootstr$
</head>

<body>

<h1>Login</h1>

<?php echo validation_errors(); ?>
<?php echo form_open('coach/save'); ?>

	<p><?php echo form_label('Status:', 'status');
         echo form_input('status', '','id="status"');
	?></p>

        <p><?php echo form_label('Date:', 'date');
         echo form_input('date', '','id="date"');
        ?></p>

        <p><?php echo form_label('Country:', 'country');
         echo form_input('country', '','id="country"');
        ?></p>

        <p><?php echo form_label('City:', 'city');
         echo form_input('city', '','id="city"');
        ?></p>


<?php echo form_submit('submit', 'Guardar'); ?>
<?php echo form_close(); ?>

</body>
</html>


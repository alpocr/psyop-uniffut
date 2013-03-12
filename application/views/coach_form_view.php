<!DOCTYPE html>

<html>
<head>
<title>New/Edit Coach Form</title>
<link rel="stylesheet" href=<?php echo base_url() ?>media/bootstrap/css/bootstr$
<link rel="stylesheet" href=<?php echo base_url() ?>media/bootstrap/css/bootstr$
</head>

<body>

<h1>Login</h1>

<?php echo validation_errors(); ?>
<?php echo form_open('coach/save'); ?>

	<p><?php echo form_label('Name:', 'name');
         echo form_input('name', '','id="name"');
	?></p>

        <p><?php echo form_label('Last Name:', 'last name');
         echo form_input('lastname', '','id="lastname"');
        ?></p>

	// Agregar un input date -  PREVISTO
        <p><?php echo form_label('BirthDay:', 'birthday');
         echo form_input('brithday', '','id="birthday"');
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


<!DOCTYPE html>
<html>
<head>
<title>CodeIgniter &rsaquo; Unit Testing &rsaquo; Index</title>
<link rel="stylesheet" type="text/css" href="tests/unit_test.css" charset="utf-8">

</head>
<body>
	<div id="header">
		<h2>CodeIgniter &rsaquo; Unit Testing &rsaquo; Index</h2>
	</div>
	
	<div id="nav">
		<form action="<?php echo $form_url; ?>" method="post">
			<input type="hidden" name="all" value="1" />
			<input type="submit" value="All" />
		</form>
		<form action="<?php echo $form_url; ?>" method="post">
			<input type="hidden" name="libraries" value="1" />
			<input type="submit" value="Libraries" />
		</form>
		<form action="<?php echo $form_url; ?>" method="post">
			<input type="hidden" name="controllers" value="1" />
			<input type="submit" value="Controllers" />
		</form>
		<form action="<?php echo $form_url; ?>" method="post">
			<input type="hidden" name="models" value="1" />
			<input type="submit" value="Models" />
		</form>
		<form action="<?php echo $form_url; ?>" method="post">
			<input type="hidden" name="helpers" value="1" />
			<input type="submit" value="Helpers" />
		</form>
		<form action="<?php echo $form_url; ?>" method="post">
			<input type="hidden" name="views" value="1" />
			<input type="submit" value="Views" />
		</form>
		<form action="<?php echo $form_url; ?>" method="post">
			<input type="hidden" name="bugs" value="1" />
			<input type="submit" value="Bugs" />
		</form>
		<form action="<?php echo $form_url; ?>" method="post">
			<select name="test">
				<optgroup label="Add Ons">
					<?php foreach ($addons as $value) { ?>
						<option value="addons/<?php echo $value ?>/<?php echo $value ?>_unit_test.php"><?php echo $value; ?></option>
					<?php } ?>
				</optgroup>
				<optgroup label="Libraries">
					<?php foreach ($libraries as $value) { ?>
						<option value="libraries/<?php echo $value ?>"><?php echo $value; ?></option>
					<?php } ?>
				</optgroup>
				<optgroup label="Controllers">
					<?php foreach ($controllers as $value) { ?>
						<option value="controllers/<?php echo $value ?>"><?php echo $value; ?></option>
					<?php } ?>
				</optgroup>
				<optgroup label="Models">
					<?php foreach ($models as $value) { ?>
						<option value="models/<?php echo $value ?>"><?php echo $value; ?></option>
					<?php } ?>
				</optgroup>
				<optgroup label="Helpers">
					<?php foreach ($helpers as $value) { ?>
						<option value="helpers/<?php echo $value ?>"><?php echo $value; ?></option>
					<?php } ?>
				</optgroup>
				<optgroup label="Views">
					<?php foreach ($views as $value) { ?>
						<option value="views/<?php echo $value ?>"><?php echo $value; ?></option>
					<?php } ?>
				</optgroup>
				<optgroup label="Bugs">
					<?php foreach ($bugs as $value) { ?>
						<option value="bugs/<?php echo $value ?>"><?php echo $value; ?></option>
					<?php } ?>
				</optgroup>
			</select>
			<input type="submit" value="Run" />
		</form>
	</div>
		
		
	<div id="report">
		<?php if (isset($run_tests)) $test->run(new MyReporter()); ?>
	</div>
		
</body>
</html>
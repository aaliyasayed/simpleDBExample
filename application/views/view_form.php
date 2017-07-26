<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Form!</h1>
	<?php 

	$operation = '';

	if( isset($users[0]['id'])) {
  		$operation = '/id/' . $users[0]['id'];
  	}

	?>
	<div id="body">
		<form method="post" class="form-horizontal" action="<?php echo base_url('insert' . $operation); ?>" enctype="multipart/form-data">
			<fieldset>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="textinput">Name</label>  
			  <div class="col-md-6">
			  <input id="textinput" name="name" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo (isset($users[0]['name']) ? $users[0]['name'] : '') ?>">
			    
			  </div>
			</div>

			<!-- Multiple Radios -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="radios">Gender</label>
			  <div class="col-md-4">
			  <div class="radio">
			  <?php
			  	$check1 = ''; $check2 = '';

			  	if( isset($users[0]['gender'])) {
			  		if($users[0]['gender'] === 'Male'){
			  			$check1 = 'checked="checked"';
			  		}
			  	}
			  	if( isset($users[0]['gender'])) {
			  		if($users[0]['gender'] === 'Female'){
			  			$check2 = 'checked="checked"';
			  		}
			  	}
			  ?>
			    <label for="radios-0">
			      <input type="radio" name="gender" id="radios-0" value="Male" <?php echo $check1; ?>>
			      Male
			    </label>
				</div>
			  <div class="radio">
			    <label for="radios-1">
			      <input type="radio" name="gender" id="radios-1" value="Female" <?php echo $check2; ?> >
			      Female
			    </label>
				</div>
			  </div>
			</div>

			<!-- Multiple Checkboxes -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="checkboxes">Graduation</label>
			  <div class="col-md-4">
			  <div class="checkbox">
			  <?php
			  	$check1 = ''; $check2 = '';

			  	if( isset($users[0]['graduation'])) {
			  		if($users[0]['graduation'] === 'UG'){
			  			$check1 = 'checked="checked"';
			  		}
			  	}
			  	if( isset($users[0]['graduation'])) {
			  		if($users[0]['graduation'] === 'PG'){
			  			$check2 = 'checked="checked"';
			  		}
			  	}
			  ?>
			    <label for="checkboxes-0">
			      <input type="checkbox" name="graduation" id="checkboxes-0" value="UG" <?php echo $check1; ?>>
			      UG
			    </label>
				</div>
			  <div class="checkbox">
			    <label for="checkboxes-1">
			      <input type="checkbox" name="graduation" id="checkboxes-1" value="PG" <?php echo $check2; ?>>
			      PG
			    </label>
				</div>
			  </div>
			</div>

			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="selectbasic">Country</label>
			  <div class="col-md-6">
			  <?php
			  	$select1 = ''; $select2 = ''; $select3 = ''; $select4 = '';

			  	if( isset($users[0]['country'])) {
			  		if($users[0]['country'] === 'India'){
			  			$select1 = 'selected="selected"';
			  		}
			  	}
			  	if( isset($users[0]['country'])) {
			  		if($users[0]['country'] === 'KSA'){
			  			$select2 = 'selected="selected"';
			  		}
			  	}
			  	if( isset($users[0]['country'])) {
			  		if($users[0]['country'] === 'Dubai'){
			  			$select3 = 'selected="selected"';
			  		}
			  	}
			  	if( isset($users[0]['country'])) {
			  		if($users[0]['country'] === 'Australia'){
			  			$select4 = 'selected="selected"';
			  		}
			  	}

			  ?>
			    <select id="country" name="country" class="form-control">
			      <option value="India" <?php echo $select1; ?>>India</option>
			      <option value="KSA" <?php echo $select2; ?>>KSA</option>
			      <option value="Dubai" <?php echo $select3; ?>>Dubai</option>
			      <option value="Australia" <?php echo $select4; ?>>Australia</option>
			    </select>
			  </div>
			</div>

			<!-- File Button --> 
			<div class="form-group">
			  <label class="col-md-4 control-label" for="filebutton">Resume</label>
			  <div class="col-md-4">
			    <input id="resume" name="resume" class="input-file" type="file">
			    <?php echo (isset($users[0]['resume']) ? $users[0]['resume'] : '') ?>
			  </div>
			</div>

			<!-- Button -->
			<div class="form-group">
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
			  </div>
			</div>

			</fieldset>
		</form>
	</div>

	<p class="footer"><a href="<?php echo base_url('table'); ?>">View Table Data</a></p>
</div>

</body>
</html>
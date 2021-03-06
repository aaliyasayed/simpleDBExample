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
	<h1>Table</h1>

	<div id="body">
		<table class="table">
			<thead>
				<tr>
					<th> ID </th>
					<th> Name </th>
					<th> Gender </th>
					<th> Graduation </th>
					<th> Country </th>
					<th> Resume Download </th>
					<th> Operations </th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($records as $key => $record): ?>
				<tr>
					<td> <?php echo $record['id'] ?> </td>
					<td> <?php echo $record['name'] ?> </td>
					<td> <?php echo $record['gender'] ?> </td>
					<td> <?php echo $record['graduation'] ?> </td>
					<td> <?php echo $record['country'] ?> </td>
					<td> <a href="<?php echo base_url('uploads/' . $record['resume']); ?>" target="_blank"> Resume </a> </td>
					<td> <a href="<?php echo base_url('/id/' . $record['id']); ?>" class="fa fa-pencil"></a> | <a href="<?php echo base_url('delete/' . $record['id']); ?>" class="fa fa-close"></a> </td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<p class="footer"><a href="<?php echo base_url('/'); ?>">View Form</a></p>
</div>

</body>
</html>
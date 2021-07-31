<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product Add Form</title>
</head>
<body>
	<h2>Add new</h2>
	<form method="post" action="<?php echo site_url('products/add') ?>">
		<table>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Description</td>
				<td>:</td>
				<td><input type="text" name="description"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td>:</td>
				<td><input type="number" name="price"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
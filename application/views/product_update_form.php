<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product Add Form</title>
</head>
<body>
	<h2>Update</h2>
	<form method="post" action="<?php echo site_url('products/update') ?>">
		<table>
			<tr>
				<td>ID</td>
				<td>:</td>
				<td><input type="text" name="id" value="<?php echo $product->id ?>" readonly="readonly"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="name" value="<?php echo $product->name ?>"></td>
			</tr>
			<tr>
				<td>Description</td>
				<td>:</td>
				<td><input type="text" name="description" value="<?php echo $product->description ?>"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td>:</td>
				<td><input type="number" name="price" value="<?php echo $product->price ?>"></td>
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
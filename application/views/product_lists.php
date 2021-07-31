<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product Lists</title>
</head>
<body>
	<center>
		<h2>Product Lists</h2>
		<table width="800" border="1">
			<thead>
				<th>#</th>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php $no = 1; 
				foreach($products as $product): ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $product->name ?></td>
						<td><?php echo $product->description ?></td>
						<td align="right"><?php echo number_format($product->price, 0, '.', ',') ?></td>
						<td align="center">
							<a href="<?php echo site_url('products/update/' . $product->id) ?>">Update</a> | 
							<a href="<?php echo site_url('products/remove/' . $product->id) ?>">Remove</a>
						</td>
					</tr>
				<?php endforeach; ?>
				<tr>
					<td colspan="5" align="center">
						<a href="<?php echo site_url('products/add') ?>">Add New</a>
					</td>
				</tr>
			</tbody>
		</table>
	</center>
</body>
</html>
<?php  
$table = array("joe","maurio","maureno","Line","du-tchop","Znx","Naly","Lord","Fly","Perle");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tableau</title>
	<meta charset="utf-8">
	<style >
		body{padding: 0;margin: 0;}
		table{margin: auto 10em;}
	</style>
</head>
<body>
	<table border="1">
		<th>Prénom 1</th>
		<th>Prénom 1</th>
		<th>Prénom 1</th>
		<th>Prénom 1</th>
		<th>Prénom 1</th>
		<th>Prénom 1</th>
		<th>Prénom 1</th>
		<th>Prénom 1</th>
		<th>Prénom 1</th>
		<th>Prénom 1</th>
		<tr>
			<td><?php echo $table[0]; ?></td>
			<td><?php echo $table[1]; ?></td>
			<td><?php echo $table[2]; ?></td>
			<td><?php echo $table[3]; ?></td>
			<td><?php echo $table[4]; ?></td>
			<td><?php echo $table[5]; ?></td>
			<td><?php echo $table[6]; ?></td>
			<td><?php echo $table[7]; ?></td>
			<td><?php echo $table[8]; ?></td>
			<td><?php echo $table[9]; ?></td>
		</tr>
	</table>
	<?php var_dump($table);?>
</body>
</html>
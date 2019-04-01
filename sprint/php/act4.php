<?php  
$table = array(
	$joe = array(
		'nom' =>"Joe",
		'prenom' =>"Maurio",
		'age' =>20,
		'profil' =>"https://joemaurio.github.io/ecole241/profil/" ),
	$line = array(
		'nom' =>"Veika",
		'prenom' =>"Line",
		'age' =>22,
		'profil' =>"https://lineveika.github.io/ecole241/profil/" ),
	$din = array(
		'nom' =>"Kelby",
		'prenom' =>"Din",'age' =>23,
		'profil' =>"https://dinkelby7.github.io/ecole241/profil/" ),
	$du_tchop = array(
		'nom' =>"Falana",
		'prenom' =>"du_tchop",
		'age' =>24,
		'profil' =>"https://falanafelicia.github.io/ecole241/profil/index.html" ),
	$sisso = array(
		'nom' =>"Sisso",
		'prenom' =>"Albert",
		'age' =>25,
		'profil' =>"https://albert241.github.io/ecole241/profil/" ),
	$laurion = array(
		'nom' =>"Dareich",
		'prenom' =>"laurion",
		'age' =>26,'profil' =>"https://github.com/" ),
	$axel = array(
		'nom' =>"Axel",
		'prenom' =>"Rick",
		'age' =>37,
		'profil' =>"https://mlraleader.github.io/ecole241/profil/index.html" ),
	$wilson = array(
		'nom' =>"Boumys",
		'prenom' =>"wilson",
		'age' =>28,
		'profil' =>"https://jboumys.github.io/ecole241/profil/" ),
	$casta = array(
		'nom' =>"Grace",
		'prenom' =>"Lacasta",
		'age' =>27,
		'profil' =>"https://lacastafiore.github.io/ecole241/profil/" ),
	$kevinn = array(
		'nom' =>"Mbela",
		'prenom' =>"Kevinn",
		'age' =>30,
		'profil' =>"https://mbela-kevinn98.github.io/ecole241/profil/" ),
	$ismael = array(
		'nom' =>"NGOUA",
		'prenom' =>"ismael",
		'age' =>24,
		'profil' =>"https://ismael8.github.io/ecole241/profil/" )
);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tableau</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Mon tableau bleu">
<link rel="stylesheet" type="text/css" href="http://bongservices.alwaysdata.net/styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://bongservices.alwaysdata.net/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="http://bongservices.alwaysdata.net/styles/responsive.css">
<style >
		*{box-sizing: border-box;}
		body{padding: 0;margin: 2em;text-align: center;}
		table{margin: auto;width: 7em;background-color: lightblue;border:1px solid blue;}
		h1{text-align: center;}
		h4{color:blue;}
		th{font-weight: bold !important;color: blue;padding: 1em}
		td{padding: 2em;}
		a{color: blue!important;font-weight: bold !important;}
		a:hover{color: red!important;font-weight: bold !important;}
		.colorblue{color: blue!important;font-weight: bold !important;}
</style>
</head>
<body>
	<h1>Mon Tableau Bleu</h1>
	<table border="1">
		<thead>
			<th>#</th>
			<th>Prénom</th>
			<th>Nom</th>
			<th>Age</th>
			<th>Profil</th>
		</thead>
		<tbody>
			<?php for ($i=0;$i<11;$i++) :?>
			<tr>
				 <td><?= $i+1 ?></td>
				 <td><?= $table[$i]['prenom'] ?></td>
				 <td><?= $table[$i]['nom'] ?></td>
				 <td><?= $table[$i]['age'] ?></td>
				 <td><a href="<?= $table[$i]['profil']  ?>" target="_blank"> Consulter</a></td>
			</tr>
			 <?php endfor; ?>
		</tbody>

	</table>
</body>
</html>
<?php  
$table = array(
	$joe = array('nom' =>"Joe",'prenom' =>"Maurio",'age' =>20,'profil' =>"<a href=\"https://github.com/\">https://github.com/</a>" ),
	$line = array('nom' =>"Veika",'prenom' =>"Line",'age' =>22,'profil' =>"<a href=\"https://github.com/\">https://github.com/</a>" ),
	$din = array('nom' =>"Kelby",'prenom' =>"Din",'age' =>23,'profil' =>"<a href=\"https://github.com/\">https://github.com/</a>" ),
	$du_tchop = array('nom' =>"Falana",'prenom' =>"du_tchop",'age' =>24,'profil' =>"<a href=\"https://github.com/\">https://github.com/</a>" ),
	$sisso = array('nom' =>"Sisso",'prenom' =>"Albert",'age' =>25,'profil' =>"<a href=\"https://github.com/\">https://github.com/</a>" ),
	$laurion = array('nom' =>"Dareich",'prenom' =>"laurion",'age' =>26,'profil' =>"<a href=\"https://github.com/\">https://github.com/</a>" ),
	$axel = array('nom' =>"Axel",'prenom' =>"Rick",'age' =>37,'profil' =>"<a href=\"https://github.com/\">https://github.com/</a>" ),
	$wilson = array('nom' =>"Boumys",'prenom' =>"wilson",'age' =>28,'profil' =>"<a href=\"https://github.com/\">https://github.com/</a>" ),
	$casta = array('nom' =>"Grace",'prenom' =>"Lacasta",'age' =>27,'profil' =>"<a href=\"https://github.com/\">https://github.com/</a>" ),
	$kevinn = array('nom' =>"Mbela",'prenom' =>"Kevinn",'age' =>30,'profil' =>"<a href=\"https://github.com/\">https://github.com/</a>" ),
	$ismael = array('nom' =>"NGOUA",'prenom' =>"ismael",'age' =>24,'profil' =>"<a href=\"https://github.com/\">https://github.com/</a>" )
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
		body{padding: 0;margin: 0;text-align: center;}
		table{margin: auto;width: 7em;background-color: lightblue;border:1px solid blue;}
		h1{text-align: center;}
		h4{color:blue;}
		th{font-weight: bold !important;color: blue;}
		a{color: #7c7c7c!important;	}
		a:hover{color: blue!important;font-weight: bold !important;}
		.colorblue{color: blue!important;font-weight: bold !important;}
</style>
</head>
<body>
	<h1>Mon Tableau Bleu</h1>
	<?php 
	echo "<p>Il y a ".sizeof($table)." apprenants dans mon tableau</p>";
	echo "<table border=1>";
	echo "<th>";echo "..."; echo "</th>";//ligne1-col1
	for($i=1;$i<=11;$i++){
		echo "<th>";echo "apprenant ".$i."<br>";echo "</th>";//ligne1
	};
	echo "<tr>"; 
	echo "<td class=\"colorblue\">"; echo "Nom"; echo "</td>";
	for ($g=0; $g<11 ; $g++) { 
		echo "<td>"; echo $table[$g]['nom'];echo "</td>";//ligne2	
	}
	echo "</tr>";
	echo "<tr>"; 
	echo "<td class=\"colorblue\">"; echo "Prémom"; echo "</td>";
	for ($g=0; $g<11 ; $g++) { 
		echo "<td>"; echo $table[$g]['prenom'];echo "</td>";//ligne3	
	}
	 echo "</tr>";
	echo "<tr>"; 
	echo "<td class=\"colorblue\">"; echo "Age(ans)"; echo "</td>";
	for ($g=0; $g<11 ; $g++) { 
		echo "<td>"; echo $table[$g]['age'];echo "</td>";	//ligne4
	}
	 echo "</tr>";
	 echo "<tr>"; 
	echo "<td class=\"colorblue\">"; echo "Profil(Lien des portfolio)"; echo "</td>";
	for ($g=0; $g<11 ; $g++) { 
		echo "<td>"; echo $table[$g]['profil'];echo "</td>";	//ligne5
	}
	 echo "</tr>";
	echo "</table>";
	echo"<p>L'age de ".$table[3]['nom']." est:_" .$table[3]['age']." ans</p>";
	echo "<p>Mon age est de ".$joe['age']." ans</p>";
	 ?>
	 <h4>Un coup de var_dump</h4>
	 <pre><?php var_dump($table) ?></pre>
</body>
</html>
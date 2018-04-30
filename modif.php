<?php
require_once('header.php');
require_once('inc/manager-db.php');
$id=$_GET['id']

?>
<br>
	<form method="post" action="pays.php?update=<?php echo $id; ?>">
		
		Nom: <input type="text" name="nom"><br>
		Population: <input type="text" name="population"><br>
		Gouvernement: <input type="text" name="gouv"><br>
		Président et/ou Roi <input type="text" name="chef"><br>
		Espérance de vie: <input type="text" name="esperance"><br>
		GNP: <input type="text" name="gnp"><br>
		GNP_OLD: <input type="text" name="oldGnp"><br>


		<input type="submit" name="Valide">
	</form>
	
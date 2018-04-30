<?php
require_once('header.php');
require_once('inc/manager-db.php');


if(isset($_GET['Name'])){
	$name=$_GET['Name'];
	$country=infoPays($name);
	$id=getID($name);
	$pays=villePays($id);
	$langue=languePays($id);
	$drapeau=getDrapeau($id);

}

if(isset($_GET['add'])){
	$id=$_GET['add'];
	$ville=$_POST['ville'];
	$population=$_POST['population'];
	$region=$_POST['region'];
	var_dump($region);
	$addVille=addVilleCapital($id,$ville,$population,$region);
	$pays=getName($id);
	header('location: pays.php?Name='.$pays);
}

if(isset($_GET['update'])){
	$nom=$_POST['nom'];
	$population=$_POST['population'];
	$gouv=$_POST['gouv'];
	$chef=$_POST['chef'];
	$esperance=$_POST['esperance'];
	$gnp=$_POST['gnp'];
	$gnpOld=$_POST['oldGnp'];
	$id=$_GET['update'];
	updateCountry($nom,$population,$gouv,$chef,$esperance,$gnp,$gnpOld,$id);
	$pays=getName($id);
	header('location: pays.php?Name='.$pays);
}





?>
														<br><br>




														<!-- Infos Pays -->

<div name="global">

<?php foreach($country as $value):?>

	<h2 style="text-align: center; margin-bottom: 3%"><?php echo $value->Name ?><img src="drapeau/<?php echo ($drapeau)?>.png"></h2>

		<table border="2px" class="table table-striped"  style="width:300px; height:100px; float:left;margin-left: 2%;">

	 		 <th>Pays <a href="modif.php?id=<?php echo $value->id; ?>" name="Modifier" role="button" class="btn btn-md btn-primary">Update </a></th>


	        	<tr>
	  		  		<?php $capital=getCapital($value->Capital); ?>

	  		  <td>		ID: 							<?php echo ($value->id); ?><hr>
						Nom:  							<?php echo ($value->Name); ?><hr>
						Continent: 						<?php echo ($value->Continent);?><hr>
						Région:   						<?php echo ($value->Region);?><hr>
						Surface:  						<?php echo ($value->SurfaceArea); ?><hr>
						L'année de leurs indépendance: 	<?php echo($value->IndepYear); ?><hr>
						Population:   					<?php echo($value->Population); ?><hr>
						Durée de vie: 					<?php echo($value->LifeExpectancy); ?><hr>
						GNP:	      					<?php echo($value->GNP); ?><hr>
						Ancien GNP:	  					<?php echo($value->GNPOld); ?><hr>
						Nom local:	  					<?php echo($value->LocalName); ?><hr>
						Forme Gouvernement:	          	<?php echo($value->GovernmentForm); ?><hr>
						Président/Roi:	          		<?php echo($value->HeadOfState); ?><hr>
						Capital:	          			<?php echo($capital->Name); ?><hr>
						Code:	          				<?php echo($value->Code2);?>
	          </td>

	  		</tr>
<?php endforeach;?>
	</table>

	<!-- Ville du pays et la population -->


	<div name="Ville">

	<table border="2px" class="table table-striped"  style="width:300px; height:100px; float:left; margin-left: 16%;">

		<th>Ville</th>
		<th>Département</th>
		<th>Population</th>
	   	<a href="add.php?id=<?php echo ($id) ?>" class="btn btn-md btn-primary" role="button">Ajouter</a>
	   		<?php foreach ($pays as $key=>$value):?>
	   		<tr>
		   		<td><?php echo ($value->Name); ?></td>
					<td><?php echo($value->District); ?> </td>
					<td><?php echo($value->Population); ?></td>
	   		</tr>

	   	<?php endforeach; ?>
	</table>

	</div>

	<!-- Langue parlée -->

	<table border="2px" class="table table-striped" style="float: right;width:300px; height:100px;margin-right: 2%;">

		<th>Langue parlée</th>
		<th>Pourcentage</th>
		<?php foreach($langue as $key =>$value): ?>
			<tr>
			<?php $langue=language($value->idLanguage); ?>
			<td><?php echo ($langue); ?></td>
			<td><?php echo ($value->Percentage) ?></td>
			</tr>

		<?php endforeach; ?>
	</table>


</div>

<?php
require_once 'header.php';
require_once 'inc/manager-db.php';

if(isset($_GET['continent'])){
	$continent=$_GET['continent'];
	$pays=getCountries($continent);
}

?>
<br><br>
<table border="2px" class="table">

  <th> Pays </th>
  <th> Population </th>
  <th> Capitale </th>

    <?php foreach($pays as $key=>$value):?>

          <?php $capital=capital($value->Capital); ?>

        <tr>
          <td><a href="pays.php?Name=<?php echo $value->Name?>"><?php echo ($value->Name); ?></a> </td>
          <td> <?php echo($value->Population); ?> </td>

				<?php if($capital->Capital== null):?>
	      <td><?php echo "Pas de capital"?></td>
	      <?php else: ?>
	      <td><?php echo ($capital->Capital); ?> </td>
	      <?php endif;?>
    	</tr>

    <?php endforeach;?>


  </table>

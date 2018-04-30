<?php
require_once('header.php');
require_once('inc/manager-db.php');
$id=$_GET['id'];
$region=getDistrict($id);

?>
<br>
<form method="post" action="pays.php?add=<?php echo $id ?>">
Ville: <input type="text" name="ville"><br>
Région:

      <select name="region">
        <?php foreach ($region as $value): ?>
          <option value=<?php echo($value->region);?>> <?php echo ($value->region);?> </option>
        <?php endforeach; ?>
      </select>


Population: <input type="text" name="population"><br><br>

<input type="submit" class="btn btn-lg btn-primary" name="ajouter">
</form>

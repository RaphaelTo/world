<?php
require_once 'connect-db.php';

/** Obtenir la liste de tous les pays référencés d'un continent donné
    ou de la planète entière
*/
function getCountries($continent = null) {
   // pour utilisater la variable globale dans la fonction
   global $pdo;
   if (!$continent) :
     $query = 'SELECT * FROM Country;';
     return $pdo->query($query)->fetchAll();
   else :
     $query = 'SELECT * FROM Country WHERE Continent = :continent;';
     $prep = $pdo->prepare($query);
     $prep->bindValue(':continent', $continent, PDO::PARAM_STR);
     $prep->execute();
     //var_dump($prep);
     //var_dump($continent);
     return $prep->fetchAll();
   endif;
}
/**

*/
function getCapital($id){
  global $pdo;
  $query='SELECT `Name` FROM `City` WHERE id=:id';

  $prep=$pdo->prepare($query);
  $prep->bindValue(':id',$id, PDO::PARAM_STR);
  $prep->execute();
  //var_dump($prep);
  //var_dump($id);
  return $prep->fetch();


}


 function nbVille($id){
  global $pdo;

  $query='SELECT count(*) as nbCountry FROM City WHERE idCountry=:id';
  $prep=$pdo->prepare($query);
  $prep->bindValue(':id',$id);
  $prep->execute();
  return $prep->fetch()->nbCountry;
 }

function villePays($id){
global $pdo;

$query ='SELECT * FROM City WHERE idCountry=:id';
$prep=$pdo->prepare($query);
  $prep->bindValue(':id',$id);
  $prep->execute();
  return $prep->fetchAll();

}

function getID($name){
  global $pdo;
   $query="SELECT id as idpays FROM Country WHERE Name=:name";
   $prep=$pdo->prepare($query);
   $prep->bindValue(':name', $name, PDO::PARAM_STR);
   $prep->execute();
   //var_dump($prep);
   //var_dump($continent);
   return $prep->fetch()->idpays;
}

function infoPays($nom){
  global $pdo;

$query= 'SELECT * FROM Country WHERE Name=:nom';
     $prep=$pdo->prepare($query);
     $prep->bindValue(':nom', $nom, PDO::PARAM_STR);
     $prep->execute();
     //var_dump($prep);
     //var_dump($continent);
     return $prep->fetchAll();
}

function languePays($id){
 global $pdo;

  $query='SELECT * FROM CountryLanguage WHERE idCountry=:id';
  $prep=$pdo->prepare($query);
  $prep->bindValue(':id',$id);
  $prep->execute();
  return $prep;
}
 function language($id){
  global $pdo;

  $query='SELECT `Name` as langue FROM `world`.`Language` WHERE `id`=:id';
  $prep=$pdo->prepare($query);
  $prep->bindValue(':id',$id);
  $prep->execute();
  return $prep->fetch()->langue;
 }

function addVilleCapital($id,$ville,$population,$region){
global $pdo;

$query='INSERT INTO City (`idCountry`,`Name`,`Population`,`District`) values (:id,:ville,:population,:region)';
$prep=$pdo->prepare($query);
$prep->bindValue(':id',$id,PDO::PARAM_INT);
$prep->bindValue(':ville',$ville,PDO::PARAM_STR);
$prep->bindValue(':population',$population,PDO::PARAM_INT);
$prep->bindValue(':region',$region,PDO::PARAM_STR);
$prep->execute();
return $prep->fetchAll();

}

function updateCountry($nom,$population,$gouvernement,$chef,$esperance,$gnp,$gnpOld,$id){
  global $pdo;

  $query='UPDATE Country set Name= :nom, Population= :population, GovernmentForm= :gouv, HeadOfState= :chef, LifeExpectancy= :esperance, GNP= :gnp, GNPOld= :gnpOld WHERE id= :id ';
  $prep=$pdo->prepare($query);
  $prep->bindValue(':nom',$nom,PDO::PARAM_STR);
  $prep->bindValue(':population',$population,PDO::PARAM_INT);
  $prep->bindValue(':gouv',$gouvernement,PDO::PARAM_STR);
  $prep->bindValue(':chef',$chef,PDO::PARAM_STR);
  $prep->bindValue(':esperance',$esperance,PDO::PARAM_INT);
  $prep->bindValue(':gnp',$gnp,PDO::PARAM_INT);
  $prep->bindValue(':gnpOld',$gnpOld,PDO::PARAM_INT);
  $prep->bindValue(':id',$id,PDO::PARAM_INT);
  $prep->execute();
  return $prep->fetchAll();
  

}

function getDrapeau($id){
global $pdo;
  $query= 'SELECT lower(`Code2`) as drapeau FROM Country WHERE id=:id';
     $prep=$pdo->prepare($query);
     $prep->bindValue(':id', $id, PDO::PARAM_STR);
     $prep->execute();
     //var_dump($prep);
     //var_dump($continent);
     return $prep->fetch()->drapeau;

}



function getName($id){
  global $pdo;
    $query='SELECT Name as pays FROM Country WHERE id=:id';
      $prep=$pdo->prepare($query);
      $prep->bindValue(':id',$id,PDO::PARAM_INT);
      $prep->execute();
      return $prep->fetch()->pays;

}

function getDistrict($id){
  global $pdo;
    $query='SELECT DISTINCT District as region FROM `City`WHERE idCountry=:id';
    $prep=$pdo->prepare($query);
    $prep->bindValue(':id',$id,PDO::PARAM_INT);
    $prep->execute();
    //var_dump($prep);
    //var_dump($id);

    return $prep->fetchAll();
}
function getIdFromContinent($continent){
  global $pdo;
    $query='SELECT capital FROM Country WHERE Continent=:continent';
    $prep=$pdo->prepare($query);
    $prep->bindValue(':continent',$continent,PDO::PARAM_INT);
    $prep->execute();

    return $prep->fetchAll();
}

function getAuthentification($login,$pass){
    global $pdo;
    $query = "SELECT * FROM User where login=:login and password=:pass";
    $prep = $pdo->prepare($query);
    $prep->bindValue(':login', $login);
    $prep->bindValue(':pass', $pass);
    $prep->execute();
    // on vérifie que la requête ne retourne qu'une seule ligne
    if($prep->rowCount() == 1){
      $result = $prep->fetch(PDO::FETCH_ASSOC); 
      return $result;
    }
    else
      return false;
    }

?>

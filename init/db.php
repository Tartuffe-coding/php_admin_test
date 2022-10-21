<?php

// connexion a la DB

try 
{
    $db = new PDO ('mysql:host=localhost;dbname=controle', 'root', ''); 

} 
catch (PDOException $e) 
{
    print "Erreur : " . $e->getMessage() . "<br/>";
    die ;
}



// par défaut, les SELECT FROM  -> fetch et fetchAll recupere des tableaux associatifs
// possible de recup des objets en changeant PDO::FETCH_ASSOC par PDO::FETCH_OBJ
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);



if (isset($_GET['chiffre'])){
    $wantedId = $_GET['chiffre'];
    $statement = $db->prepare("SELECT * FROM users WHERE id=$wantedId ORDER BY id DESC");
    
}else {
    $statement = $db->prepare("SELECT * FROM users ORDER BY id DESC");
}

//$statement = $db->prepare("SELECT * FROM users ORDER BY id DESC");
$statement->execute();
$users = $statement->fetchAll();

?>






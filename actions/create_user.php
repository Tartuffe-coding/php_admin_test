<?php 

require_once __DIR__ . '/../init/db.php';

public function addUser($myTable, $_passwordbdd, $_username)
{
        // $mdp_hash = password_hash($_passwordbdd, PASSWORD_DEFAULT);
        $sql = 'INSERT INTO ' . $myTable . ' (email, pasword, pseudo, date_inscription) VALUES ("' . $_email . '", "' . $mdp_hash . '", "' . $_pseudo . '", NOW())';
        $statement = $this->bdd->prepare($sql);
        $statement->execute();
}

// verifier les champs recu avec $_POST
// Creer en BDD

?>

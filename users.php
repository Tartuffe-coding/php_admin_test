<?php

require_once __DIR__ . '/init/db.php';

// if pour la story 4
if (isset($_GET['username'])) {
    $search_username = $_GET['username'];
}

// Story 0: request to find all username
/*
$stmt = ... 
$stmt->execute();
$users = $stmt->fetchAll();
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
    <link rel="stylesheet" href="users.css">
</head>
<body>
    <h1>USERS</h1>

    



    <!-- Input Search -->
    <div>
    <form action="" method="GET">
        <input type="number" name="chiffre" placeholder="Index du User">
        <button type="submit">rechercher</button>
    </form>
    </div>

    <!-- Table des Utilisateurs -->
    <div>
        <section id="score_table_section">
        <table class="score_table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>password</th>
                    <th>username</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th>action</th>
                </tr>
            </thead>

            <tbody>
                <?php  foreach ($users as $user): ?>
                    <tr>
                        <th> <?= $user["id"] ?> </th>
                        <th> <?= $user["password"]?> </th>
                        <th> <?= $user["username"] ?> </th>
                        <th> <?= $user["created_at"]?> </th>
                        <th> <?= $user["updated_at"]?> </th>
                        <th> <a href="./update.php"> update </a></th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        </section>
    </div>


</body>
</html>

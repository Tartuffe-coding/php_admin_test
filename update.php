<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>update</h1>

    <form action="" method="POST">
            <div class="user-box">
                <input type="text" placeholder="username" name="username">
            </div>
            <div class="user-box">
                <input type="password" placeholder="Mot de passe" name="passewordbdd">
            </div>
            <div class="user-box">
                <input type="password" placeholder="Confirmer le mot de passe" name="pwdb">
            </div>
            <?php
            $db->addUser('users', $_POST['passewordbdd'], $_POST['username']);
            ?>
            <input type="submit" id="créer-le-compte" value="Finalisez l'inscription" name='submit'>
            <button type="submit">go</button>
        </form>

</body>
</html>
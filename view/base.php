<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="main">
        <div class="iphoneDiv">
            <h1>Contacts</h1>
            <input class="searchbar" id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="Recherche">
            <form method="POST" class="form1">
                <?php
                foreach ($tab as $key){
                echo  $key['nom'] . ' ' . $key['prenom'] . '
                <button name="updateButton" value="' . $key['id'] . '">Modifier</button>
                <button name="deleteInput" value="' .$key['id']. '">Supprimer</button>  
                <br>';
                }
                ?>
                <br>
                <button name="addContactButton"><a href="index.php?page=addContact">Créer un nouveau contact</a></button>
            </form>
        </div>
        <img src="images/iphone.png" class="iphoneImg" alt="">
    </section>
</body>
</html>
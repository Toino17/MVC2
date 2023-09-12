<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
</head>
<body>
    <section class="main">
        <div class="iphoneImgDiv">
            <img src="images/pngegg.png" class="iphoneImg" alt="">
            <div class="iphoneDiv">
            <h1>Contacts</h1>
            <form method="POST" class="form1">
                <?php
                foreach ($tab as $key){
                echo '<div class="contactDiv">'. $key['nom'] . ' ' . $key['prenom'] . '
                <button name="updateButton" value="' . $key['id'] . '"><img class="modifierPng" src="images/modifier.png" alt=""></button>
                <button name="deleteInput" value="' .$key['id']. '"><img class="modifierPng" src="images/croix.png" alt=""></button>  
                <br></div>';
                }
                ?>
                <br>
                <button name="addContactButton" class="addContactButton"><a href="index.php?page=addContact"><img class="modifierPng" src="images/bouton-dajout.png" alt=""></a></button>
            </form>
        </div>
        </div>
        
        
    </section>
</body>
</html>
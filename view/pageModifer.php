
<form method="POST" class="form1">
<?php
    foreach ($tab as $key){
        echo '<input type="text" name="nameUpdate" value="' .$key['nom']. '">
        <input type="text" name="name2Update" value="' .$key['prenom']. '">
        <input type="text" name="telUpdate" value="' .$key['tel']. '">
        <input type="text" name="mailUpdate" value="' .$key['mail']. '">
        <button name="updateButton2" value="' . $key['id'] . '">Modifier</button>
        <br>';
    }
?>
</form>
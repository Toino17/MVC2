<?php

require_once 'model/ContactModel.php';;

class Modifier {

    private $contactModel;

    public function __construct()
    {
        $this->contactModel = new ContactModel();
    }

    public function contact($id){
        $tab = $this->contactModel->getContactWithGet($id);
        include 'view/pageModifier.php';
    }
    public function updateInfo($id, $name, $name2, $tel, $mail){
        $this->contactModel->updateContact($id, $name, $name2, $tel, $mail);
    }

}

$modifier = new Modifier;

if (isset($_POST['updateButton2'])){
    $id=$_POST['updateButton2'];
    $name=$_POST['nameUpdate'];
    $name2=$_POST['name2Update'];
    $tel=$_POST['telUpdate'];
    $mail=$_POST['mailUpdate'];
    $modifier->updateInfo($id, $name, $name2, $tel, $mail);
}
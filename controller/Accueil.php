<?php

require_once 'model/ContactModel.php';;

class Accueil {

    private $contactModel;

    public function __construct()
    {
        $this->contactModel = new ContactModel();
    }

    public function index(){
        $tab = $this->contactModel->getAllContacts();
        include 'view/base.php';
    }

    public function deleteContact1($id){
        $this->contactModel->deleteContact($id);
        header("Refresh: 0");
    }

}


$Accueil = new Accueil();



if (isset($_POST['updateButton'])){
    $id=$_POST['updateButton'];
    header("Location: modifier/contact/$id");
}


if (isset($_POST['deleteInput'])){
    $id=$_POST['deleteInput'];
    $Accueil->deleteContact1($id);
    header("Refresh: 0");
}






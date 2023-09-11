<?php

require_once 'model/ContactModel.php';;

class Controller {

    private $contactModel;

    public function __construct()
    {
        $this->contactModel = new ContactModel();
    }

    public function index(){
        $tab = $this->contactModel->getAllContacts();
        include 'view/base.php';
    }

    public function pageModifer(){
        $tab = $this->contactModel->getContactWithGet($_GET['contact']);
        include 'view/pageModifer.php';
    }

    public function updateInfo($id, $name, $name2, $tel, $mail){
        $this->contactModel->updateContact($id, $name, $name2, $tel, $mail);
    }

    public function deleteContact1($id){
        $this->contactModel->deleteContact($id);
        header("Refresh: 0");
    }

    public function ajouterContact($name, $name2, $tel, $mail){
        $this->contactModel->insertContact($name, $name2, $tel, $mail);
    }
    
}


$controller = new Controller();

if (isset($_GET['page'], $_GET['contact']) && $_GET['page']=='modifier'){
    $controller->pageModifer();
}
elseif (isset($_GET['page']) && $_GET['page']=='addContact') {
    include 'view/pageAjouter.php';
}
else {
    $controller->index();
}

if (isset($_POST['updateButton'])){
    $id=$_POST['updateButton'];
    header("Location: index.php?page=modifier&contact=$id");
}

if (isset($_POST['updateButton2'])){
    $id=$_POST['updateButton2'];
    $name=$_POST['nameUpdate'];
    $name2=$_POST['name2Update'];
    $tel=$_POST['telUpdate'];
    $mail=$_POST['mailUpdate'];
    $controller->updateInfo($id, $name, $name2, $tel, $mail);
}

if (isset($_POST['deleteInput'])){
    $id=$_POST['deleteInput'];
    $controller->deleteContact1($id);
    header("Refresh: 0");
}

if (isset($_POST['addContactButton'])){
    header("Location: index.php?page=addContact");
}

if (isset($_POST['submitInsert'])){
    $name=$_POST['insertNameInput'];
    $name2=$_POST['insertName2Input'];
    $tel=$_POST['insertTelInput'];
    $mail=$_POST['insertMailInput'];
    $controller->ajouterContact($name, $name2, $tel, $mail);
    header("Refresh");
}



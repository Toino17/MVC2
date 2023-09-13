<?php

require_once 'model/ContactModel.php';;

class Ajouter {

    private $contactModel;

    public function __construct()
    {
        $this->contactModel = new ContactModel();
    }

    public function index(){
        include 'view/pageAjouter.php';
    }

    public function ajouterContact($name, $name2, $tel, $mail){
        
        $this->contactModel->insertContact($name, $name2, $tel, $mail);
        
    }

}

$ajouter = new Ajouter;

if (isset($_POST['submitInsert'])){
    $name=$_POST['insertNameInput'];
    $name2=$_POST['insertName2Input'];
    $tel=$_POST['insertTelInput'];
    $mail=$_POST['insertMailInput'];
    $ajouter->ajouterContact($name, $name2, $tel, $mail);
    header("Refresh");
}
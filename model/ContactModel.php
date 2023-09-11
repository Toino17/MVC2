<?php
require 'model/Model.php';

class ContactModel extends Model{
    public function getAllContacts(){

            $query = "SELECT * FROM contact";
            $stmt = $this->db->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getContactWithGet($id){

        $query = "SELECT * FROM contact WHERE `id`=$id";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateContact($id, $name, $name2, $tel, $mail){

        $query = "UPDATE `contact` SET `nom`='$name',`prenom`='$name2',`tel`='$tel',`mail`='$mail' WHERE `id`='$id';";
        $stmt = $this->db->query($query);
    }

    public function deleteContact($id){

        $query = "DELETE FROM `contact` WHERE `id`=$id;";
        $stmt = $this->db->query($query);
    }

    public function insertContact($name, $name2, $tel, $mail){

        $query = "INSERT INTO `contact`(`nom`, `prenom`, `tel`, `mail`) VALUES ('$name','$name2','$tel','$mail');";
        $stmt = $this->db->query($query);
    }


}

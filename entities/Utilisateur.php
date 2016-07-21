<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utilisateur
 *
 * @author Formateur BeWeb
 */
class Utilisateur {
    //put your code here
    private $ID,$email,$motDePasse,$pseudo;
    
    
    public function __construct() {
        
    }

    public function getID() {
        return $this->ID;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getMotDePasse() {
        return $this->motDePasse;
    }

    public function getPseudo() {
        return $this->pseudo;
    }

    public function setID($ID) {
        $this->ID = $ID;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setMotDePasse($motDePasse) {
        $this->motDePasse = $motDePasse;
    }

    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

    public function setProperties($email,$motDePasse,$pseudo){
        $this->email = $email;
        $this->motDePasse = $motDePasse;
        $this->pseudo = $pseudo;
    }
    public function getProperties(){
        return $this->email."<br>".$this->pseudo."<br>".$this->motDePasse;
    }
}

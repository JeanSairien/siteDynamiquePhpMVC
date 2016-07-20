<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$from = 'contact@domaine.fr';
$confirmation = '';


// Fonctions appelées !!!!!!!
/*
 * Confirmation de reception suite à l'envoi 
 * du formulaire de contact
 */
function confirmationContact($email,$sujet,$corps){
    //envoi mail a nous
    mail($from, $sujet, $corps, 'From: '.$email);
    //envoi mail a celui qui nous a contacté
    $confirmation = 'Nous avons bien reçu votre demande de contact';
    
    return mail($email, 'RE : '.$sujet, $confirmation, 'From: '.$from);
}
/*
 * emails envoyés pour la gestion de compte utilisateur
 * recup mdp / confirmCréaCompte / confirmSupprCompte ...
 */
function confirmationCreationCompte(){
    
}
/*
 * parle d'elle même ;)
 */
function newsLetter(){
    //envoyer un email a tous les utilisateurs enregistrés 
    //de notre application qui ont accepté de la recevoir
    
}
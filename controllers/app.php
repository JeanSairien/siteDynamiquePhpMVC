<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../models/viewFactory.php';
require '../models/daoFactory.php';
require '../models/gestionMail.php';
/*
 * Requete http GET - GET view
 */
$valeurFromUrl = filter_input(INPUT_GET, 'view');
/*
 * Requete http POST - POST news
 */
$newsTitre = filter_input(INPUT_POST, 'titre');
$newsAuteur = filter_input(INPUT_POST, 'auteur');
$newsSujet = filter_input(INPUT_POST, 'sujet');
$newsDate = filter_input(INPUT_POST, 'date');
/*
 * Requete http POST - POST contact
 */
$contactEmail = filter_input(INPUT_POST, 'email');
$contactSujet = filter_input(INPUT_POST, 'sujet');
$contactCorps = filter_input(INPUT_POST, 'corps');
/*
 * Ajout de news
 */
if(isset($newsAuteur)&&isset($newsDate)&&isset($newsSujet)&&isset($newsTitre)){
    insertNews($newsAuteur,$newsDate,$newsSujet,$newsTitre);
    getView('news');
}
/*
 * Formulaire de contact
 */
if(isset($contactEmail)&&isset($contactSujet)&&isset($contactCorps)){
    confirmationContact($contactEmail, $contactSujet, $contactCorps);
}
/*
 * Demande de vue !
 */
if(isset($valeurFromUrl)){
    getView($valeurFromUrl);       
}
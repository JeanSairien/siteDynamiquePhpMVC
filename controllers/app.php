<?php

//session_start();
//if(isset($_SESSION['user'])){
//    echo $_SESSION['user'];
//}else{
//    $_SESSION['user']='helo';
//}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../models/viewFactory.php';
require '../models/daoFactory.php';
require '../models/gestionMail.php';
require '../entities/News.php';
require '../entities/Utilisateur.php';


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
$newsDate = null;
/*
 * Requete http POST - POST contact
 */
$contactEmail = filter_input(INPUT_POST, 'email');
$contactSujet = filter_input(INPUT_POST, 'sujet');
$contactCorps = filter_input(INPUT_POST, 'corps');

/*
 * Demande de vue !
 */
if (isset($valeurFromUrl)) { //requetes get
    getView($valeurFromUrl);
} else { //requete post ou sans types de requetes
    //si on ajoute news
    if (isset($newsAuteur) && isset($newsSujet) && isset($newsTitre)) {
        $news = new News();
        $news->setAll($newsSujet, $newsAuteur, $newsTitre);
        insertNews($news);
        getView('news');
    //sinon si on contacte le webmaster
    } else if (isset($contactEmail) && isset($contactSujet) && isset($contactCorps)) {
        confirmationContact($contactEmail, $contactSujet, $contactCorps);   
        getView("default");
    //sinon
    }else{
        getView("default");
    }
    
}





/*
 * Ajout de news
 */
//if (isset($newsAuteur) && isset($newsSujet) && isset($newsTitre)) {
//    $news = new News();
//    $news->setAll($newsSujet, $newsAuteur, $newsTitre);
//    insertNews($news);
//    getView('news');
//}
/*
 * Formulaire de contact
 */
//if (isset($contactEmail) && isset($contactSujet) && isset($contactCorps)) {
//    confirmationContact($contactEmail, $contactSujet, $contactCorps);
//}




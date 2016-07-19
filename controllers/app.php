<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../models/factory.php';

$valeurFromUrl = filter_input(INPUT_GET, 'view');

$newsTitre = filter_input(INPUT_POST, 'titre');
$newsAuteur = filter_input(INPUT_POST, 'auteur');
$newsSujet = filter_input(INPUT_POST, 'sujet');
$newsDate = filter_input(INPUT_POST, 'date');


if(isset($newsAuteur)&&isset($newsDate)&&isset($newsSujet)&&isset($newsTitre)){
    insertNews($newsAuteur,$newsDate,$newsSujet,$newsTitre);
}

if(isset($valeurFromUrl)){
    getView($valeurFromUrl);
}

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function initDB(){
  $ADRESSE_DB = "localhost";
  $NOM_DB = "exercice";
  $USER = "root";
  $PASS = "";
  return new PDO('mysql:host='.$ADRESSE_DB.';dbname='.$NOM_DB.'', $USER, $PASS);

}

function showAll($DB_HANDLE){
  foreach($DB_HANDLE->query('SELECT * from news') as $row) {
		//pour chaque ligne on recupere les valeurs et on les affiche sur la sortie standard :
    echo "<h3>".$row["titre"]." - ".$row["date"]."</h3>";
		echo "<b3>".$row["sujet"]."</b3>";
		echo "<p>".$row["auteur"]."</p>";
  }
}
/*
 * Retourne une liste de news
 */
function getNews(){
    return initDB()->query('SELECT * from news');
}

function insertNews($auteur,$date,$sujet,$titre){
    $database = initDB();
    $database->beginTransaction();
    $addNews = $database->prepare("INSERT INTO news (date,titre,sujet,auteur) VALUES (:date,:titre,:sujet,:auteur)");

    $addNews->bindParam(':date', $date);
    $addNews->bindParam(':titre', $titre);
    $addNews->bindParam(':sujet', $sujet);
    $addNews->bindParam(':auteur', $auteur);
    $addNews->execute();
    $database->commit();
}
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
    $statment = initDB()->prepare('select * from news');
    $statment->execute();
    $news = array();
    while($uniqueNews = $statment->fetchObject(News::class)){
        $news[] = $uniqueNews;
    }
    return $news;
//    return initDB()->query('SELECT * from news');
}
/*
 * Insere une news en database
 */
function insertNews(News $news){  
    $database = initDB();
    $database->beginTransaction();
    $addNews = $database->prepare("INSERT INTO news (date,titre,sujet,auteur) VALUES (?,?,?,?)");
    $news->setDate(getTime());
    $addNews->bindValue(1, $news->getDate());
    $addNews->bindValue(2, $news->getTitre());
    $addNews->bindValue(3, $news->getSujet());
    $addNews->bindValue(4, $news->getAuteur());    
    
    $addNews->execute();
    $database->commit();
}
/*
 * retourne la date actuelle (timestamp) au format yyyy-mm-dd
 * n'a rien a faire dans la partie acces en base donnée,
 * preferable de le mettre dans un module de gestion du temps
 */
function getTime(){
    return date('Y-m-d');
}
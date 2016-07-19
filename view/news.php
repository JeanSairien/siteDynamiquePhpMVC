<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../view/template/enTete.php';
include '../view/template/header.php';
include '../view/template/nav.php';

foreach(getNews() as $row) {
		//pour chaque ligne on recupere les valeurs et on les affiche sur la sortie standard :
    echo "<h3>".$row["titre"]." - ".$row["date"]."</h3>";
		echo "<b3>".$row["sujet"]."</b3>";
		echo "<p>".$row["auteur"]."</p>";
  }

include '../view/template/footer.php';

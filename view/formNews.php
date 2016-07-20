<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../view/template/enTete.php';
include '../view/template/header.php';
include '../view/template/nav.php';
?>
<form  method="post" action="./app.php">
    <input type="text" name="titre" placeholder="titre"><br>
    <input type="text" name="auteur" placeholder="auteur"><br>
    <textarea name="sujet" placeholder="sujet" maxlength="512"></textarea> <br>  
    <input type="text" name="date" placeholder="yyyy-mm-dd"><br>
    <input type="submit" value="validez">
</form>
<?php
/*
 * Insertion du code d'affichage de la page de garde
 */
include '../view/template/footer.php';

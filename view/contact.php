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
    <input type="text" name="email" placeholder="votre email"><br>
    <input type="text" name="sujet" placeholder="sujet du message"><br>
    <textarea name="corps" placeholder="corps du message" maxlength="512"></textarea> <br>  
    
    <input type="submit" value="validez">
</form>
<?php
/*
 * Insertion du code d'affichage de la page de garde
 */
include '../view/template/footer.php';

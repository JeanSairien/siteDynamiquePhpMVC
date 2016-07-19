<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function getView($vue){
    switch ($vue) {
        case 'default':            
            return include '../view/default.php';
        case 'news':
            return include '../view/news.php';
        case 'formNews':
            return include '../view/formNews.php';
        default:
            break;
    }
}

<?php

function isLogged() {
    if (isset($_SESSION['user']) && (!empty($_SESSION['user']))) {
        return true;
    } else {
        return false;
    }
}

function menu(){
    if (isLogged()) {
        echo file_get_contents("html/menu_in.html");
    }else{
        file_get_contents("html/menu_out.html");
    }    
}
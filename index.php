<?php
    session_start();
    require_once('config/connect.php');
    
    echo file_get_contents("html/header.html");

    if (isset($_SESSION['user']) && (!empty($_SESSION['user']))){
        //be vagyok lĂ©pve
        echo file_get_contents("html/menu_in.html");
        //var_dump($_SESSION['user']);
        echo "<br><h2>Üdvözöllek kedves " . $_SESSION['user'][1] . "</h2>";
    }else{
        //nincs belĂ©pve senki
        echo file_get_contents("html/menu_out.html");
    }

    echo file_get_contents("html/footer.html");    
    $conn -> close();
?>
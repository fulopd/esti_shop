<?php
    session_start();
    require_once('config/connect.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        if (isset($_SESSION['user']) && (!empty($_SESSION['user']))){
            //be vagyok lépve
            echo file_get_contents("html/menu_in.html");
            //var_dump($_SESSION['user']);
            echo "<br><h2>Üdvözöllek kedves " . $_SESSION['user'][1] . "</h2>";
        }else{
            //nincs belépve senki
            echo file_get_contents("html/menu_out.html");
        }
        
        
        ?>
    </body>
</html>
<?php
    $conn -> close();
?>
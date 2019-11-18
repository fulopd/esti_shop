<?php
    session_start();
    require_once 'config/connect.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        if(!empty($_POST['email'])){
            $email = $_POST['email'];
            $pwd = $_POST['passw'];
            $name = $_POST['name'];
            $address = $_POST['address'];            
            
            $stmt = $conn -> prepare("INSERT INTO users (email, password, name, address) VALUES (?, ?, ?, ?)");
            $stmt -> bind_param("ssss", $email, $pwd , $name, $address);            
            
            if ($stmt -> execute()) {
                header("Location: index.php");
            } else {
                $_SESSION['error'] = "Helytelen adatok";                        
            }
            
            
            $stmt -> close();
            $conn -> close();
            
            
        }        
    }
        
    echo file_get_contents("html/header.html");
    echo file_get_contents("html/reg_form.html");
    if (!empty($_SESSION['error'])){
        echo "<h2>".$_SESSION['error']."</h2>";
        unset($_SESSION['error']);
    }
    echo file_get_contents("html/footer.html");
        
?>
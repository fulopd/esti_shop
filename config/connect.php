<?php

$conn = new mysqli("localhost", "esti_user", "esti_user", "esti_shop", "3306");

if ($conn -> errno) {
    die("Hiba a kapcsolat létrehozásakor!");
}
if (!$conn ->set_charset("utf8")) {
    echo 'Nem sikerült beállítani a karakter kódolást!';
}

?>

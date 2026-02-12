<?php

session_start();

if ($_SESSION["isLoggin"] != "login") {
    header("Location: login.php");
}

?>


<h1>Halaman dashboard</h1>
<a href="logout.php">Logout</a>

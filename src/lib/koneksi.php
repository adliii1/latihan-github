<?php

$localhost = "localhost";
$username = "root";
$password = "";
$database = "pembelajaranweb2";


try {
    $connectDatabase = mysqli_connect($localhost, $username, $password, $database);

    echo "database berhasil connect";
} catch (\Throwable $th) {
    echo "Database gagal connect" . $th->getMessage();
}


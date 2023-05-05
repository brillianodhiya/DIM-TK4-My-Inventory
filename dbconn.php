<?php
    $conn = mysqli_connect(
        hostname: "127.0.0.1",
        username: "root",
        password: "1sampai8", //Ubah dengan password local mysql kalian
        database: "dim_tk4"
    );

    if ($conn->connect_error) {
        die("Failed making db connection: " . $conn->connect_error);
    }
?>
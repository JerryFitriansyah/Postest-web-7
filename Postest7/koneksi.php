<?php
    $conn = mysqli_connect("localhost", "root", "", "form_barang");

    if (!$conn){
        die("Gagal Terhubung ke Database anda ".mysqli_connect_error());
    }
?>
<?php

include "connect.php";

$sql = "INSERT INTO barang (id, nama, deskripsi, harga_satuan, jumlah)
VALUES ('".$_POST['id']."','". $_POST['nama']."', '".$_POST['deskripsi']. "', ".$_POST['harga'] .",". $_POST['jumlah'].")";

if ($conn->query($sql) === TRUE) {
    $message = "New record created successfully";
} else {
    $message = "Error: " . $sql . "<br>" . $conn->error;
}

header('Location: index.php?message='.$message);


?>
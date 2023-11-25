<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "malang_kab";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT*FROM lawang"; 
$result = $conn->query($sql);

$data = array(); 

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row; 
    }
}

$conn->close();


echo json_encode($data);
?>
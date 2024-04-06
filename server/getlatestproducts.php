<?php
include('connection.php');
$stmt = $conn->prepare("SELECT * FROM products WHERE fldproductid BETWEEN 4 AND 7");
if($stmt->execute()){
  $latestproducts = $stmt->get_result();// This is an array
}
?>
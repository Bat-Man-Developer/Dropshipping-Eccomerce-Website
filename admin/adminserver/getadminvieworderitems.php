<?php
include('adminconnection.php');
//1. View Product Details
if(isset($_GET['fldorderid'])){
  $orderid = $_GET['fldorderid'];
  $stmt1 = $conn->prepare("SELECT * FROM orderitems WHERE fldorderid = ?");
  $stmt1->bind_param("i",$orderid);
  $stmt1->execute();
  // This is an array of 1 product
  $vieworderitems = $stmt1->get_result();
}
else{//no product id was given
  header('admin/dashboard.php?errormessage=Something went wrong!');
}
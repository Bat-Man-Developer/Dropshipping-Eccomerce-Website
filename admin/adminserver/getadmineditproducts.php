<?php
include('adminconnection.php');
//1. View Product Details
if(isset($_GET['fldproductid'])){
  $productid = $_GET['fldproductid'];
  $stmt1 = $conn->prepare("SELECT * FROM products WHERE fldproductid = ?");
  $stmt1->bind_param("i",$productid);
  $stmt1->execute();
  // This is an array of 1 product
  $editproducts = $stmt1->get_result();
}
else if($_POST['admineditproductsbtn']){//Edit Product Details
  $productid = $_POST['fldproductid'];
  $productname = $_POST['fldproductname'];
  $productdepartment = $_POST['fldproductdepartment'];
  $producttype = $_POST['fldproducttype'];
  $productstock = $_POST['fldproductstock'];
  $productprice = $_POST['fldproductprice'];
  $productdescription = $_POST['fldproductdescription'];
  $productoffer = $_POST['fldproductspecialoffer'];

  $stmt = $conn->prepare("UPDATE products SET fldproductname=?, fldproductdepartment=?, fldproducttype=?, fldproductstock=?, fldproductdescription=?, fldproductprice=?, fldproductspecialoffer=? WHERE fldproductid=?");

  $stmt->bind_param('sssssssi',$productname,$productdepartment,$producttype,$productstock,$productdescription,$productprice,$productoffer,$productid);
  
  if($stmt->execute()){
    header('location: ../admin/adminproducts.php?editmessage=Product Updated Succesfully!');
  }
  else{
    header('location: ../admin/adminproducts.php?errormessage=Error Occured, Try Again.');
  }
}
else{//no product id was given
  header('admin/dashboard.php?errormessage=Something went wrong!');
}
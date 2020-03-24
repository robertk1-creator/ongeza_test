<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("connection.php");
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
   $sql = "DELETE FROM customer WHERE id ='$id'";
   mysqli_query($dbconfig,$sql);
   header('Location:customer_view.php');
}
?>
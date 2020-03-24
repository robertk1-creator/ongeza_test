<?php

/* 
 *process  customer data
 */
include('connection.php');
 if (isset($_POST['submit'])) {
    // receive input from the form
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $town_name = $_POST['town_name'];
     $gender_name = $_POST['gender_name'];
     $sql="SELECT id where gender_name='$gender_name'";
     $query= mysqli_query($dbconfig, $sql) or die(" query failed");
     $row= mysqli_fetch_array($query);
      echo $id=row[0];
       if($first_name !=''||$last_name != ''||$town_name != ''||$gender_name !='') {
        $sql = "INSERT INTO customer(first_name,last_name,town_name,gender_id)
        VALUES('$first_name','$last_name','$town_name','$id')";
        $query = mysqli_query($dbconfig, $sql) or mysqli_error($dbconfig, $sql);
        echo 'Data inserted';
    } else {
       echo " Some  data  are  missing";
    }}
    ?>
<?php
/*
 writen by  robertkundi.
 */
include('connection.php');
 if (isset($_POST['submit'])) {
    // receive input from the form
     $gender_name = $_POST['gender_name'];
     if ($gender_name != '' ) {
        $sql = "INSERT INTO gender(gender_name)
         VALUES('$gender_name')";
        $query = mysqli_query($dbconfig, $sql) or mysqli_error($dbconfig, $sql);
        echo 'Data inserted';
    } else {
       echo " Some  data  are  missing";
    }}
    ?>


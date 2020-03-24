<?php

/* 
get  customer  data
 * 
 */
session_start();
include ('connection.php');
$sql="SELECT customer.id,customer.first_name,customer.last_name,customer.town_name,
Gender.gender_name FROM customer INNER JOIN gender ON customer.gender_id=gender.id";
$query=mysqli_query($dbconfig,$sql);

?>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
<table id="mydata" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>first name</th>
                                            <th>last name</th>
                                            <th>Town name</th>
                                            <th>gender name</th>
                                             <th>ACTION</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        //print 10 items
                                        while($row = mysqli_fetch_array($query))
                                        {
                                            ?>

                                    <tr>
                                        
                                        <td><?php echo ($row['first_name'])?></td>
                                        <td><?php echo ($row['last_name'])?></td>
                                        <td><?php echo ($row['town_name'])?></td>
                                        <td><?php echo ($row['gender_name'])?></td>
                                        
                                       
                                        <td>
                                            <a href="edit.php ?id=<?php echo $row['id']; ?>" class='btn btn-xs btn-success' data-placement=bottom  >Edit </a>
                                            <a href="delete_customer.php?id=<?php echo $row['id']; ?>" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="bottom" onclick="return confirm('Are you sure you want to delete   <?php echo $row['first_name']; ?> '); ">Delete</a>
                                        </td>

                                        </tr>
                                        <?php }
                                    ?>
                                    </tbody>
</body>                               </table>
</html>
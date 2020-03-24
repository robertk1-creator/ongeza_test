<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('connection.php');
if(isset($_GET['id'])& is_numeric($_GET['id'])) {
$id = $_GET['id'];
$sql="SELECT *from customer  WHERE id='$id'";
$query=mysqli_query($dbconfig,$sql)or die('sql error');
$row = mysqli_fetch_array($query);
$options = "";
$query1 = mysqli_query($dbconfig,"select * from gender");
while($row1 = mysqli_fetch_array($query1))
{
    $options = $options."<option>$row1[1]</option>";
}
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
    <form name="customer_pr" method="post"action="update_customer.php">
<div>
<h3> ADD CUSTOMER</h3> </div>
<div class="row">
<div class="col-md-4"><b>First Name</b>
<input type="text" name="first_name" class="form-control" value="<?php echo $row['first_name'] ?> "required>
</div>
<div class="col-md-4"><b>Last Name</b>
<input type="text" name="last_name" class="form-control"value="<?php echo $row['last_name'] ?> " required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Town name</b>
<input type="text" name="town_name" class="form-control"value="<?php echo $row['town_name'] ?> " required>
</div>
<div class="col-md-4"><b>Gender name</b>

<select name="gender_name"maxlength="10" required>
  <?php echo $options;?>
  </select>
</div>
</div>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="submit" value="UPDATE">
</div>
</div>
</form>
</body>
</html>
<?php
 }
 ?>
<?php
include ("connection.php");
$options = "";
$query = mysqli_query($dbconfig,"select * from gender");
while($row = mysqli_fetch_array($query))
{
    $options = $options."<option>$row[1]</option>";
}

?>
<html>
<body>
<form name="customer_pr" method="post">
<div>
  <h3> ADD CUSTOMER</h3>
   </div>
<div class="row">
<div class="col-md-4"><b>First Name</b>
<input type="text" name="first_name" class="form-control" required>
</div>
<div class="col-md-4"><b>Last Name</b>
<input type="text" name="last_name" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Town name</b>
<input type="text" name="town_name" class="form-control" required>
</div>
<div class="col-md-4"><b>Gender name</b>

<select name="gender"maxlength="10" required>
     <?php echo $options;?>
 
  </select>
</div>
</div>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="insert" value="Submit">
</div>
</div>
</form>
</body>
</html>

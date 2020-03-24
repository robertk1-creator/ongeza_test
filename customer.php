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
    <head>
            <script>
inputs = form.getElementsByClassName('InputClassName');
 for (index = 0; index < inputs.length; ++index) {
        if (inputs[index].value==null || inputs[index].value=="" || inputs[index].value.length < 3))
        {
            alert("Field must be 3 characters or more");
            return false;
        }
    }
    </script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<body>

<form name="customer_pr" method="post"action="customer_pr.php"onsubmit="return validateForm('customer_pr');>
<div>
<h3> ADD CUSTOMER</h3> </div>
<div class="row">
<div class="col-md-4"><b>First Name</b>
<input type="text" name="first_name" class="form-control" required class="InputClassName">
</div>
<div class="col-md-4"><b>Last Name</b>
<input type="text" name="last_name" class="form-control" required class="InputClassName">
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Town name</b>
<input type="text" name="town_name" class="form-control" required class="InputClassName">
</div>
<div class="col-md-4"><b>Gender name</b>

<select name="gender_name"maxlength="10" required>
  <?php echo $options;?>
  </select>
</div>
</div>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="submit" value="Submit">
</div>
</div>
</form>
</body>
</html>

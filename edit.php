<?php 
require "connection.php";
$id=$_GET["id"];
$studentnum ="";
$fullname ="";
$birthday="";
$course="";
$email="";

$dis = mysqli_query($conn, "select * from students where id=$id");
while ($row=mysqli_fetch_array($dis))
{
	$studentnum=$row["studentnum"];
	$fullname=$row["fullname"];
	$birthday=$row["birthday"];
	$course=$row["course"];
	$email=$row["email"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="col-lg-5">
  <h2>Registeration Form</h2>
  <form action="" name="form1" method="post">
    <div class="form-group">
      <label for="text">Stundent Id: </label>
      <input type="text" class="form-control" id="studentnum" placeholder="Enter Student Id" name="studentnum" value="<?php echo $studentnum; ?>">
    </div>
    <div class="form-group">
      <label for="fullname">Fullname:</label>
      <input type="text" class="form-control" id="fullname" placeholder="Enter Fullname" name="fullname" value="<?php echo $fullname; ?>">
    </div>
    <div class="form-group">
      <label for="birthday">Birthday:</label>
      <input type="date" class="form-control" id="birthday" placeholder="Enter Birthday" name="birthday" value="<?php echo $birthday; ?>">
    </div>
	<div class="form-group">
      <label for="course">Course:</label>
      <input type="text" class="form-control" id="course" placeholder="Enter Course" name="course" value="<?php echo $course; ?>">
    </div>
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="<?php echo $email; ?>">
    </div>
    
	<button type="submit" name="update" class="btn btn-default">Update</button>
	
  </form>
</div>
</div>
</body>

<?php  
	if(isset($_POST["update"]))
	{
	mysqli_query($conn,"update students set studentnum='$_POST[studentnum]', fullname='$_POST[fullname]', birthday='$_POST[birthday]', course='$_POST[course]', email='$_POST[email]' where id=$id");
	
?>
	<script type="text/javascript">
	window.location="main.php";
	</script >

<?php
	}
?>


</html>

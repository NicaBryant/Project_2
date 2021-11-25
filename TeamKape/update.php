<?php 
require "connection.php";
$id=$_GET["id"];
$studentnum ="";
$fullname ="";
$birthday="";
$course="";
$email="";

$result = mysqli_query($conn, "select * from Project where id=$id");
while ($row= mysqli_fetch_array($result))
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
  <link href='https://fonts.googleapis.com/css?family=Gafata' rel='stylesheet'> 
</head>
<style>

      body
        {
          background-color: #b4a1a6b2;
          font-family: 'Gafata';
        }

      .box
        {
          background-color: #3d3846; 
          padding:20px;
          color: #a58c91;
          height: 80vh;
          padding-top:20px;
          box-shadow: 5px 5px 5px #888888;
          font-family: 'Gafata';
          margin-top: 50px;
          

          }


      h2
        {
          color: #fcc6d1;
          text-align: center;
          font-size: 30px;
          letter-spacing: 10px;
          padding:1px 5px 10px 5px;
          font-weight: 1000;
          font-family: 'Gafata';

        }
   
      
      .button
        {
          width:120px;
          padding: 5px;
          background-color: #f5d8ded0;
          border:none;
          cursor: pointer;
          font-family: 'Gafata';
          font-size: 18px;
          color: rgb(48, 38, 44);
        }
        
      .buttoncenter
        {
          text-align: center;
          padding-top: 10px;
        }

      .insert:hover
        {
          background-color:#bad4c7;
          color: Black;
        }
      .clear:hover
        {
          background-color:#ca7272c9;
          color: white;
        }
        .headerboxstyle
        {
          font-size: 20px; 
          background-color:#3d3846;
          padding: 5px 20px 1px 20px;
          font-family: Gafata;
          border-top: 2px #3a1d28d2 solid;
          box-shadow: 2px 2px 2px #645b6480;
          
        }
      
      a
        {
          padding-right: 20px;
          color: white;
        }
      a:hover
        {
          color: #e6d9db;
        }
    
</style>
<body>
<header>
	<div class = "headerboxstyle">

			<a href = "http://localhost/Report/main.php#Menu"	target = "_blank" title = "Student Database" >
        <img src = "https://i.ibb.co/Y3JBPG8/DSA-removebg-preview.png" alt="Not Found" width="200" height="60" >
      </a>
	 <p style= "float: right; padding-top: 15px;">
        <a class="nav-item nav-link active" href="http://localhost/TeamKape/main.php">Database <span class="sr-only">(current)</span></a>    
	  <a class="nav-item nav-link" href="http://localhost/TeamKape/add.php">Add Data</a>
	      <a class="nav-item nav-link" href="http://localhost/TeamKape/search.php">Search</a>
			</p>
		</div>
	</header>	
	<div class="container-fluid">
<div style="margin: auto; width: 550px;">
 <div class = "box">
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
	<p class="buttoncenter">
   <button type="submit" name="update" class="button insert">Update</button>
	           
            </p>
  </form>
  </div>
</div>
</div>



</body>

<?php  
	if(isset($_POST["update"]))
	{
	mysqli_query($conn,"update Project set studentnum='$_POST[studentnum]', fullname='$_POST[fullname]', birthday='$_POST[birthday]', course='$_POST[course]', email='$_POST[email]' where id=$id");
	
?>
	<script type="text/javascript">
	window.location="main.php";
	</script >

<?php
	}
?>


</html>

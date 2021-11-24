<?php 
require "connection.php";
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
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Register</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="http://localhost/try/main.php">Home <span class="sr-only">(current)</span></a>
	<br>
      <a class="nav-item nav-link" href="http://localhost/try/add.php">Add Data</a>
	   <br>
      <a class="nav-item nav-link" href="http://localhost/try/search.php">Search</a>
      
    </div>
  </div>
</nav>
<!--<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="http://localhost/try/main.php">View</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/try/add.php">Add</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/try/search.php">Search</a>
  </li>

</ul> -->
</nav>

<div class="col-lg-12">
 <table class="table table-bordered">
    <thead>
      <tr>
	  <th># </th>
        <th>Student Id</th>
        <th>Fullname</th>
        <th>Birthday</th>
		<th>Course</th>
		<th>Email</th>
		
      </tr>
    </thead>
    <tbody>
      <?php
	   $dis = mysqli_query($conn, "select * from students");
	  while ($row = mysqli_fetch_array($dis))
	  {
		  echo "<tr>";
	  echo "<td>"; echo  $row["id"]; echo "</td>";
	  echo "<td>"; echo  $row["studentnum"]; echo "</td>";
	  echo "<td>"; echo  $row["fullname"]; echo "</td>";
	  echo "<td>"; echo  $row["birthday"]; echo "</td>";
	  echo "<td>"; echo  $row["course"]; echo "</td>";
	  echo "<td>"; echo  $row["email"]; echo "</td>";
	
		  echo "</tr>";
		  
	  }
	  ?>
     
    </tbody>
  </table>
</div>

<?php  
	if (isset($_POST["insert"]))
	{
		mysqli_query($conn,"insert into students values(NULL, '$_POST[studentnum]', '$_POST[fullname]', 
		'$_POST[birthday]','$_POST[course]','$_POST[email]')");
		?>
		<script type="text/javascript">
		window.location.href=window.location.href;
		</script>
		<?php
	}

	
?>

</body>
</html>

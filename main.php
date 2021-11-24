<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <form action="" method="post">
	<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">Register</a>
   <form class="form-inline">
        <input   type="text" placeholder="Search" name="search">
        <button type="submit" name="submit" class="btn btn-primary ">
		 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
</button>
</form>
</nav>
    </form> 

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
		<th> Edit </th>
		<th> Delete </th>
      </tr>
    </thead>

<?php


if (isset($_POST['submit'])) {
    $searchValue = $_POST['search'];
    $con = new mysqli("localhost", "root", "", "TeamKape");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM students WHERE studentnum  LIKE '%$searchValue%'";

        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
			echo "<tr>";
	  echo "<td>"; echo  $row["id"]; echo "</td>";
	  echo "<td>"; echo  $row["studentnum"]; echo "</td>";
	  echo "<td>"; echo  $row["fullname"]; echo "</td>";
	  echo "<td>"; echo  $row["birthday"]; echo "</td>";
	  echo "<td>"; echo  $row["course"]; echo "</td>";
	  echo "<td>"; echo  $row["email"]; echo "</td>";
	    echo "<td>";?> <a href="edit.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-success col-lg-10">Edit</button> </a><?php echo "</td>";
	  echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"];?>"><button type="button" class="btn btn-danger col-lg-10">  Delete</button></a> <?php echo "</td>";
			echo "</tr>";
        }

      
    }   
}

?>
</tbody>
  </table>
  </div>
  </body>
</html>

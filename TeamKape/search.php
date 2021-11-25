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
  <link href='https://fonts.googleapis.com/css?family=Gafata' rel='stylesheet'>  
</head>

<style>
body
        {
          background-color: #b4a1a6b2;
          font-family: 'Gafata';
        }
        .overflow
        {
          overflow: scroll;
          height: 500px;
        }

      ::-webkit-scrollbar 
        {
          width: 8px;
        }

      ::-webkit-scrollbar-track 
        {
          background:#e7e6e6a9;
        }
        
      ::-webkit-scrollbar-thumb 
        {
          background:#e7e6e6a9;
        }

      ::-webkit-scrollbar-thumb:hover 
        {
          background:#5f5c64;
        }
     
   
   .th
          {
            background-color: #3d3846;
          color: white;
          position:sticky;
          top:0;
          }
   
      tr
        {
          background-color: white;
		  font-family: Arial;
        }
      tr:hover
        {
          background-color:#5f5c64;
          color:white;
        }
		.th:hover
          {
            background-color: #3d3846;
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
      .search
        {
         text-align:center;
         margin-top: 30px;
        }
      input[type=text]
        {
          width:300px;
          padding:5px;
        }
  
</style>

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


<body>
  <div class = "search">
    <form action="" method="post">
	    <nav class="navbar navbar-light bg-light justify-content-between">
        <form class="form-inline">
          <input   type="text" placeholder="Search" name="search">
          <button type="submit" name="submit" class="btn btn-primary" style="background-color: #3d3846; margin-bottom:2px;"> 
		        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          </button>
        </form>
      </nav>
    </form> 
  </div>
<div class="col-lg-12">
 <table class="table table-bordered">
    <thead>
      <tr class="th">
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
        $sql = "SELECT * FROM Project WHERE studentnum  LIKE '%$searchValue%'";

        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
			echo "<tr>";
	  echo "<td>"; echo  $row["id"]; echo "</td>";
	  echo "<td>"; echo  $row["studentnum"]; echo "</td>";
	  echo "<td>"; echo  $row["fullname"]; echo "</td>";
	  echo "<td>"; echo  $row["birthday"]; echo "</td>";
	  echo "<td>"; echo  $row["course"]; echo "</td>";
	  echo "<td>"; echo  $row["email"]; echo "</td>";
	    echo "<td>";?> <a href="update.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-success col-lg-10">Edit</button> </a><?php echo "</td>";
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

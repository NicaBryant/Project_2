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
  <link href='https://fonts.googleapis.com/css?family=Gafata' rel='stylesheet'>  

</head>
  <style>
      body
        {
          background-color: #fceded;
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

      
      h1
        {
          color: #5c1631;
          text-align: center;
          font-size: 30px;
          letter-spacing: 10px;
          padding:20px 5px 30px 5px;
          font-weight: 1000;
          border-radius: 2px;
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


</nav>

 <h1>STUDENT DATABASE</h1>

          <div class ="overflow">
            <div class="col-lg-12">

              <table class="table table-bordered">
                
                  <tr class="th">
	                  <th># </th>
                    <th>Student Id</th>
                    <th>Fullname</th>
                    <th>Birthday</th>
                    <th>Course</th>
                    <th>Email</th>
                  </tr>
               

           
            
            
              <tbody>
                <?php
                  $result = mysqli_query($conn, "select * from Project");
                  while ($row = mysqli_fetch_array($result))
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
        </div>
      </div>

      <?php  
        if (isset($_POST["insert"]))
        {
          mysqli_query($conn,"insert into Project values(NULL, '$_POST[studentnum]', '$_POST[fullname]', 
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

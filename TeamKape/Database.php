<?php
$servername = 'localhost';
$username = 'root';
$password = '';


echo "<div>";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: <br>" . $conn->connect_error);
}
// Create database
$sql = "CREATE DATABASE TeamKape";
if ($conn->query($sql) === TRUE) {
  echo "Database User created successfully";
} else {
  echo "<b>Error creating table: <br></b> " . $conn->error;
}



$conn->close();

echo "</div>";

?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Gafata' rel='stylesheet'>  
<title>Create Database</title>
</head>
  <style>
      body
        {
          background-color: #9a9aaa;
          font-family: 'Gafata';
          padding-top: 10%;
        }
      div
        {
          background-color: #3d3846; 
          width: 550px;
          border-radius: 10px;
          margin-top: 3%;
          padding: 30px;
          color: #fce6ea;
          text-align:center;
          margin: 20px auto 50px auto;
          box-shadow: 5px 5px 10px #00000079;
          font-size: 40px;
          border: 2px solid white;

        }  
      p
        {
          text-align:center;
        }  
      input[type=submit]
        {
          width:186px;
          padding: 7px;
          background-color: #f5d8ded0;
          border:none;
          cursor: pointer;
          font-family: 'Gafata';
          font-size: 18px;
          color: rgb(48, 38, 44);
          box-shadow: 2px 2px 5px #00000079;
          border-radius: 5px;

          

        }
      input[type=submit]:hover
        {
          background-color: #ada9aad0;
          color: #fce4e8; 
        }



  </style>

    <body>
      <p>
        <a href="http://localhost/TeamKape/table.php">
        <input type="submit" value= "Create table"/>
        </a>
      </p>
    </body>
</html>
<?php
echo"<div>";
 $conn= mysqli_connect("localhost","root", "", "TeamKape");
 
 if($conn === false){
	 die("ERROR:<br> Could not connect<br>". mysqli_connect_error());
 }
$sql="CREATE TABLE Project(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	studentnum VARCHAR(20) NOT NULL,
	fullname VARCHAR(50) NOT NULL,
	birthday DATE NOT NULL,
	course VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL UNIQUE
 )";

 if(mysqli_query($conn, $sql)){
	 echo "Table created successfully";
 }
 else{
	 echo "<b style='font-size: 30px'>ERROR:</b><br> Could not able to excute<br> $sql." . mysqli_error($conn);
 }
 
 mysqli_close($conn);
 echo"</div>";

?>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Gafata' rel='stylesheet'>  
<title>Create Table </title>
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
          width: 700px;
          border-radius: 10px;
          margin-top: 3%;
          padding: 30px;
          color: #fce6ea;
          text-align:center;
          margin: 20px auto 50px auto;
          box-shadow: 5px 5px 10px #00000079;
          font-size: 20px;
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
   		<a href="http://localhost/TeamKape/main.php">
     	<input type="submit" value= "Next"/>
   </a>
	</p>
</body>
</html>
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
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="http://localhost/try/main.php">View</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/try/add.php">Add</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/try/search.php">Search</a>
  </li>

</ul>

<div class="container">
<div class="col-lg-5">
  <h2>Registeration Form</h2>
  <form action="main.php" name="form1" method="post">
    <div class="form-group">
      <label for="text">Stundent Id: </label>
      <input type="text" class="form-control" id="studentnum" placeholder="Enter Student Id" name="studentnum">
    </div>
    <div class="form-group">
      <label for="fullname">Fullname:</label>
      <input type="text" class="form-control" id="fullname" placeholder="Enter Fullname" name="fullname">
    </div>
    <div class="form-group">
      <label for="birthday">Birthday:</label>
      <input type="date" class="form-control" id="birthday" placeholder="Enter Birthday" name="birthday">
    </div>
	<div class="form-group">
      <label for="course">Course:</label>
      <input type="text" class="form-control" id="course" placeholder="Enter Course" name="course">
    </div>
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
    <button type="submit" name="insert" class="btn btn-default">Insert</button>
	<button type="reset" name="clear" class="btn btn-default">Clear</button>

  </form>
</div>
</div>


</body>
</html>

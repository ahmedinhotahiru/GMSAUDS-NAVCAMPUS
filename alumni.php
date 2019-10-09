<?php 
// //require the connection file for database connection
// include 'connection.php';

// //check if button is clicked
// if(isset($_POST['btn'])){
//   $name = $_POST['name'];
//   $year = $_POST['adyear'];
//   $depart = $_POST['depart'];
//   $course = $_POST['course'];
//   $id = $_POST['student_id'];


//   $sql = "SELECT * FROM ";


// }


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alumni </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
   <?php include 'navbar.php';?>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5" style="padding: 20px;">This is the Alumni Database</h1>
        <p class="lead">Fill in the space sto find your details</p>


        <form action="process_alumni.php" method="POST">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="text" name="adyear" class="form-control" placeholder="Year">
            </div>
            <div class="form-group">
                <input type="text" name="depart" class="form-control" placeholder="Department">
            </div>
            <div class="form-group">
                <input type="text" name="course" class="form-control" placeholder="Course">
            </div>
             <div class="form-group">
                <input type="text" name="student_id" class="form-control" placeholder="Student ID">
            </div>
            <div class="form-group">
                <button name="btn" class="btn btn-primary">Search</button>
            </div>
            
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

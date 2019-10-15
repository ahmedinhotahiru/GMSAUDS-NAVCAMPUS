<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

  <title>Database - 20<?php echo date('y');?></title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">


</head>
<body>



<?php

    require 'connection.php';


    if (isset($_POST['btn'])) {
     
      $firstName =   $_POST['name'];
      $year = $_POST['adyear'];
      $department = $_POST['depart'];
      $course = $_POST['course'];
      $student_id = $_POST['student_id'];

      //input validation applied, at least one input field should be filled


      


            
    }
            
?>

    <h1 class="text-center">Assallam Alaikum </h1>
<div class="card">
<table class="table table-stripped">
  <thead class= 'table-dark'>
    <tr>
    <th scope="col">Student ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Year</th>
      <th scope="col">Department</th>
      <th scope="col">Course</th>
    </tr>
  </thead>
  <tbody>
<tr>
<?php

if(empty($firstName) || empty($year) || empty($department) || empty($course) || empty($student_id) ){
        echo "
        <div style='color:red; font-size:30px;'>No results found.</div>";
    }else{

      //do the selection statement
      //using one of the cretiria should be enough to perform the search
      $sql = "SELECT * FROM alumni WHERE ";
      $sql .= "studentId='".$student_id."' OR ";
      $sql .= "firstName='".$firstName."' OR ";
      $sql .= "department='".$department."' OR ";
      $sql .= "course='".$course."' OR ";
      $sql .= "year='".$year."'";

      //find the results from database
      $result = $conn->query($sql);
      


//search for results and display it in the table
  while ($row = $result->fetch_assoc()) {
      echo "<td>" . $row['studentId'] . "</td>";
      echo "<td>" . $row['firstName'] . "</td>";
      echo "<td>" .$row['lastName']."</td>";
      echo "<td>" . $row['year'] . "</td>";
      echo "<td>" .$row['department'] . "</td>";
      echo "<td>" .$row['course'] . "</td>";
      
  }
            
 }
            ;?>
            </tr>
    
  </tbody>
</table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>

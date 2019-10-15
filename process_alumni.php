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


<?php

    require 'connection.php';


    if (isset($_POST['btn'])) {
            $fname =   $_POST['name'];
            $adyear = $_POST['adyear'];
            $depart = $_POST['depart'];
            $course = $_POST['course'];
            $student_id = $_POST['student_id'];


            
    }
            
?>

    <h1 class="text-center">Assallam Alaikum </h1>
<div class="card">
<table class="table table-dark">
  <thead>
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
            
            if(!empty($fname) && !empty($adyear) && !empty($depart) && !empty($course) && !empty($student_id)){
            // Query to select from the database
            $sql = "SELECT * FROM alumni WHERE fname='$fname' AND adyear='$adyear' AND depart='$depart' AND course='$course' AND student_id='$student_id'";
            
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<td>" . $row['student_id'] . "</td>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" ."</td>";
                echo "<td>" . $row['adyear'] . "</td>";
                echo "<td>" .$row['depart'] . "</td>";
                echo "<td>" .$row['course'] . "</td>";
                
            }
            

        }else{
            echo "Fails";
        }$conn->close();
            ;?>
            </tr>
    
  </tbody>
</table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
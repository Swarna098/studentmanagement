<?php

$host="localhost";

$user= "root";

$password ="";

$db = "school_project";

$data = mysqli_connect($host,$user,$password,$db);

$sql = "select * from admission";
$result = mysqli_query($data,$sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>
     <!--bootstrap link added-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
</head>
<style>
    table,th,td{
        border:1px solid black;
        border-collapse:collapse;

    }
</style>
<body>


  <header class="header">
  <a href="">Admission</a>
      <div class="logout">
          <a style="font-weight:bold" class="btn btn-primary " href="logout.php">Logout</a>
      </div>
    
  </header>
    <aside>
        <ul>
            <li><a href="admission.php">Admission</a></li>
            <li><a href="add_student.php">Add Student</a></li>
            <li><a href="view_student.php">View Student</a></li>
            <li><a href="admin_add_teacher.php">Add Teacher</a></li>
            <li><a href="">View Teacher</a></li>
            <li><a href="">Add Courses</a></li>
            <li><a href="">View Courses</a></li>
        </ul>
    </aside>

    <div class="content">
        <h1>Applied For Admission</h1>

        <table>
            <tr>
                <th style="padding:20px; font-size:15px;">Name</th>
                <th style="padding:20px; font-size:15px;">Email</th>
                <th style="padding:20px; font-size:15px;">Phone</th>
                <th style="padding:20px; font-size:15px;">Message</th>
            </tr>

            <?php 
            
            while($info=$result->fetch_assoc()){

            ?>
            <tr>
                <td style="padding:20px;"><?php echo "{$info['name']}"; ?></td>
                <td style="padding:20px;"><?php echo "{$info['email']}"; ?></td>
                <td style="padding:20px;"><?php echo "{$info['phone']}"; ?></td>
                <td style="padding:20px;"><?php echo "{$info['message']}"; ?></td>
            </tr>
            
            <?php } ?>
        </table>
       
    </div>












    
<!--js link added-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
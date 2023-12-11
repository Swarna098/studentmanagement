<?php 

error_reporting(0);
session_start();

$host ="localhost";

$user = "root";

$password = "";

$db = "school_project";

$data = mysqli_connect($host,$user,$password,$db);

$sql = "SELECT * FROM user WHERE usertype='student'";

$result = mysqli_query($data,$sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View_student</title>
     <!--bootstrap link added-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
</head>
<style>
    table,th,td{
        border:1px solid black;
        border-collapse:collapse;
        padding:20px; font-size:15px;

    }
    td{
        background-color:skyblue;
        color:white;
    }
</style>
<body>
  <header class="header">
  <a href="">Admin Dashboard</a>
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
<center>
    
<div class="content">
        <h1>Student Data</h1>

        <?php 
        if($_SESSION['message'])
        {
            echo $_SESSION['message'];
        }

        unset($_SESSION['message']);
        
        ?>

        <table>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>

            <?php 
            
            while($info=$result->fetch_assoc()){

            ?>
            <tr>
                <td><?php echo "{$info['username']}"; ?></td>
                <td><?php echo "{$info['email']}"; ?></td>
                <td><?php echo "{$info['phone']}"; ?></td>
                <td><?php echo "{$info['password']}"; ?></td>
                <td><?php echo "<a style='font-weight:bold;' onClick=\" javascript:return confirm('Are you sure to Delete this');\" class='btn btn-danger href='delete.php?student_id={$info['id']}'> Delete </a>"; ?></td>

                <td><?php echo "<a style='font-weight:bold;' class='btn btn-primary'href='update_student.php?student_id={$info['id']}'>Update</a>"; ?></td>
            </tr>
            <?php } ?>
        </table>
        
    </div>



</center>









    
<!--js link added-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
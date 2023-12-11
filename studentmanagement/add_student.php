<?php


$host ="localhost";

$user = "root";

$password = "";

$db = "school_project";

$data = mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_student']))
{
  $username=$_POST['name'];
  $user_email=$_POST['email'];
  $user_phone=$_POST['phone'];
  $user_password=$_POST['password'];
  $usertype="student";

  $check = "SELECT * FROM user WHERE username ='$username'";
  $check_user=mysqli_query($data,$check);

  $row_count = mysqli_num_rows($check,$user);
  if($row_count==1)
  {
    echo "<script type='text/javascript'>
    alert('Username Akready Exit.Try Another One');
    </script>";
    
  }
  else{

  

  $sql = "INSERT INTO user (username,email,phone,usertype,passowrd)VALUES('$username','$user_email','$user_phone','$usertype','$user_password')";

  $result = mysqli_query($data,$sql);

  if($result)
  {
   echo "<script type='text/javascript'>
   alert('Data Uploaded Successfully');
   </script>";
  }
  else{
      echo "Upload Failed";
  }
}
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add_student</title>
     <!--bootstrap link added-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
</head>

<style>
    label{
        display: inline-block;
        text-align:right;
        width:100px;
        padding-top:10px;
        padding-bottom:10px;

    }
    .div_deg{
        background-color:skyblue;
        width:400px;
        padding-top:70px;
        padding-bottom:70px;
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
        <h1>Add Student</h1>
        

        <div class="div_deg">
            <form action="#" method="POST">
                <div>
                    <label for="">Username</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label for="">Phone</label>
                    <input type="number" name="phone">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="text" name="password">
                </div>
                <div>
                  <br>
                    <input class="btn btn-primary ms-5" type="submit" name="add_student" value="Add Student">
                </div>
            </form>
        </div>
    </div>

</center>











    
<!--js link added-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
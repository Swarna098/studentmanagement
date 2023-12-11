<?php


$host ="localhost";

$user = "root";

$password = "";

$db = "school_project";

$data = mysqli_connect($host,$user,$password,$db);

$id = $_GET['student_id'];

$sql ="SELECT * FROM user WHERE id = '$id'";

$result = mysqli_query($data,$sql);

$info=$result->fetch_assoc();

if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $query= "UPDATE user SET username='$name',email='$email',phone='$phone',password='$password' WHERE id = '$id ";

    $result2 = mysqli_query($data,$query);

    if($result2)
    {
        header("location:view_student.php");
       
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Page</title>
     <!--bootstrap link added-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
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
</head>
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
        <h1>Update Student</h1> <br>
        
        <div class="div_deg">
            <form action="#"method="POST">
              <div>
              <label for="">Username</label>
              <input type="text" name="name" value="<?php echo "{$info['username']}"; ?>">
              </div>
              <div>
              <label for="">Email</label>
              <input type="email" name="email" value="<?php echo "{$info['email']}"; ?>">
              </div>
              <div>
              <label for="">Phone</label>
              <input type="number" name="phone" value="<?php echo "{$info['phone']}"; ?>">
              </div>
              <div>
              <label for="">Password</label>
              <input type="text" name="password" value="<?php echo "{$info['password']}"; ?>">
              </div> <br>
              <div>
             
              <input class="btn btn-primary" type="submit" name="update"value="Update">
              </div>
            </form>
        </div>
       
    </div>

</center>











    
<!--js link added-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
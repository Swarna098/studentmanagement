<?php




$host ="localhost";

$user = "root";

$password = "";

$db = "school_project";

$data = mysqli_connect($host,$user,$password,$db);

$name = $_SESSION['username'];

$sql = "SELECT * FROM user WHERE username ='$name'";

$result = mysqli_query($data,$sql);

$info = mysqli_fetch_assoc($result);

if(isset($_POST['update_profile']))
{
    $s_email = $_POST['email'];
    $s_phone = $_POST['phone'];
    $s_password = $_POST['password'];
}

$query= "UPDATE user SET email='$s_email',phone='$s_phone',password='$s_password' WHERE username = '$name' ";

$result2 = mysqli_query($data,$query);

    if($result2)
    {
        header("location:student_profile.php");
       
    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_profile</title>
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
    <a href="">Student Dashboard</a>
    <div class="logout">
        <a href="logout.php" class="btn btn-primary">Logout</a>
    </div>
    </header>

    <aside>
        <ul>
        <li><a href="student_profile.php">My Profile</a></li>
            <li><a href="">My Courses</a></li>
            <li><a href="">My Result</a></li>
            
        </ul>
    </aside>

    
<center>
  
    
  <div class="content">
  <h1>Update Profile</h1>
    <br>
      <form action="#" method="POST">
          <div class="div_deg">
         
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
          </div>
          <div>
              <input class="btn btn-primary" type="submit" name="update_profile" value="Update">
          </div>
          </div>
      </form>
  </div>

</center>








    
<!--js link added-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
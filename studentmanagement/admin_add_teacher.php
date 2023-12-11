<?php


$host ="localhost";

$user = "root";

$password = "";

$db = "school_project";

$data = mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_teacher']))
{
    $t_name= $_POST['name'];

    $t_description= $_POST['description'];

    $file= $_FILES['image']['name'];

    $dst = "./image/".$file;

    $dst_db = "image/".$file;

    move_uploaded_file($_FILES['tmp_name'],$dst);

    $sql = "INSERT INTO teacher (name,description,image)VALUES('$t_name','$t_description','$dst_db')";

    $result = mysqli_query($data,$sql);

    if($result){
        header("location:admin_add_teacher.php");
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teacher</title>
     <!--bootstrap link added-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <style>
          label{
        display: inline-block;
        text-align:right;
        width:130px;
        padding-top:10px;
        padding-bottom:10px;

    }
    .div_deg{
        background-color:skyblue;
        width:500px;
        padding-top:70px;
        padding-bottom:70px;
    }
    .content{
        margin-top:40px;
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

    <div class="content">
        <center>
        <h1>Add Teacher</h1> <br>
        <div class="div_deg">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="">Teacher Name</label>
                    <input type="text" name="name">
                </div> <br>
                <div>
                    <label for="">Description</label>
                  <textarea style="width:180px;" name="description"></textarea>
                </div> <br>
                <div>
                    <label for="">Image</label>
                    <input type="file" name="image">
                </div> <br>
                <div>
                    
                    <input type="submit" class="btn btn-primary" name="add_teacher" value="Add Teacher">
                </div>
            </form>
        </div> <br>
        </center>
       
    </div>












    
<!--js link added-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
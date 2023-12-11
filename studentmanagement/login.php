<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
   

     <!--bootstrap link added-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

     <style>
         .form__deg{
    padding-top: 200px;
}
.label__deg{
    display: inline-block;
    width: 100px;
    color: skyblue;
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: right;
}
.login__form{
    background-color: black;
    width: 400px;
    padding-bottom: 70px;
    padding-top: 70px;
}
.title__deg{
    background-color: skyblue;
    color: white;
    text-align: center;
    font-weight: bold;
    width: 400px;
    padding-top:10px;
    padding-bottom:10px;
    font-size:20px
}
.body__deg{
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-size:100% 100%;
}
     </style>
   
</head>
<body  class="body__deg">
    
<center>
    <div class="form__deg">
    <center class="title__deg">
            login Form

            <h4>
                <?php
                error_reporting(0);
                session_start();
                session_destroy();
                
                echo $_SESSION['loginMessage'];
                ?>
            </h4>
        </center>
        <form class="login__form" action="login_check.php" method="POST">

        
            <div>
                <label class="label__deg" for="">Username</label>
                <input type="text" name="username">
            </div>
           <div>
               <label class="label__deg" for="">Password</label>
               <input type="password" name="password">
           </div>
           <div>
               <input class="btn btn-primary" type="submit" name="submit" value="login">
           </div>
        </form>
    </div>
</center>





<!--js link added-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php 


$host ="localhost";

$user = "root";

$password = "";

$db = "school_project";

$data = mysqli_connect($host,$user,$password,$db);

$sql = "SELECT * FROM teacher";

$result = mysqli_query($data,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_Management</title>
    <!--font awesome link added-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--bootstrap link added-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--css link added-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    


<!--Navbar section start-->

<div class="navbar1">
    <div class="row">
        <div class="col-6" >
            <h1 style="position:relative;" class="h4 pt-3 pb-2 ms-5"><span class="text-light"><i class="fa-solid fa-graduation-cap"></i> E D U</span> C A T I O N</h1>
        </div>
        <div class="col-6 ">
            <nav class="navbar navbar-expand-lg">
                <ul style="position:relative;" class="navbar-nav ms-5">
                    <li class="nav-item"><a class="nav-link ms-3" href="">HOME</a></li>
                    <li class="nav-item"><a class="nav-link ms-3" href="">CONTACT</a></li>
                    <li class="nav-item"><a class="nav-link ms-3" href="">ADMISSION</a></li>
                  <li class=""><a class="btn btn-success mt-1" href="login.php">Log In</a></li>

                </ul>
            </nav>
        </div>
        
    </div>
</div>

<!--Navbar section end-->

 <!--slider section start-->

 <section class="slider">
        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            
          </div>
          <div class="carousel-inner">
           
            <div class="carousel-item  active">
              <img src="Image/education2.png" class="d-block w-100" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h5 ><span >WE WILL HELP TO GIVE YOU A <br> GOOD FUTURE</span></h5>
                <p >Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br> Alias officiis commodi at. Officiis, libero beatae!</p>
                <button class="btn btn-primary">Read More</button>
              </div>
            </div>
            <div class="carousel-item">
              <img src="Image/slider3.webp" class="d-block w-100" alt="">
              
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
           
          </button>
        </div>
       </section> <br> <br> <hr>

        <!--slider section end-->

         <!--about section start-->
         <div class="container mb-3">
           <div class="row">
             <div style="width:50%;" class="col-6 mt-3">
        
         <h1 style="text-align: justify; font-weight: 600;">Best Education for Career <br> and Skill Development</h1>
         <p class="pt-2 pb-2" style="text-align: justify; color: rgb(7, 74, 77);">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae consequuntur necessitatibus suscipit, cum quas, natus magni sapiente rem reiciendis itaque saepe et nihil soluta aperiam eius impedit quia illo! Obcaecati tenetur dolor molestias voluptas, animi ut deserunt officia esse possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, assumenda? Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, perspiciatis.</p>
         <button class="btn btn-primary mt-3">Sign Up For Free</button> 
             </div>
             <div style="width:50%;" class="col-6 mt-3">
               <img style="height: 450px; width: 500px; margin-left: 80px;" src="Image/about1.webp" alt="">
             </div>
           </div>
         </div>
         <!--another section of about-->
         <div class="container mt-3">
           <div class="row">
             <div style="width:50%;" class="col-6">
              <video width="500" height="450" controls>
                <source src="Image/pexels_videos_1580507 (1080p).mp4" type="video/mp4">
               
              </video>
              
             </div>
             <div style="width:50%;" class="col-6">
              <h1 style="text-align: justify; font-weight: 600; padding-top: 70px;">Turn Your Ambition into a <br> Success Story</h1>
              <p class="pt-2 pb-2" style="text-align: justify; color: rgb(7, 74, 77);">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae consequuntur necessitatibus suscipit, cum quas, natus magni sapiente rem reiciendis itaque saepe et nihil soluta aperiam eius impedit quia illo! Obcaecati tenetur dolor molestias voluptas, animi ut deserunt officia esse possimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, assumenda? Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, perspiciatis.</p>
              <button class="btn btn-primary mt-4">Sign Up For Free</button> 
             </div>
           </div>
         </div> <br> <br>
         <hr>


         <!--about section end-->


          <!--team section start-->

          <section class="team">
            <div class="container mb-3">
              <h1 class="h2 text-center pt-5 pb-3 text-primary"><b>OUR TEAM</b></h1>
              <p class="text-center pb-3 ps-5 pe-5 ms-5 me-5 ">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
                   


          <div class="container">
            <div class="row">
                <div class="col-6 mt-4 ">
                    <div style="margin: 20 px 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="card mb-3 " style="max-width: 300px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img style="height: 130px; width: 130px; margin: 40px 20px;" src="image/team-1.jpg" class="img-fluid rounded-circle" alt="">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 style=" background: -webkit-linear-gradient(#4b6cb7 0%, #182848 100%);
                              -webkit-background-clip: text;
                              -webkit-text-fill-color: transparent;" class="card-title"><b>Walter White</b></h5>
                              <p>Chief Executive Officer</p>
                              <p class="card-text">Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                              <i class="fa-brands fa-facebook"></i>
                          <i class="fa-brands fa-instagram"></i>
                          <i class="fa-brands fa-twitter"></i>
                          <i class="fa-brands fa-linkedin"></i>
                
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-6 mt-1">
                    <div style="margin: 20px 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="card mb-3" style="max-width: 500px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img style="height: 130px; width: 130px; margin: 40px 20px;" src="image/team-2.jpg" class="img-fluid rounded-circle" alt="">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5  style=" background: -webkit-linear-gradient(#4b6cb7 0%, #182848 100%);
                              -webkit-background-clip: text;
                              -webkit-text-fill-color: transparent;" class="card-title"><b>Sarah Jhonson</b></h5>
                              <p>CTO</p>
                              <p class="card-text">Quisquam facilis cum velit laborum fuga rerum quia</p>
                              <i class="fa-brands fa-facebook"></i>
                              <i class="fa-brands fa-instagram"></i>
                              <i class="fa-brands fa-twitter"></i>
                              <i class="fa-brands fa-linkedin"></i>
                    
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                </div>
            </div>
        </div> <br>
        <div class="container">
            <div class="row">
                <div  class="col-6">
                    <div style="margin: 20px 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="card mb-3" style="max-width: 500px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img style="height: 130px; width: 130px; margin: 40px 20px;" src="image/team-3.jpg" class="img-fluid rounded-circle" alt="">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5  style=" background: -webkit-linear-gradient(#4b6cb7 0%, #182848 100%);
                              -webkit-background-clip: text;
                              -webkit-text-fill-color: transparent;" class="card-title"><b>William Anderson</b></h5>
                              <p>Product Manager</p>
                              <p class="card-text">Aut maiores voluptates amet et quis praesentium qui senda para</p>
                              <i class="fa-brands fa-facebook"></i>
                          <i class="fa-brands fa-instagram"></i>
                          <i class="fa-brands fa-twitter"></i>
                          <i class="fa-brands fa-linkedin"></i>
                
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-6">
                    <div style="margin: 20px 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="card mb-3" style="max-width: 500px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img style="height: 130px; width: 130px; margin: 40px 20px;" src="image/team-4.jpg" class="img-fluid rounded-circle" alt="">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5  style=" background: -webkit-linear-gradient(#4b6cb7 0%, #182848 100%);
                              -webkit-background-clip: text;
                              -webkit-text-fill-color: transparent;" class="card-title"><b>Amanda Jepson</b></h5>
                              <p>Accountant</p>
                              <p class="card-text">Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                              <i class="fa-brands fa-facebook"></i>
                          <i class="fa-brands fa-instagram"></i>
                          <i class="fa-brands fa-twitter"></i>
                          <i class="fa-brands fa-linkedin"></i>
                
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        
        <br><br>
        <hr>
        

           </section>


         <!--team section end-->


  <!--course section start-->
 <center>
     <h1 class="text-primary">Our Courses</h1>
 </center>
<section class="course">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="course__img" src="image/course-1.avif" alt="">
               <h3 class="text-primary">Web Development</h3>
            </div>
            <div class="col-md-4">
            <img class="course__img" src="image/course-2.avif" alt="">
               <h3 class="text-primary">Graphics Design</h3>
                </div>
                <div  class="col-md-4">
                <img class="course__img" src="image/course-3.avif" alt="">
               <h3 class="text-primary">Digital Marketing</h3>
                </div>
        </div>
    </div>
</section> <br> <hr>





   <!--course section end-->

 
   <!--contact section start-->

   <div class="container mb-3">
            <h1 class="h2 text-center pt-5 pb-3 text-primary"><b>ADMISSION FORM</b></h1>
            <p  class="text-center pb-3 ps-5 pe-5 ms-5 me-5 ">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p>
          </div>
          
          
          <div class="container mb-5">
            <div class="row">
                <div style="width: 50%;" class="col-6 mt-2">
                    <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                      <div class="mb-3 pt-5 ps-5 pe-5">
            
                       <form action="data_check.php" method="POST">
                       <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your name" name="name">
                      </div> <br>
                      <div class="mb-3 ps-5 pe-5">
                
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your E-mail" name="email">
                      </div> <br>
          
                    <div class="mb-3 ps-5 pe-5">
                
                        <input type="phone" class="form-control" id="exampleFormControlInput1" placeholder="Your Phone" name="phone">
                      </div> <br>
                      <div class="mb-3 ps-5 pe-5">
                        
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Message" name="message"></textarea>
                      </div> <br>
                      <input  style="border-radius: 10px; margin-left:200px;width:150px" class="btn btn-primary  mb-3 mt-5" id="submit" type="submit" name="apply" value="apply">
                       </form>

                     
                </div> <br>
                    </div>
                
                <div style="width: 50%;" class="col-6 mt-2">
                  <div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class=" ps-5 pe-5">
                      <h1 class="h5 pt-5"><b><i class="fa-solid fa-location-dot"></i> Location</b></h1>
            <p class="text-secondary">Mukto Bangla Shopping Complex, Mirpur-1, <br> Dhaka-1216</p>
            <h1 class="h5"><b><i class="fa-solid fa-envelope"></i> E-mail</b></h1>
            <p class="text-secondary">info@gmail.com</p>
            <h1 class="h5"><b><i class="fa-solid fa-phone"></i> Call</b></h1>
            <p class="text-secondary">01234567899</p> 
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3650.60231112722!2d90.35077447381924!3d23.797171978638463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sdewan%20ict!5e0!3m2!1sbn!2sbd!4v1697432086373!5m2!1sbn!2sbd" width="470" height="216" style="border:0; margin: 24px 40px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
            </div>
          </div>
          <hr>
         

 <!--newsletter-->
 <div style="width: 100%;" class="container3 mb-3">
            <h1 class="h2 text-center pt-5 pb-3 text-primary"><b>Join Our Newsletter</b></h1>
            <p class="text-center pb-3 ps-5 pe-5 ms-5 me-5 ">Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          
          
            <div style="width: 35rem; margin-left: 380px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Enter Your E-mail Addess" aria-label="Recipient's username" aria-describedby="button-addon2">
              <button style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;" class="btn btn-primary ps-3 pe-3" type="button" id="button-addon2">Subscribe</button>
          </div> 
          <br><br>
          </div> 
            
          
            <!--useful links-->
            <div class="container4">
              <div class="row">
                <div class="col-3 mt-3 ">
             <h3 class="ms-5 text-primary"><b>E D U C A T I O N</b></h3>
             <p  class="ms-5" class="text-secondary">
                Mukto Bangla Shopping Complex, <br> Mirpur-1, <br>
                Dhaka-1216</p>
              <p  class="ms-5" class="text-secondary"><b class="text-dark">Phone:</b> +1 5589 55488 55</p>
              <p  class="ms-5" class="text-secondary"><b class="text-dark">E-mail: </b> info@example.com</p> <br><br> <br>
                </div>
                <div class="col-3 mt-3 ">
             <h3  class="h5">Useful Links</h3>
             <div class="list1">
              <li><a href="home.html"><i class="fa-solid fa-chevron-right"></i> Home</a></li>
              <li><a href="about.html"><i class="fa-solid fa-chevron-right"></i> About Us</a></li>
              <li><a href="history.html"><i class="fa-solid fa-chevron-right"></i> History</a></li>
              <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Terms of service</a></li>
              <li><a href="#"><i class="fa-solid fa-chevron-right"></i> Privacy Policy</a></li>
             </div>
                </div>
                <div class="col-3 mt-3 ">
            <h3 class="h5">Our Services</h3>
            <div class="list1">
              <li><a href=""><i class="fa-solid fa-chevron-right"></i> Web Design</a></li>
              <li><a href=""><i class="fa-solid fa-chevron-right"></i> Web Development</a></li>
              <li><a href=""><i class="fa-solid fa-chevron-right"></i> 
                Product Management</a></li>
              <li><a href="#"><i class="fa-solid fa-chevron-right"></i> 
                Marketing</a></li>
              <li><a href="#"><i class="fa-solid fa-chevron-right"></i>  Graphics Design</a></li>
             </div>
                </div>
                <div class="col-3 mt-3 mb-5">
             <h3 class="h5">Our Social Networks</h3> <br>
             
             <p style="text-align: justify;" >Cras fermentum odio eu feugiat <br> lide par naso tierra videa magna <br> derita valies</p> <br>
             <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-linkedin"></i>
          
                </div>
              </div>
            </div>
            <!--footer section-->
            <div class="container5">
              <div class="row">
                <div class="col-6 mb-3">
             <p style="margin-left: 100px;" class="text-light mt-4 ps-5 "><i class="fa-solid fa-copyright"></i> Copyright <b> Education</b>. All Rights Reserved</p>
                </div>
                <div class="col-6">
             <p class="text-light mt-4 ps-5 para ">Designed by Swarna Akter</p>
                </div>
              </div>
            </div>
          


  <!--contact section end-->





 <!--js link added-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
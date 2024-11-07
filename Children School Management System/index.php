
<?php
include('./config/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($db,"insert into message (Name,Email_Address,Mobile_Number,Message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Naub Staff Children School </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="color.css">
    <link rel="shortcut icon" href="assets/images/gallery/naub-children-school.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
    <body>
    
        <?php include 'config/head.php'; ?>
    
     <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>


   


            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img class="d-block w-100" src="assets/images/slider/sliders_1.jpg" alt="first slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">NIGERIAN ARMY UNIVERSITY BIU STAFF CHILDREN SCHOOL.</h5>
            
                         
                    
                    </div>
                </div>

                 <div class="carousel-item ">
                    <img class="d-block w-100" src="assets/images/slider/sliders_2.jpg" alt="Second slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">NAUB STAFF CHILDREN SCHOOL BIU.</h5>
            
                         
                    
                    </div>
                </div>

                <div class="carousel-item ">
                    <img class="d-block w-100" src="assets/images/slider/sliders_3.jpg" alt="Third slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">NIGERIAN ARMY UNIVERSITY BIU STAFF CHILDREN SCHOOL.</h5>
            
                         
                    
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/slider/sliders_4.jpg" alt="four slide">
                      <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">NAUB STAFF CHILDREN SCHOOL BIU.</h5>
            
                         
                    
                    </div>
              
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/slider/slider_5.jpg" alt="five slide">
                      <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">NAUB STAFF CHILDREN SCHOOL BIU.</h5>
            
                         
                    
                    </div>
              
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div><br>

    
    <!--  ************************* About Us Starts Here ************************** -->
        
    <section id="about_us" class="about-us">
        <div class="row no-margin">
            <div class="col-sm-6 image-bg no-padding">
                
            </div>
            <div class="col-sm-6 abut-yoiu">
                <h3>About The School</h3>
<!--<?php
$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
while ($row=mysqli_fetch_array($ret)) {
?>

    <p><?php  echo $row['PageDescription'];?>.</p><?php } ?>-->
    <span style="text-align: justify;">
        The NAUB Staff Children School was established on the first of November 2021 by the
Management of the University with the aim to provide a quality early education to the university community and beyound. The first academic session commenced with thirty (30) pupils andnine staff. The school has adopted a strict recruitment process to ensure quality staff inoder toachieve the mission and vision of the it's establishment and to compete with country's high ranking schools. The stream was crèche, pre nursery, nurseries 1-3 and primary 1-4. Now, our
primary classes are 1-6 with over 300 pupils and twenty one (21) staff. The school is locatedinthe Nigerian Army University Biu, Gombe Road Biu. Borno State, Nigeria.
<h3>Mission and vision</h3>
1.To build a solid educational foundation 2. To equip our young pupils with skills and mindset
to thrive and take up the world 3. To forster an enthusiastic, creative community of learnersprepared to continue their intellectual, immortional and physical development 4. To educateall
pupils to the highest level of academic achievement, to enable them to reach and expandtheir
potential, and to prepare them to become productive, responsible, ethical, creative and
compassionate members of the society 5. To prepare young pupils to pursue their aspirationsand contribute to the world 6. To strive and support the environment by building a more inclusivecurriculum, addressing a range of learning styles 7. To create an opportunity for the community and parents to participate in learning and decision making partnerships 8. Highly effectiveteachers focused on improve pupils outcomes through their commitment for ongoing
educational development, quality teaching, evidence based practice coaching and mentoringand collaboration.
    </span>
            </div>
        </div>
    </section>    
    <!--=======================================Develper================================-->
    <div id="id01" class="w3-modal w3-center">
    <div class="w3-modal-content w3-card-8 w3-animate-top">
      <header class="w3-container w3-theme"> 
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn">&times;</span>
        <h2><b>A.B.B Developers & Graphics Design.</b></h2>
      </header>
      <div class="w3-padding" >
        <img src="./images/abblogos.png" style="width: 30%;">
        <p style="font-size: 20px;"><table class="w3-center">
  <tr>
    <th colspan="2" class="w3-center" style="font-size: 18px;">Contact Us</th>
  </tr>
  <tr>
    <td>Call</td>
    <td><button class="btn btn-success btn-sm"><i class="fa fa-facebook-square"></i> +2349039935629</button> <button class="btn btn-success btn-sm"><i class="fa fa-facebook-square"></i> +2348028629562</button></td>
  </tr>
  <tr>
    <td>WhatsApp</td>
    <td><a href="https://wa.me/message/R7J3AEAVWK4AM1" target="block"><button class="btn btn-success btn-sm"><i class="fa fa-facebook-square"></i> WhatsApp</button></a></td>
  </tr>
  <tr>
    <td>Facebook <i class="fa fa-facebook-square"></i></td>
    <td><a href="https://web.facebook.com/abb.developers.graphics" target="block"> <button class="btn btn-success btn-sm"><i class="fa fa-facebook-square"></i> Follow Us</button></a></td>
  </tr>
  <tr>
    <td>Instagram <i class="fa fa-instagram"></td>
    <td><a href="https:www.lnstagram.com/a.b.b.developers" target="block"> <button class="btn btn-success btn-sm"><i class="fa fa-instagram"></i> Follow Us</button></a></td>
  </tr>
  <tr>
    <td>Twitter <i class="fa fa-twitter"></i></td>
    <td><a href="https:www.twitter.com/abbdevelopers" target="block"> <button class="btn btn-success btn-sm"><i class="fa fa-twitter"></i> Follow Us</button></td>
  </tr>
</table></p>
      </div>
      <footer style="text-align: center;" class="w3-container w3-theme">
        <h3><i>Your Trust is Our Priority</i></h3>
      </footer>
    </div>
</div>
    
            <!--  ************************* Gallery Starts Here ************************** -->
        <div id="gallery" class="gallery">    
           <div class="container">
              <div class="inner-title">

                <h2>Our Gallery</h2>
                <p>View Our School Gallery</p>
            </div>
              <div class="row">
                

        <div class="gallery-filter d-none d-sm-block">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Primary</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Nursery</button>
            <button class="btn btn-default filter-button" data-filter="spray"> School Lab</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">library</button>
        </div>
        <br/>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/New/gallery_1.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="assets/images/gallery/New/gallery_2.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/gallery/New/gallery_3.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/gallery/New/gallery_4.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/New/gallery_5.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/New/gallery_6.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/gallery/New/gallery_7.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/New/gallery_8.jpg" class="img-responsive">
            </div>

          

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/gallery/New/gallery_9.jpg" class="img-responsive">
            </div>

        </div>
    </div>
       
       
       </div>
        <!-- ######## Gallery End ####### -->
    
    
     <!--  ************************* Contact Us Starts Here ************************** -->
    
    <section id="contact_us" class="contact-us-single">
        <div class="row no-margin">

            <div  class="col-sm-12 cop-ck">
                <form method="post">
                <h2 >Contact Form</h2>
                    <div class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required disabled></div>
                    </div>
                    <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm"  required disabled></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required disabled></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label>Enter  Message:</label></div>
                        <div class="col-sm-8">
                          <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required disabled></textarea>
                        </div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                         <button class="btn btn-success btn-sm" type="submit" name="submit" hidden>Send Message</button>
                        </div>
                </div>
            </form>
            </div>
     
        </div>
    </section>
    
    
    
    
    
    <!-- ################# Footer Starts Here#######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">
       
                <div class="col-md-6 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#about_us">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="login" href="./pages/login.php" target="block">Login</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="Check_Result" href="check_result.php">Check Result</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="gallery" href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#contact_us">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">

<!--<?php
$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
while ($row=mysqli_fetch_array($ret)) {
?>


                        <?php  echo $row['PageDescription'];?> <br>
                        Phone: <?php  echo $row['MobileNumber'];?> <br>
                        Email: <a href="mailto:<?php  echo $row['Email'];?>" class=""><?php  echo $row['Email'];?></a><br>
                        Timing: <?php  echo $row['OpenningTime'];?>
                    </address>

        <?php } ?> !-->

        P.M.B, 1500 Biu-Gombe Road Biu, Borno State.<br>
            Phone: 1122334455<br>
            Email: info@naub.edu.ng<br>
            Timing: Monday to Friday, 8:30 Am To 1:30 Pm.



                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container"><center>
         Copyright &copy; 2023 Naub Staff Children School Biu. All right reserved.<br><i>Designed By:</i> <u><a href="javascript:void(0)" onclick="document.getElementById('id01').style.display='block'">A.B.B Developers & Graphics Design.</u></a>
                </center>
     
            </div>

        </div>
    
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>



</html>
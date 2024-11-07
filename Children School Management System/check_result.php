<?php
    session_start();
    session_destroy();
    session_start();
include('./config/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Result Check</title>
  <link rel="shortcut icon" href="assets/images/gallery/naub-children-school.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body>
        <?php include 'config/head.php'; ?>
    <div class="content">
      <section id="about_us" class="about-us">
        <div class="row no-margin">
            <div class="col-sm-6 image-bg">
               
            </div>
            <div class="col-sm-6 abut-yoiu">
                <center><h3>Check Result Here</h3></center>
                <?php

          if (isset($_POST['Check'])){
            if(isset($_POST['Reg_No'], $_POST['Term'], $_POST['c_Session'], $_POST['class'])){
              $class = htmlspecialchars(htmlentities(stripslashes($_POST['class'])));
              $Reg_No = htmlspecialchars(htmlentities(stripslashes($_POST['Reg_No'])));
              $Term = htmlspecialchars(htmlentities(stripslashes($_POST['Term'])));
               $c_Session = htmlspecialchars(htmlentities(stripslashes($_POST['c_Session'])));
                if (!empty($Reg_No)) {
                  if (!empty($Term)){
                      $query="SELECT count(*) FROM $class where Addmission_No=? and Term=? and Session=?";
                        $stmt=mysqli_prepare($db,$query);
                        mysqli_stmt_bind_param($stmt,"sss",$Reg_No,$Term,$c_Session);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_bind_result($stmt,$cnt);
                        mysqli_stmt_fetch($stmt);
                        //echo $cnt;
                        mysqli_stmt_close($stmt);
                        mysqli_close($db);
                        /*$affected_rows=mysqli_stmt_affected_rows($stmt);
                        $response=@mysqli_query($dbc,$query);
                        echo $affected_rows;
                        */
                        if($cnt==1)
                        {
                          $_SESSION['Addmission_No']=$Reg_No;
                          if ($class =='nursery_result') {
                            echo '<script type="text/javascript">
                            window.location = "nursery-result.php";
                          </script>';
                          }else{
                            echo '
                          <script type="text/javascript">
                            window.location = "Primary-result.php";
                          </script>';
                          }
                          
                        }else{
                          echo '<a style="color: red;">Invalid Result Details Check and try Again.</a>';
                        }
                  }else{
                    echo 'Term field Empty!';
                  }
                }else{
                  echo 'Registration Number field Empty!';
                }
              }
            }
/*=====================================================================================================================*/
          ?>
        <form method="POST" id="Check">
         <div class="col-lg-6">
          <label class="leb">Class:<span style="font-size:15px;color:red">*</span></label>
          <select class="form-control" name="class" required="required" title="Student Class">
            <option value="">Select</option>
            <option value="nursery_result">Nursery</option>
            <option value="primary_result">Primary</option>
          </select>
          </div>

          <div class="col-lg-6">
            <label class="leb">Registration No:<span style="font-size:15px;color:red">*</span></label>
          <input class="form-control" name="Reg_No" required="required" title="Student Registration Number">
          </div>

          <div class="col-lg-6">
            <label class="leb">Term:<span style="font-size:15px;color:red">*</span></label>
          <select class="form-control" name="Term" required="required" title="Term">
            <option value="">Select</option>
            <option value="First">First</option>
            <option value="Second">Second</option>
            <option value="Third">Third</option>
          </select>
          </div>

          <div class="col-lg-6">
            <label class="leb">Academic Session:<span style="font-size:15px;color:red">*</span></label>
          <select class="form-control" name="c_Session" required="required" title="Session">
              <option value="">Select</option>
              <?php
            $query="SELECT * from session ORDER BY id DESC";

            $result=mysqli_query($db, $query);
            if ($result) {
              if(mysqli_num_rows($result) >0){
                while($row=mysqli_fetch_assoc($result)){
                  $Session=$row['Session']
          ?>
              <option value="<?php echo $Session;?>"><?php echo $Session;?></option>
              <?php
          }
            }
          }else{
            echo mysqli_error($db);
          }
        ?>
            </select>
          </div>
          <div class="col-sm-8 leb">
              <button class="btn btn-success btn-sm" type="submit" name="Check">Check Result</button>
            </div>
        </form>
            </div>
        </div>
    </section>
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
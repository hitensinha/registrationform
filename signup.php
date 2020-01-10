<?php 
$conn=mysqli_connect("localhost","root","","task");
if(isset($_POST['save']))
{
    $name=$_POST['name'];
   $email=$_POST['email'];
   $designation=$_POST['designation'];
   $mobile=$_POST['mobile'];
   $date=$_POST['date'];
   $salary=$_POST['salary'];
   $city=$_POST['city'];
   $allowance=$_POST['allowance'];
   $state=$_POST['state'];
   $address=$_POST['address'];
///////////////////image codeing...//////////////////////////////////
   //      $target_dir = "image/";
	//    $file= basename($_FILES['fileupload']['name']);
   //      $fbase=$target_dir . $file;
   //     $check = move_uploaded_file($_FILES["fileupload"]["tmp_name"],$fbase);
	
	// if($check)
	// {
	// 	echo "uploaded";
	// }
	
	// else
	// {
	// 	echo "Not Upload";
	// }
    
    $sql="insert into register (name,email,designation,mobile,date,salary,city,allowance,state,address) values ('$name','$email','$designation','$mobile','$date','$salary','$city','$allowance','$state','$address')";
    
                   
  
      
    //print_r($recordset);
    
    //$sql="insert into register (name,email,password,mobile,age,education,experience,technology,college,reference,address,file) values ('$name','$email','$password','$mobile','$age','$education','$experience','$technology','$college','$reference','$address','$file')";
    
  
    $Result=mysqli_query($conn,$sql);
    if($Result)
        {
            //echo "succcesssss";
        echo "<script type= 'text/javascript'>alert('your data has been submit...')</script>";
        echo "<script type= 'text/javascript'>window.location.href='view.php'</script>";
           // header('Location:tables-data-table.php');
        }
    else
    {
       echo "<script type= 'text/javascript'>alert('your data has been not submit...')</script>";
      
    }
}

?>
  
          




<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from oscar.thinqteam.com/collapse-nav/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 May 2019 05:51:58 GMT -->
   <head>
      <script src="../../cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
      <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.png">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Register</title>
      <!-- CSS -->
      <link href="assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
      <link href="assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
      <link href="../../cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.css" rel="stylesheet" type="text/css">
      <link href="../../cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" type="text/css">
      <link href="../../cdnjs.cloudflare.com/ajax/libs/mediaelement/4.1.3/mediaelementplayer.min.css" rel="stylesheet" type="text/css">
      <link href="../../cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet" type="text/css">
      <link href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="assets/css/style.css" rel="stylesheet" type="text/css">
      <!-- Head Libs -->
      <script src="../../cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
   </head>
   <body class="body-bg-full profile-page" style="background-image: url(assets/demo/night.jpg)">
   
      <div id="wrapper" class="row wrapper">
         <div class="col-10 ml-sm-auto col-sm-8 col-md-4 ml-md-auto login-center mx-auto">
            <div class="navbar-header text-center">
               <a href="index-2.html">
               <h3 style="font-size:14px;">Employee Registration Form</h3>
               </a>
            </div>
            <!-- /.navbar-header -->
            <form class="form-material" id="loginform" method="POST" action="signup.php" enctype="multipart/form-data">
          
            <div class="form-group">
                  <input class="form-control"type="text" required="" placeholder="Name" name="name">
                  <label>Employee Name</label>
               </div>
               <div class="form-group">
                  <input class="form-control" type="text" required="" placeholder="Mobile" name="mobile" maxlength="10" >
                  <label>Mobile No.</label>
               </div>
               <div class="form-group">
                  <select class="form-control" style="font-weight: bold" name="designation" >
                     <option value="null" selected>Designation</option>
                     <option value="HR">HR</option>
                     <option value="SE">SE</option>
                     <option value="DBA">DBA</option>
                     <option value="ST">ST</option>
                  </select>
               </div>
               <div class="form-group">
                  <input class="form-control" type="date" required="" placeholder ="date" name="date">
                  <label>Date of Joining</label>
               </div>
               <div class="form-group">
                  <input class="form-control" type="number" required="" placeholder="Salary" name="salary">
                  <label>Basic Salary</label>
               </div>
               <div class="form-group">
                  <input class="form-control" type="text" required="" placeholder="Allowance" name="allowance">
                  <label>Allowance</label>
               </div>
                 <div class="form-group">
                  <input class="form-control" type="email" required="" placeholder="Email" name="email">
                  <label>Email id</label>
               </div>
               <div class="form-group">
                  <textarea  maxlength="120"class="form-control" id="l38" rows="3" name="address"></textarea>
                     <label for="l38">Address</label>
               </div>
              
                  
               <div class="form-group">
                  <input class="form-control" type="text" required="" placeholder="City" name="city">
                  <label>City</label>
               </div>       

             <div class="form-group">
                  <select class="form-control" style="font-weight: bold" name="state" >
                     <option value="null" selected>State</option>
                     <option value="CG">CG</option>
                     <option value="MP">MP</option>
                     <option value="MH">MH</option>
                     <option value="HR">HR</option>
                     <option value="DL">DL</option>
                     <option value="UP">UP</option>
                  </select>
               </div>
            

               <div class="form-group text-center no-gutters mb-5">
                  <button class="btn btn-info btn-lg btn-block text-uppercase ripple" type="submit" name="save">Register</button>
               </div>
            </form>
            <!-- /.form-horzontal -->
            <footer class="col-sm-12 text-center">
               <hr>
            </footer>
         </div>
         <!-- /.login-center -->
      </div>
      <!-- /.body-container -->
      <!-- Scripts -->
      <script src="../../cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="../../cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="assets/js/material-design.js"></script>
           
   </body>
  </html>
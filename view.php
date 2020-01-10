<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from oscar.thinqteam.com/collapse-nav/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 May 2019 05:39:05 GMT -->
<head>
    <link rel="stylesheet" href="assets/css/pace.css">
    <script src="../../cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/demo/favicon.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>View Data</title>
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
    <link href="assets/vendors/weather-icons-master/weather-icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/vendors/weather-icons-master/weather-icons-wind.min.css" rel="stylesheet" type="text/css">
    <link href="../../cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.25/daterangepicker.min.css" rel="stylesheet" type="text/css">
    <link href="../../cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="../../cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body class="header-dark sidebar-light sidebar-collapse">
   
    <div id="wrapper" class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
        <nav class="navbar">
            <!-- Logo Area -->
            <div class="navbar-header">
                <a href="index-2.html" class="navbar-brand text-center">
                    <img class="logo-expand" alt="" src="assets/demo/logo-expand.png">
                    <img class="logo-collapse" alt="" src="assets/demo/logo-collapse.png">
                    <!-- <p>OSCAR</p> -->
                </a>
            </div>
            <!-- /.navbar-header -->
            <!-- Left Menu & Sidebar Toggle -->
            <ul class="nav navbar-nav">
                <li class="sidebar-toggle"><a href="javascript:void(0)" class="ripple"><i class="material-icons list-icon">menu</i></a>
                </li>
            </ul>
            <!-- /.navbar-left -->
            <!-- Search Form -->
            
            <!-- /.navbar-search -->
            <div class="spacer"></div>
            <!-- Right Menu -->
            <ul class="nav navbar-nav d-none d-lg-flex">
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle ripple" data-toggle="dropdown"><i class="material-icons list-icon">mail_outline</i> <span class="badge badge-pill bg-primary">3</span></a>
                    <div class="dropdown-menu dropdown-left dropdown-card animated flipInY">
                        <div class="card">
                            <header class="card-header">New messages <span class="mr-l-10 badge badge-border bg-primary">3</span>
                            </header>
                           
                            <!-- /.dropdown-list-group -->
                        </div>
                        <!-- /.card-->
                    </div>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown"><a href="#" class="dropdown-toggle ripple" data-toggle="dropdown"><i class="material-icons list-icon">event_available</i> <span class="badge badge-pill bg-primary">9</span></a>
                    <div class="dropdown-menu dropdown-left dropdown-card animated flipInY">
                        <div class="card">
                            <header class="card-header">New notifications <span class="mr-l-10 badge badge-border bg-primary">4</span>
                            </header>
                           
                            <!-- /.dropdown-list-group -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.dropdown-menu -->
                </li>
                <!-- /.dropdown -->
                <li><a href="javascript:void(0);" class="right-sidebar-toggle ripple"><i class="material-icons list-icon">comment</i></a>
                </li>
            </ul>
            <!-- /.navbar-right -->
            <!-- User Image with Dropdown -->
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle ripple" data-toggle="dropdown"><span class="avatar thumb-sm"><img src="assets/demo/users/user-image.png" class="rounded-circle" alt=""> <i class="material-icons list-icon">expand_more</i></span></a>
                    <div
                    class="dropdown-menu dropdown-left dropdown-card dropdown-card-wide">
                        <div class="card">
                            <header class="card-heading-extra">
                                <div class="row">
                                    <div class="col-8">
                                        <h3 class="mr-b-10 sub-heading-font-family fw-300">Scott Adams</h3><span class="user--online">Available <i class="material-icons list-icon">expand_more</i></span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end"><a href="logout.html" class="mr-t-10"><i class="material-icons list-icon">power_settings_new</i> Logout</a>
                                    </div>
                                    <!-- /.col-4 -->
                                </div>
                                <!-- /.row -->
                            </header>
                            <section class="card-header">New notifications <span class="badge badge-border bg-danger mr-l-10">4</span>
                            </section>
                           
                        </div>
    </div>
    </li>
    </ul>
    <!-- /.navbar-right -->
    </nav>
    <!-- /.navbar -->
    <div class="content-wrapper">
        <!-- SIDEBAR -->
        <aside class="site-sidebar scrollbar-enabled clearfix">
            <!-- User Details -->
            <div class="side-user">
                <a class="col-sm-12 media clearfix" href="javascript:void(0);">
                    <figure class="media-left media-middle user--online thumb-sm mr-r-10 mr-b-0">
                        <img src="assets/demo/users/user-image.png" class="media-object rounded-circle" alt="">
                    </figure>
                    <div class="media-body hide-menu">
                        <h4 class="media-heading mr-b-5 text-uppercase">Scott Adams</h4>      </div>
                </a>
                <div class="clearfix"></div>
               
            </div>
            <!-- /.side-user -->
            <!-- Sidebar Menu -->
            <nav class="sidebar-nav">
                <ul class="nav in side-menu">
                    
                        <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">card_travel</i> <span class="hide-menu">Profile </span></a>
                        <ul class="list-unstyled sub-menu">
                           
                            <li><a href="signup.php">Sign Up</a>
                            </li>
                           
                 
                <!-- /.side-menu -->
                                          </ul></li></ul>
            </nav>
            <!-- /.sidebar-nav -->
        </aside>        <!-- /.site-sidebar -->
        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
               
                <!-- /.page-title-left -->
                <div class="page-title-right d-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="signup.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active"> View Tables</li>
                    </ol>
                    
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list">
                <div class="row">
                    <div class="col-md-12 widget-holder">
                        <div class="widget-bg">
                            <div class="widget-heading clearfix">
                                <h5>DataTables</h5>
                            </div>
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6">
                                    <label>select</label>
                                    <select>
                                    <option>select</option>
                                        <option>name</option>
                                        <option>city</option>
                                        <option>mobile</option>
                                        <option>salary</option>
                                </select>
                                </div>
                            </div>
                            <!-- /.widget-heading -->
                            
                              <?php
        

$conn=mysqli_connect("localhost","root","","task");
                  
                    
 $sql="select * from register";
	$Result=mysqli_query($conn,$sql);
	//print_r($recordset);
	?>
                            <div class="widget-body clearfix">
                                <table class="table table-striped table-responsive" data-toggle="datatables">
                                    <thead>
                                        <tr>
                                            <th data-editable>S.ID</th>
                                            <th data-editable>Name</th>
                                            <th data-editable>Mobile</th>
                                            <th data-editable>Email</th>
                                             <th data-editable>Address</th>
                                            
                                            <th data-editable>city</th>
                                            <th data-editable>State</th>
            
                                  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
	$count=1;
	while($row=mysqli_fetch_array($Result))
	{
		?><tr>
                        <td><?=$count++?></td>
                        
                        <td><?=$row['name'];?></td>
                        <td><?=$row['mobile'];?></td>
                        <td><?=$row['email'];?></td>
                       <td><?=$row['address'];?></td>
                        <td><?=$row['city'];?></td>
                        <td><?=$row['state'];?></td>
                     
</tr>
       
<?php
                
					}
                            
	 ?>          
                                        
                                        
                                       
                                                                           </tbody>
                                   
                                </table>
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.widget-bg -->
                    </div>
                    <!-- /.widget-holder -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.widget-list -->
        </main>
        <!-- /.main-wrappper -->
        <!-- RIGHT SIDEBAR -->
   
        <!-- CHAT PANEL -->
     
        <!-- /.chat-panel -->
    </div>
    <!-- /.content-wrapper -->
    <!-- FOOTER -->

    </div>
    <!--/ #wrapper -->
    <!-- Scripts -->
    <script src="../../cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/mediaelement/4.1.3/mediaelementplayer.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/js/perfect-scrollbar.jquery.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
</body>


<!-- Mirrored from oscar.thinqteam.com/collapse-nav/tables-data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 May 2019 05:49:25 GMT -->
</html>

 
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <title>ReBounce</title>
        <link href="img/ReBounceFavcon.png" rel="icon">
        <link href="img/ReBounceFavcon.png" rel="apple-touch-icon">
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
        <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet">
        <script src="lib/chart-master/Chart.js"></script>
    </head>

    <body>
        <section id="container">
            <header class="header black-bg">
                <a class="logo"><img src="img/ReBounceCleanWhite.png" width="120"></a>
            </header>
            <aside>
                <div id="sidebar" class="nav-collapse ">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <p class="centered"> <img src="img/UserPic.jpg" class="img-circle" width="100"> </p>
                        <h5 class="centered"></h5>
                        <li class="mt">
                            <a class="active" href="index.php"> <i class="fa fa-dashboard"></i> <span>Purchase Overview</span> </a>
                        </li>
                        <li class="mt">
                            <a href="receipts.php"> <i class="fa fa-cogs"></i> <span>My Receipts</span> </a>
                        </li>
                        <li>
                            <a href="https://www.rebounce.dk/how-it-works/"> <i class="fa fa-question"></i> <span>How it works</span> </a>
                        </li>
                        <li>
                            <a href="https://www.rebounce.dk/store-overview/"> <i class="fa fa-shopping-cart"></i> <span>Store Overview</span> </a>
                        </li>
                        <li>
                            <a href="index.php?logout='1'"> <i class="fa fa-cogs"></i> <span>Logout</span> </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <section id="main-content">
                <section class="wrapper">
                    <div class="row">
                        <div class="col-lg-9 main-chart">
                            <div class="border-head">
                                <?php if (isset($_SESSION['success'])) : ?>
                                    <div class="error success">
                                        <h3>
          <?php  
          	unset($_SESSION['success']);
          ?>
      	</h3> </div>
                                    <?php endif ?>
                                        <?php  if (isset($_SESSION['username'])) : ?>
                                            <?php endif ?>
                            </div>
                            <div class="row mt">
                                <style>
                                    .img-box {
                                        margin-top: 20px;
                                    }
                                    
                                    .img-block {
                                        float: left;
                                        margin-right: 5px;
                                        text-align: center;
                                    }
                                </style>
                                <div class="container main">
                                    <div class="img-box">
                                        <?php
        $host ="localhost";
        $uname = "root";
        $pwd = '';
        $db_name = "userlogin";

        $u = $_SESSION['username'];
        $file_path = 'uploads/';
    
        $result = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
        mysqli_select_db($result,$db_name) or die("Could not select the databse." .mysqli_error());
        $image_query = mysqli_query($result,"select * from receipt where username = '".$u."'");
        while($rows = mysqli_fetch_array($image_query))
        {
            $img_name = $rows['file_name'];
            $img_src = $rows['r_path'];
        ?>
                                            <div class="img-block"> <img src="<?php echo $img_src; ?>" alt="" title="<?php echo $img_name; ?>" width="300" height="200" class="img-responsive" />
                                                <p><strong><?php echo $img_name; ?></strong></p>
                                            </div>
                                            <?php 
        }
    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <footer class="site-footer">
                <div class="text-center">
                    <p> &copy; Copyrights <strong>ReBounce</strong>. All Rights Reserved </p>
                    <div class="credits"> </div>
                    <a href="index.php#" class="go-top"> <i class="fa fa-angle-up"></i> </a>
                </div>
            </footer>
        </section>
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
        <script src="lib/jquery.scrollTo.min.js"></script>
        <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="lib/jquery.sparkline.js"></script>
        <script src="lib/common-scripts.js"></script>
        <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
        <script type="text/javascript" src="lib/gritter-conf.js"></script>
        <!--script for this page-->
        <script src="lib/sparkline-chart.js"></script>
        <script src="lib/zabuto_calendar.js"></script>
        <script type="application/javascript">
            $(document).ready(function () {
                $("#date-popover").popover({
                    html: true
                    , trigger: "manual"
                });
                $("#date-popover").hide();
                $("#date-popover").click(function (e) {
                    $(this).hide();
                });
                $("#my-calendar").zabuto_calendar({
                    action: function () {
                        return myDateFunction(this.id, false);
                    }
                    , action_nav: function () {
                        return myNavFunction(this.id);
                    }
                    , ajax: {
                        url: "show_data.php?action=1"
                        , modal: true
                    }
                    , legend: [{
                            type: "text"
                            , label: "Special event"
                            , badge: "00"
          }
                    , {
                            type: "block"
                            , label: "Regular event"
                        , }
        ]
                });
            });

            function myNavFunction(id) {
                $("#date-popover").hide();
                var nav = $("#" + id).data("navigation");
                var to = $("#" + id).data("to");
                console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
            }
        </script>
    </body>

    </html>
<?php
global $result;
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_database = 'inventory';

// Database Connection String
$con = mysql_connect($db_hostname,$db_username,$db_password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db_database, $con);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Smart KSR system</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">



  </head>

  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <?php 
        $username = "root";
        $password = "";
        $host = "localhost";

        $con = mysql_connect($host,$username,$password)
          or die("Unable to connect");
          echo "Connections are made successfully::";
        $selected = mysql_select_db("inventory", $con)
            or die("Unable to connect");
        
  ?>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">
                <span class="">
                    <img alt="Our logo" src="img/logo.png" style="width:44.4px;height:30px;">
                </span><span class="lite">KSR system</span></a>
            <!--logo end-->

            

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                    <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-home"></i>
                            <span class="badge bg-important"></span>
                        </a>
                    </li>
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-print"></i>
                            <span class="badge bg-important"></span>
                        </a>
                    </li>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="fa fa-globe"></i>
                            <span class="badge bg-important"></span>
                        </a>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/k.jpg" style="width:40px;height:40px;">
                            </span>
                            <span class="username">Store Manager</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="login1.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">   

                <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Store</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="View_Stock_Details.php">View Stock Data</a></li>                          
                          <li><a class="" href="Update_Stock_Levels.php">Update Stock Levels</a></li>
                      </ul>
                  </li> 

                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Issue Items</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="Daily-Issue.php">Daily Issue</a></li>                          
                          <li><a class="" href="Manual.php">Manual</a></li>
                      </ul>
                  </li> 

                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Recieved requests</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="Accept-Requests.php">Accept Requests</a></li>                          
                          <li><a class="" href="">View Requests</a></li>
                      </ul>
                  </li> 

                  <li>                     
                      <a class="" href="">
                          <i class="icon_piechart"></i>
                          <span>Generate Order</span>
                          
                      </a>
                                         
                  </li>
                  <li>                     
                      <a class="" href="">
                          <i class="icon_piechart"></i>
                          <span>Wastage Managment</span>
                          
                      </a>
                                         
                  </li>

                  <li>                     
                      <a class="" href="">
                          <i class="icon_piechart"></i>
                          <span>Help</span>
                          
                      </a>
                                         
                  </li>
       
                  
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-home"></i> Update Stock Levels</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                        <li><i class="fa fa-table"></i>Stock</li>
                        <li><i class="fa fa-th-list"></i>Update Stock Levels</li>
												  	
					</ol>
				</div>
			</div>
              
            
		
			
           
			
              
				
			

				</div><!--/col-->
        <div>
            <!--empty space-->
            <br>
        </div>

        <div class="row">
                <div class="col-sm-6">
                    
                        <div class="nav search-row" id="top_menu">
                            <!--  search form start -->
                            <ul class="nav top-menu">                    
                                <li>
                                    <form class="navbar-form">
                                        <input class="form-control" placeholder="Search" type="text" name="term">

                                    </form>
                                </li>                    
                            </ul>
                            <!--  search form end -->                
                        </div>
                        
                </div>
            
                
                    <br>
                    <br>
                    <br>
                    <br>
                    

                
            </div>
            <?php
                    if (!empty($_REQUEST['term'])) {

                    $term = mysql_real_escape_string($_REQUEST['term']);     

                    $sql = "SELECT store_item.item_id,items.item_name,store_item.qty FROM store_item JOIN items ON items.id = store_item.item_id WHERE items.item_name LIKE '%$term%'"; 
                     $result = mysql_query($sql); 
                       }
                ?>
            
            <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              Selected Item
                          </header>
                          
                          <table class="table table-striped table-advance table-hover" id="table1">
                           <thead>
                              <tr>
                                 <th><i class=""></i> Item ID</th>
                                 <th><i class=""></i> Item Name</th>
                                 <th><i class=""></i> Currunt Quantity</th>
                                 <th>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                  </div>
                                  </th>
                              </tr>
                              </thead>
                              <tbody>

                              <?php
                              if( !empty($result))
                                while ($row = mysql_fetch_assoc($result)){  
                                    echo 
                                    "<tr>
                                        <td>{$row['item_id']}</td>  
                                        <td>{$row['item_name']}</td>  
                                        <td>{$row['qty']} </td>
                                        </tr>\n";
                                      }  
                                  ?>

                              
                                                            
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>

              <div class="row">
                  <div class="col-lg-8">
                      <section class="panel">
                          <header class="panel-heading">
                              Selected Item
                          </header>
                          
                          <table class="table table-striped table-advance table-hover" id="table2">
                           <thead>
                              <tr>
                                 <th><i class=""></i> Item ID</th>
                                 <th><i class=""></i> Item Name</th>
                                 <th><i class=""></i> Currunt Quantity</th>
                                 
                              </tr>
                              </thead>
                              <tbody>
                       
                           </tbody>
                        </table>
                        <script type="text/javascript">
                              $(document).ready(function() {
                                  var items = [];

                                  $("#table1 tr").on("click", function() {
                                    var newTr = $(this).closest("tr").clone();

                                    var newButtonHTML = "";
                                    $(newButtonHTML).children("button").click(function(e) {
                                    });

                                    $(newTr).children("td:last").html("").html(newButtonHTML);
                                    items.push(newTr);
                                    newTr.appendTo($("#table2"));

                                  });
                          })
                          </script>

                      </section>
                  </div>
              </div>
				

                    


      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- mine -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

  </body>
</html>

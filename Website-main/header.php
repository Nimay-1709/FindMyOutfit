<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>ADMIN PANEL</title>
    <link rel="stylesheet" type="text/css" href="reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="layout1.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="nav.css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="jquery.ui.core.min.js"></script>
    <script src="jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="jquery.effects.slide.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <!-- BEGIN: load jqplot -->
    <link rel="stylesheet" type="text/css" href="jquery.jqplot.min.css" />
    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="js/jqPlot/excanvas.min.js"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="jquery.jqplot.min.js"></script>
    <script language="javascript" type="text/javascript" src="jqplot.barRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="jqplot.pieRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="jqplot.categoryAxisRenderer.min.js"></script>
    <script language="javascript" type="text/javascript" src="jqplot.highlighter.min.js"></script>
    <script language="javascript" type="text/javascript" src="jqplot.pointLabels.min.js"></script>
    <!-- END: load jqplot -->
    <script src="setup.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            setupDashboardChart('chart1');
            setupLeftMenu();
			setSidebarHeight();


        });
    </script>
</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft" style="color: white; font-size: 20px;">
                        Rental Shop Owner

                    </div>
                <div class="floatright">
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                                                      
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                        <br />
                        
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li ><a href="addcart.php"><span>Add Product</span></a> </li>
               <li ><a href="typography.html"><span>Confirm Orders</span></a></li>
				<li ><a href="charts.html"><span>Update History</span></a></li>


            </ul>
        </div>
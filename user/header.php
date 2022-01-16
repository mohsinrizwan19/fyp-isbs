<!DOCTYPE html>
<html lang="en">
<head>
    <title>Involutics Small Business Suite</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="css/fullcalendar.css"/>
    <link rel="stylesheet" href="css/matrix-style.css"/>
    <link rel="stylesheet" href="css/matrix-media.css"/>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/jquery.gritter.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>


<div id="header" style="background-color:#f54248;">

    
<h4 style="color: white; position: absolute; ">
        <a href="dashboard.php" style="color:white; margin-left: 30px; margin-top: 30px; font-size:16.5px;"><center><i class="icon-th"></i> <br>Invo Small Business Suite</center></a>
    </h4>
    
</div>



<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse" style="background-color:black; ">
    <ul class="nav">
        <li class="dropdown" id="profile-messages">
            <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle" style="color:white;"><i
                    class="icon icon-user"></i> <span class="text">Welcome <?php echo $_SESSION["user"]; ?></span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
            </ul>
        </li>


    </ul>
</div>

<!--sidebar-menu-->
<div id="sidebar">
    <ul>
        <li class="active">
            <a href="dashboard.php"><i class="icon icon-dashboard"></i><span><b>Dashboard</b></span></a>
        </li>
        <li>
            <a href="purchase_master.php"><i class="icon icon-shopping-cart"></i><span><b>Purchase Master</b></span></a>
        </li>
        <li>
            <a href="sales_master.php"><i class="icon icon-money"></i><span><b>Sales Master</b></span></a>
        </li>
        <li><a href="purchase_report.php"><i class="icon icon-bar-chart"></i><span><b>Purchase Report</b></span></a></li>
        <li>
            <a href="view_bills.php"><i class="icon icon-bar-chart"></i><span><b>Sales Report</b></span></a>
        </li>
        <li>
            <a href="stock_master.php"><i class="icon icon-bar-chart"></i><span><b>Stock Master</b></span></a>
        </li>
        <li>
            <a href="return_product_list.php"><i class="icon icon-bar-chart"></i><span><b>Return Product Lists</b></span></a>
        </li>



    </ul>
</div>
<!--sidebar-menu-->
<div id="search">

    <a href="logout.php" style="color:white"><i class="icon icon-share-alt"></i><span>Log Out</span></a>

</div>
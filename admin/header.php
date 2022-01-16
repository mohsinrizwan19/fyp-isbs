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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="css/jquery.gritter.css"/>
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>


<div id="header" style="background-color:#3d6aaa;">

    
<h4 style="color: white; position: absolute;">
        <a href="dashboard.php" style="color:white; margin-left: 30px; margin-top: 30px; font-size:16.5px;"><center><i class="icon-th"></i> <br>Invo Small Business Suite</center></a>
    </h4>
    
</div>



<!--top-Header-menu-->
<div id="user-nav" style="background-color:black;" class="navbar navbar-inverse"   >
    <ul class="nav">
        <li class="dropdown" id="profile-messages">
            <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle" style="color:white; ><i
                    class="icon icon-user"></i> <span class="text">Welcome, <?php echo $_SESSION["admin"]; ?></span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
            </ul>
        </li>


    </ul>
</div>


<!--sidebar-menu-->
<div id="sidebar">
    <ul>
        <li class="active" >
            <a href="dashboard.php"><i class="icon icon-dashboard"></i><span><b>Dashboard</span></b></a>
        </li>
        <?php if($_SESSION['admin']=="admin"){?>
        <li>
            <a href="attandance.php"><i class="icon icon-unlock"></i><span><b>Attandance</b></span></b></a>
        </li>
        <?php } ?>
        <li>
            <a href="add_new_user.php"><i class="icon icon-unlock"></i><span><b>Manage Users</b></span></b></a>
        </li>
        <li>
            <a href="add_role.php"><i class="icon icon-unlock"></i><span><b>Manage Roles</b></span></b></a>
        </li>
        <!-- <li>
            <a href="add_permission.php"><i class="icon icon-unlock"></i><span><b>Manage Permissions</b></span></b></a>
        </li> -->
        <li >
            <a href="add_new_unit.php"><i class="icon icon-magnet"></i><span><b>Manage Product Units</span></b></a>
        </li>
        <li>
            <a href="add_company.php"><i class="icon icon-suitcase"></i><span><b>New Company</span></b></a>
        </li>
        <li>
            <a href="add_products.php"><i class="icon icon-plus-sign"></i><span><b>Manage Products</b></span></a>
        </li>
        <li>
            <a href="add_new_party.php"><i class="icon icon-group"></i><span><b>Manage Purchase Party</b></span></a>
        </li>
        <li>
            <a href="purchase_master.php"><i class="icon icon-shopping-cart"></i><span><b>Purchase Master</b></span></a>
        </li>
        <li class="submenu" style="display:block"><a href="#"><i class="icon icon-bar-chart"></i> <span><b>Transactions</b></span>
        <span class="label label-important">+</span></a> 
            <ul>
                <li><a href="add_transaction.php">Transaction</a></li>
                <li><a href="add_expense.php">Expense</a></li>
                <li><a href="add_income.php">Income</a></li>
            </ul>
        </li>

        <li>
            <a href="sales_master.php"><i class="icon icon-money"></i><span><b>Sales Master</span></b></a>
        </li>

        <!-- <----> 
        

        <li class="submenu" style="display:block"><a href="#"><i class="icon icon-bar-chart"></i> <span><b>Business Reports</b></span>
        <span class="label label-important">+</span></a> 
            <ul>
                <li><a href="purchase_report.php">Purchase Report</a></li>
                <li><a href="view_bills.php">Sales Report</a></li>
                <li><a href="stock_master.php">Stock Reports</a></li>
                <li><a href="return_product_list.php">Return Products Reports</a></li>
                <li><a href="party_report_list.php">Party Report</a></li>
                <li><a href="expiry_report.php">Expiry Report</a></li>
            </ul>
        </li>



    </ul>
</div>

<div id="search">

    <a href="logout.php" style="color:white"><i class="icon icon-share-alt"></i><span><b>Log Out</b></span></a>

</div>
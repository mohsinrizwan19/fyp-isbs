<?php
session_start();
if(!isset($_SESSION["user"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>
<?php
include "connection.php";
include "header.php";
?>



<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"><i class="icon-home"></i>
                Welcome To Dashboard</div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">

        <div class="row-fluid" style="background-color: #FAFAFA; min-height: 1000px; padding:10px;"><center>
        <br>
            <h1>Hello, <?php echo $_SESSION["user"]; ?><small>(User)</small></h1>
            <h2 style="color:#154360">Check Your Business Stats!</h2>
            <p><b><?php
// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A");
?></b><p><hr>
<br></center>

        <div class="card text-white bg-primary mb-3" style="width: 18rem; border-style:solid; background-color:#1A5276; border-width: 0px; border-radius:30px; float:left; margin-left: 125px;">
               <div class="card-body">
                    <h3 class="card-title text-center" style="color:white"><b>Total Products <i class="icon-circle-arrow-down"></i><hr></b></h3>
                    <h1 class="card-text text-center" style="color:white">
                        <?php
                        $count=0;
                        $res=mysqli_query($link,"select * from products");
                        $count=mysqli_num_rows($res);
                        echo $count;
                        ?>
                    </h1>
                    <br><br> 
                </div>


            </div>

            <div class="card" style="width: 18rem; border-style:solid; background-color:#B03A2E; border-width: 0px; border-radius:30px; float:left; margin-left: 60px;">
                
                    <a href="view_bills.php"><div class="card-body">
                    <h3 class="card-title text-center" style="color:white;">Total Sales <i class="icon-circle-arrow-down"></i><hr></h3>
                    <h1 class="card-text text-center" style="color:white;">
                        <?php
                        $count=0;
                        $res=mysqli_query($link,"select * from billing_header");
                        $count=mysqli_num_rows($res);
                        echo $count;
                        ?>
                    </h1>
                    <br><br>
                </div></a>
            </div>

            <div class="card" style="width: 18rem; border-style:solid; background-color:#1E8449; border-width: 0px; border-radius:30px; float:left; margin-left: 60px;">
                
                    <a href="purchase_report.php"><div class="card-body">
                    <h3 class="card-title text-center" style="color:white">Total Purchases <i class="icon-circle-arrow-down"></i><hr></h3>
                    <h1 class="card-text text-center" style="color:white">
                        <?php
                        $count=0;
                        $res=mysqli_query($link,"select * from purchase_master");
                        $count=mysqli_num_rows($res);
                        echo $count;
                        ?>
                    </h1>
                    <br><br> 
                </div></a>

            </div>


            <div class="card" style="width: 18rem; border-style:solid; background-color:#D4AC0D; border-width: 0px; border-radius:30px; float:left; margin-top: 20px; margin-left: 125px;">
                <div class="card-body">
                    
                    <h3 class="card-title text-center" style="color:white">Total Suppliers <i class="icon-circle-arrow-down"></i><hr></h3>
                    <h1 class="card-text text-center" style="color:white">
                        <?php
                        $count=0;
                        $res=mysqli_query($link,"select * from party_info");
                        $count=mysqli_num_rows($res);
                        echo $count;
                        ?>
                    </h1>
                    <br><br> 
                </div>

            </div>


            <div class="card" style="width: 18rem; border-style:solid; background-color:#2C3E50;; border-width: 0px; border-radius:30px; float:left; margin-top: 20px; margin-left: 60px;">
                <div class="card-body">
                    
                    <h3 class="card-title text-center" style="color:white">Total Companies <i class="icon-circle-arrow-down"></i><hr></h3>
                    <h1 class="card-text text-center" style="color:white">
                        <?php
                        $count=0;
                        $res=mysqli_query($link,"select * from company_name");
                        $count=mysqli_num_rows($res);
                        echo $count;
                        ?>
                    </h1>
                    <br><br> 
                </div>

            </div>



            <div class="card" style="width: 18rem; border-style:solid; background-color:#D4AC0D; border-width: 0px; border-radius:30px; float:left; margin-top: 20px; margin-left: 60px;">
                
                    <a href="return_product_list.php"><div class="card-body">
                    <h3 class="card-title text-center" style="color:white">Product Returns <i class="icon-circle-arrow-down"></i><hr></h3>
                    <h1 class="card-text text-center" style="color:white">
                        <?php
                        $count=0;
                        $res=mysqli_query($link,"select * from company_name");
                        $count=mysqli_num_rows($res);
                        echo $count;
                        ?>
                    </h1>
                    <br><br> 
                </div></a>

            </div>




        </div>

    </div>
</div>

<?php
include "footer.php";
?>
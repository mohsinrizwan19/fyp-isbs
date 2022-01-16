<?php
session_start();
if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>

<?php
include "header.php";
include "../user/connection.php";
?>


    <div id="content">
        <!--breadcrumbs-->
        <div id="content-header">
            <div id="breadcrumb"><a href="#" class="tip-bottom"><i class="icon-home"></i>
                    Purchase Reports</a></div>
        </div>
        <!--End-breadcrumbs-->
        <!--Action boxes-->
        <div class="container-fluid">



            <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">

            <h2  style="color:#154360" >Check Your Purchase Reports!</h2><hr><br>

        <div style="display:flex;">
            <div class="card" style=" width: 18rem; border-style:solid; background-color:#2C3E50; border-width: 0px; border-radius:3px;  margin-left: 60px; float:left; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                
                <div class="card-body">
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
            </div>

        </div>

        <div class="card" style="width: 18rem; border-style:solid; background-color:#B03A2E; border-width: 0px; border-radius:3px; margin-left: 90px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
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


            <div class="card" style="width: 18rem; border-style:solid; background-color:#1E8449; border-width: 0px; border-radius:3px; margin-left: 90px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                <div class="card-body">
                    
                    <h3 class="card-title text-center" style="color:white">Purchase Volume <i class="icon-circle-arrow-down"></i><hr></h3>
                    <h1 class="card-text text-center" style="color:white">
                        <?php
                       
                        $res=mysqli_query($link,"select sum(price) from purchase_master");
                        $row=$res->fetch_row();

                        
                        echo $row[0];
                        
                        ?> Rs
                    </h1>
                    <br><br> 
                </div>

            </div>


</div>
<br>

                <form class="form-inline" action="" name="form1" method="post">
                    <div class="form-group">
                        <label for="email">Select Start Date</label>
                        <input type="text" name="dt" id="dt" autocomplete="off" class="form-control" required style="width:200px;border-style:solid; border-width:1px; border-color:#666666" placeholder="click here to open calender"  >
                    </div>
                    <div class="form-group">
                        <label for="email">Select End Date</label>
                        <input type="text" name="dt2" id="dt2" autocomplete="off" placeholder="click here to open calender"  class="form-control" style="width:200px;border-style:solid; border-width:1px; border-color:#666666" >
                    </div>
                    <button type="submit" name="submit1" class="btn btn-success">Show Purchase From These Dates</button>
                    <button type="button" name="submit2" class="btn btn-warning" onclick="window.location.href=window.location.href">Clear Search</button>
                </form>

                <br>


                <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">



                <div class="span12">

                    <div class="widget-content nopadding">

                        <?php
                        if(isset($_POST["submit1"]))
                        {
                            ?>
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Purchase By</th>
                                    <th>Product Company</th>
                                    <th>Product Name</th>
                                    <th>Product Unit</th>
                                    <th>Packing Size</th>
                                    <th>Product Qty</th>
                                    <th>Price (Rs)</th>
                                    <th>Party Name</th>
                                    <th>Purchase Type</th>
                                    <th>Expiry Date</th>
                                    <th>Purchase Date</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $count=0;
                                $res = mysqli_query($link, "select * from purchase_master where (purchase_date>='$_POST[dt]' && purchase_date<='$_POST[dt2]')");
                                while ($row = mysqli_fetch_array($res)) {
                                    $count=$count+1;
                                    ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $row["username"]; ?></td>
                                        <td><?php echo $row["company_name"]; ?></td>
                                        <td><?php echo $row["product_name"]; ?></td>
                                        <td><?php echo $row["unit"]; ?></td>
                                        <td><?php echo $row["packing_size"]; ?></td>
                                        <td><?php echo $row["quantity"]; ?></td>
                                        <td><?php echo $row["price"]; ?></td>
                                        <td><?php echo $row["party_name"]; ?></td>
                                        <td><?php echo $row["purchase_type"]; ?></td>
                                        <td><?php echo $row["expiry_date"]; ?></td>
                                        <td><?php echo $row["purchase_date"]; ?></td></tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            <?php

                        }
                        else{
                            ?>
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Purchase By</th>
                                    <th>Product Company</th>
                                    <th>Product Name</th>
                                    <th>Product Unit</th>
                                    <th>Packing Size</th>
                                    <th>Product Qty</th>
                                    <th>Price (Rs)</th>
                                    <th>Party Name</th>
                                    <th>Purchase Type</th>
                                    <th>Expiry Date</th>
                                    <th>Purchase Date</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $count=0;
                                $res = mysqli_query($link, "select * from purchase_master");
                                while ($row = mysqli_fetch_array($res)) {
                                    $count=$count+1;
                                    ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $row["username"]; ?></td>
                                        <td><?php echo $row["company_name"]; ?></td>
                                        <td><?php echo $row["product_name"]; ?></td>
                                        <td><?php echo $row["unit"]; ?></td>
                                        <td><?php echo $row["packing_size"]; ?></td>
                                        <td><?php echo $row["quantity"]; ?></td>
                                        <td><?php echo $row["price"]; ?></td>
                                        <td><?php echo $row["party_name"]; ?></td>
                                        <td><?php echo $row["purchase_type"]; ?></td>
                                        <td><?php echo $row["expiry_date"]; ?></td>
                                        <td><?php echo $row["purchase_date"]; ?></td></tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            <?php
                        }

                        ?>


                    </div>

                </div>
            </div>


        </div>


    </div>




<?php
include "footer.php";
?>




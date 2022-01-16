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
                    Stock Master</a></div>
        </div>
        <!--End-breadcrumbs-->
        <!--Action boxes-->
        <div class="container-fluid">
            <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
                <div class="span12">

                <h2  style="color:#154360" >Check Your Stock!</h2><hr><br>

<div style="display:flex;">
<div class="card" style=" width: 18rem; border-style:solid; background-color:#B03A2E; border-width: 0px; border-radius:3px;  margin-left: 60px; float:left; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
    
    <div class="card-body">
    <h3 class="card-title text-center" style="color:white">Stock Quantity <i class="icon-circle-arrow-down"></i><hr></h3>
    <h1 class="card-text text-center" style="color:white">
        <?php
         
         $res=mysqli_query($link,"select sum(product_qty) from stock_master");
         $row=$res->fetch_row();

         
         echo $row[0];
        ?>
    </h1>
    <br><br> 
</div>

</div>

<div class="card" style="width: 18rem; border-style:solid; background-color:#D4AC0D; border-width: 0px; border-radius:3px; margin-left: 90px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
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
        
        <h3 class="card-title text-center" style="color:white">Total Stock Price <i class="icon-circle-arrow-down"></i><hr></h3>
        <h1 class="card-text text-center" style="color:white">
            <?php
            $res=mysqli_query($link,"SELECT SUM(product_qty*product_selling_price) FROM stock_master");
            $row=$res->fetch_row();

            
            echo $row[0];
            ?> Rs
        </h1>
        <br><br> 
    </div>

</div>


</div>
<br>



                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sr No</th>
                                <th>Product Company</th>
                                <th>Product Name</th>
                                <th>Product Unit</th>
                                <th>Product Qty</th>
                                <th>Product Selling Price</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $count=0;
                            $res = mysqli_query($link, "select * from stock_master");
                            while ($row = mysqli_fetch_array($res)) {
                                $count=$count+1;
                                ?>
                                <tr>
                                    <td><?php echo $count; ?></td>
                                    <td><?php echo $row["product_company"]; ?></td>
                                    <td><?php echo $row["product_name"]; ?></td>
                                    <td><?php echo $row["product_unit"]; ?></td>
                                    <td><?php echo $row["product_qty"]; ?></td>
                                    <td><?php echo $row["product_selling_price"]; ?></td>
                                    <td><center>
                                            <a href="edit_stock_master.php?id=<?php echo $row["id"]; ?>" style="color:green">Edit</a></center> </td>

                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>


        </div>


    </div>




<?php
include "footer.php";
?>
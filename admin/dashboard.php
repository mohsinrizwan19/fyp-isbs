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
include "../user/connection.php";
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



        
        <div class="row-fluid" style="background-color: #FAFAFA; min-height: 1000px; padding:10px;">
            <br>
            <h1>Hello, <?php echo $_SESSION["admin"]; ?><small>(Admin)</small></h1>
            <h2  style="color:#154360" >Check Your Business Stats!</h2>
            <p><b><?php
// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A");
?></b><p><hr>
            <br> 





            
            <div class="card text-white bg-primary mb-3" style="width: 18rem; border-style:solid; background-color:#1A5276; border-width: 0px; border-radius:3px; float:left; margin-left: 125px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
           <a href="add_products.php" >   <div class="card-body">
                    <h3 class="card-title text-center" style="color:white"><span><b>Products</b> <i class="icon-circle-arrow-down"></i><hr></h3>
                    <h4 class="card-text text-center" style="color:white"> Product Categories:
                        <?php
                        $count=0;
                        $res=mysqli_query($link,"select * from products");
                        $count=mysqli_num_rows($res);
                        echo $count;
                        ?>
                    </h4>
                    <h4 class="card-text text-center" style="color:white"> Stock Quantity:
                        <?php
                        
                        $res=mysqli_query($link,"select sum(product_qty) from stock_master");
                        $row=$res->fetch_row();

                        
                        echo $row[0];
                        ?> Units
                    </h4>

                    <br><br> 
                </div></a>


            </div>

            <div class="card" style="width: 18rem; border-style:solid; background-color:#B03A2E; border-width: 0px; border-radius:3px; float:left; margin-left: 60px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                
                    <a href="view_bills.php"> <div class="card-body">
                    <h3 class="card-title text-center" style="color:white;">Sales <i class="icon-circle-arrow-down"></i><hr></h3>
                    <h4 class="card-text text-center" style="color:white;"> Total Sales:
                        <?php
                        $count=0;
                        $res=mysqli_query($link,"select * from billing_header");
                        $count=mysqli_num_rows($res);
                        echo $count;
                        ?>
                    </h4>
                    <h4 class="card-text text-center" style="color:white;"> Sales Volume:
                    <?php
                    $res=mysqli_query($link,"SELECT SUM(price*qty) FROM billing_details");
                        $row=$res->fetch_row();

                        
                        echo $row[0];
                        ?> Rs
                    </h4> 


                    <br><br>
                </div></a>
            </div>

            <div class="card" style="width: 18rem; border-style:solid; background-color:#1E8449; border-width: 0px; border-radius:3px; float:left; margin-left: 60px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                
                    <a href="purchase_report.php"><div class="card-body">
                    <h3 class="card-title text-center" style="color:white">Purchases <i class="icon-circle-arrow-down"></i><hr></h3>
                    <h4 class="card-text text-center" style="color:white"> Total Purchases: 
                        <?php
                        $count=0;
                        $res=mysqli_query($link,"select * from purchase_master");
                        $count=mysqli_num_rows($res);
                        echo $count;
                        ?>
                    </h4>
                    <h4 class="card-text text-center" style="color:white"> Purchase Volume: 
                       <?php
                          $res=mysqli_query($link,"select sum(price) from purchase_master");
                        $row=$res->fetch_row();

                        
                        echo $row[0];

                        ?> Rs
                    </h4>



                    <br><br> 
                </div></a>

            </div>

            <div class="card" style="width: 18rem; border-style:solid; background-color:#D4AC0D; border-width: 0px; border-radius:3px; float:left; margin-top: 20px; margin-left: 125px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                
                    <a href="add_new_party.php"><div class="card-body">
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
                </div></a>

            </div>


            <div class="card" style="width: 18rem; border-style:solid; background-color:#2C3E50; border-width: 0px; border-radius:3px; float:left; margin-top: 20px; margin-left: 60px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                
                    <a href="add_new_user.php"><div class="card-body">
                    <h3 class="card-title text-center" style="color:white">Authorized Users <i class="icon-circle-arrow-down"></i><hr></h3>
                    <h4 class="card-text text-center" style="color:white"> Admins:
                        <?php
                        $count=0;
                        $res=mysqli_query($link,"select * from user_registration where role = 'admin'");
                        $count=mysqli_num_rows($res);
                        echo $count;
                        ?>

                        
                    </h4>

                    <h4 class="card-text text-center" style="color:white"> Users:
                        <?php
                        $count=0;
                        $res=mysqli_query($link,"select * from user_registration where role = 'user'");
                        $count=mysqli_num_rows($res);
                        echo $count;
                        ?>
                    </h4>
                    <br><br> 
                </div></a>
            </div>


            <div class="card" style="width: 18rem; border-style:solid; background-color:#D4AC0D; border-width: 0px; border-radius:3px; float:left; margin-top: 20px; margin-left: 60px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                
                    <a href="return_product_list.php"><div class="card-body">
                    <h3 class="card-title text-center" style="color:white">Returns <i class="icon-circle-arrow-down"></i><hr></h3>
                    <h4 class="card-text text-center" style="color:white">Product Returned:
                        <?php
                        $count=0;
                        $res=mysqli_query($link,"select * from return_products");
                        $count=mysqli_num_rows($res);
                        echo $count;
                        ?>
                    </h4>

                    <h4 class="card-text text-center" style="color:white">Quantity Returned:
                        <?php
                        $res=mysqli_query($link,"SELECT SUM(product_qty) FROM return_products");
                        $row=$res->fetch_row();

                        
                        echo $row[0];

                        ?>
                    </h4>
                    <br><br> 
            </div></a>

                </div>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <canvas id="myChartpie" style="width:100%;max-width:872px;padding: 70px 0 70px 13%;"></canvas>
        </div>
    </div>
</div>
<div class="container" style="padding:50px 0 0;">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Transaction Graph</h3>
            <p class="text-center"><br> <b>X-axis:</b> profit/loss <b>Y-axis:</b> Amount <br>
            <!-- <p class="text-center"><b  >Purchase Graph</b> along x-axis: profit/loss, along y-axis: amount</p> -->
            <canvas id="myChartbars2" style="width:100%;max-width:724px;padding: 0px 20%;"></canvas>
        </div>
    </div>
</div>  
<div class="container" style="padding:50px 0 0;">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Over All Product Graph</h3>
            <p class="text-center"><br> <b>X-axis:</b> Number of days <b>Y-axis:</b> Price <br>
              <span style="padding: 0px 7px;margin-left: 15px;margin-right: 10px;background-color:blue"> </span> Purchase 
              <span style="padding: 0px 7px;margin-left: 15px;margin-right: 10px;background-color:green"> </span> Sale 
              <span style="padding: 0px 7px;margin-left: 15px;margin-right: 10px;background-color:red"> </span> Return <br></p>
            <canvas id="myChartstripes" style="width:100%;max-width:724px;padding: 0px 20%;"></canvas>
        </div>
    </div>
</div>
<div class="container" style="padding:50px 0 0;">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Product Purchase Graph</h3>
            <p class="text-center"><br> <b>X-axis:</b> Products <b>Y-axis:</b> Quantity <br>
            <canvas id="myChartbars" style="width:100%;max-width:724px;padding:0 20%;"></canvas>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Quantity vise Purchase Graph</h3>
            <p class="text-center"><br> <b>X-axis:</b> Price <b>Y-axis:</b> Quantity <br>
            <canvas id="myChartdots" style="width:100%;max-width:700px;padding:0px 19%;"></canvas>
        </div>
    </div>
</div>




        </div>


</div>

<style type="text/css">
    #piechart div div div{
        position: relative !important;
    }
    rect{
        /*background-color: transparent !important;*/
        fill: transparent !important;
    }
</style>

<script>
function mouseOver() {
  document.getElementById("demo").style.color = "red";
}

function mouseOut() {
  document.getElementById("demo").style.color = "black";
}
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
var xValues = ["Products", "Sales", "Purchases", "Suppliers", "Users", "Returns"];
<?php
                        $product=0;
                        $res=mysqli_query($link,"select * from products");
                        $product=mysqli_num_rows($res);
                        
                        ?>
                        <?php
                        $master=0;
                        $res=mysqli_query($link,"select * from purchase_master");
                        $master=mysqli_num_rows($res);
                        
                        ?>
                        <?php
                        $return=0;
                        $res=mysqli_query($link,"select * from return_products");
                        $return=mysqli_num_rows($res);
                        
                        ?>
                        <?php
                        $purchase=0;
                        $res=mysqli_query($link,"select * from billing_header");
                        $purchase=mysqli_num_rows($res);
                        
                        ?>
                        <?php
                        $supplier=0;
                        $res=mysqli_query($link,"select * from party_info");
                        $supplier=mysqli_num_rows($res);
                        
                        ?>

                        <?php
                        $user=0;
                        $res=mysqli_query($link,"select * from user_registration where role = 'admin'");
                        $user=mysqli_num_rows($res);
                        
                        ?>
var yValues = [<?php echo $product; ?>, <?php echo $master; ?>, <?php echo $purchase; ?>, <?php echo $supplier; ?>, <?php echo $user; ?>, <?php echo $return; ?>];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChartpie", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Overall Business Status"
    }
  }
});
</script>

<script>
    
var xyValues = [
<?php
        $row=0;
        $res=mysqli_query($link,"select * from purchase_master");
        
        while ($row = mysqli_fetch_array($res)) {
            
    ?>
  {x:<?php echo $row['price']; ?>, y:<?php echo $row['quantity']; ?>},
  <?php } ?>
];

new Chart("myChartdots", {
  type: "scatter",
  data: {
    datasets: [{
      pointRadius: 4,
      pointBackgroundColor: "rgb(0,0,255)",
      data: xyValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      xAxes: [{ticks: {min: 0, max:2000}}],
      yAxes: [{ticks: {min: 0, max:100}}],
    }
  }
});
</script>
<script>

var xValues = [<?php
        $row=0;
        $res=mysqli_query($link,"select distinct product_name from purchase_master");
        
        while ($row = mysqli_fetch_array($res)) {
            
    ?>"<?php echo $row['product_name']; ?>",<?php } ?>];
var yValues = [<?php
        $row=0;
        $res=mysqli_query($link,"select * from purchase_master");
        
        while ($row = mysqli_fetch_array($res)) {
            
    ?><?php echo $row['quantity']; ?>,<?php } ?>];
var barColors = ["red", "green","blue","orange","brown","red", "green","blue","orange","brown","red", "green","blue","orange","brown","red", "green","blue","orange","brown"];

new Chart("myChartbars", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      
    }
  }
});
</script>
<script>

var xValues = ["Profit","Loss"];
var yValues = [<?php
        $row1=0;
        $row2=0;
        $res1=mysqli_query($link,"select MAX(amount) AS max1 from transaction where category='Profit'");
        $res2=mysqli_query($link,"select MAX(amount) AS max2 from transaction where category='Loss'");

        
        while ($row1 = mysqli_fetch_array($res1)) {
            while ($row2 = mysqli_fetch_array($res2)) {
            
                echo $row1['max1'].','.$row2['max2']; 
            }
        } ?>];
var barColors = ["orange", "red","blue","orange","brown","red", "green","blue","orange","brown","red", "green","blue","orange","brown","red", "green","blue","orange","brown"];

new Chart("myChartbars2", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
    }
  }
});
</script>

<script>

    <?php
        $row=0;
        $res=mysqli_query($link,"select * from return_products");
        
        while ($row = mysqli_fetch_array($res)) {
            
    ?>

var date1 = new Date("<?php echo $row['return_date']; ?>");
var date2 = new Date();
  
 
// To calculate the time difference of two dates
var Difference_In_Time = date2.getTime() - date1.getTime();
  
// To calculate the no. of days between two dates
var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
  
//To display the final no. of days (result)
// document.write("Total number of days between dates  <br>"
//                + date1 + "<br> and <br>" 
//                + date2 + " is: <br> " 
//                + Difference_In_Days);
 <?php } ?>
var xValues = [0,10,20,30,40,50,60,70,80,900 ];

new Chart("myChartstripes", {
  type: "line",
  data: {
    labels: xValues,
    
    datasets: [{ 
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,6500],
      borderColor: "green",
      fill: false
    }, { 
      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
      borderColor: "blue",
      fill: false
    }, { 
      data: [0,250,1000,0,200,550,2000,1000,200,100],
      borderColor: "red",
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
});


</script>

<?php
include "footer.php";
?>
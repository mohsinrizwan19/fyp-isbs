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
$id=$_GET["id"];
$type="";
$account="";
$category="";
$amount="";
$payment="";
$reference="";
$description="";
$res=mysqli_query($link,"select * from transaction where id=$id");
while($row=mysqli_fetch_array($res))
{
    $type=$row["type"];
    $account=$row["account"];
    $category=$row["category"];
    $amount=$row["amount"];
    $payment=$row["payment"];
    $reference=$row["reference"];
    $description=$row["description"];
}
?>



    <div id="content">
        <!--breadcrumbs-->
        <div id="content-header">
            <div id="breadcrumb"><a href="#" class="tip-bottom"><i class="icon-home"></i>
                    Edit Transaction</a></div>
        </div>
        <!--End-breadcrumbs-->

        <!--Action boxes-->
        <div class="container-fluid">

            <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Edit Transaction</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form name="form1" action="" method="post" class="form-horizontal">

                                <div class="control-group">
                                    <label class="control-label">Transaction Type :</label>

                                    <div class="controls">
                                        <select  required class="span11" name="type">
                                            <option value="Please Select" <?php if($type=="Please Select"){echo "selected";} ?>>Please Select</option>
                                            <option value="Deposit" <?php if($type=="Deposit"){echo "selected";} ?>>Deposit</option>
                                            <option value="Expense" <?php if($type=="Expense"){echo "selected";} ?>>Expense</option>
                                            <option value="Account Payable (A/P)" <?php if($type=="Account Payable (A/P)"){echo "selected";} ?>>Account Payable (A/P)</option>
                                            <option value="Account Receivable (A/R)" <?php if($type=="Account Receivable (A/R)"){echo "selected";} ?>>Account Receivable (A/R)</option>
                                            <option value="Account Transfer" <?php if($type=="Account Transfer"){echo "selected";} ?>>Account Transfer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Account :</label>

                                    <div class="controls">
                                        <select  required class="span11" name="account">
                                            <option value="Please Select" <?php if($account=="Please Select"){echo "selected";} ?>>Please Select</option>
                                            <option value="Pety Cash" <?php if($account=="Pety Cash"){echo "selected";} ?>>Pety Cash</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Category :</label>

                                    <div class="controls">
                                        <select  required class="span11" name="category">
                                            <option value="Please Select" <?php if($category=="Please Select"){echo "selected";} ?>>Please Select</option>
                                            <option value="Profit" <?php if($category=="Profit"){echo "selected";} ?>>Profit</option>
                                            <option value="Loss" <?php if($category=="Loss"){echo "selected";} ?>>Loss</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Amount :</label>

                                    <div class="controls">
                                        <input type="number" class="span11" placeholder="Enter Amount" name="amount" value="<?php echo $amount; ?>" />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Payment Method :</label>

                                    <div class="controls">
                                        <select  required class="span11" name="payment">
                                            <option value="Please Select" <?php if($payment=="Please Select"){echo "selected";} ?>>Please Select</option>
                                            <option value="Cash" <?php if($payment=="Cash"){echo "selected";} ?>>Cash</option>
                                            <option value="Check" <?php if($payment=="Check"){echo "selected";} ?>>Check</option>
                                            <option value="Credit Card" <?php if($payment=="Credit Card"){echo "selected";} ?>>Credit Card</option>
                                            <option value="Debit Card" <?php if($payment=="Debit Card"){echo "selected";} ?>>Debit Card</option>
                                            <option value="Electronic Transfer" <?php if($payment=="Electronic Transfer"){echo "selected";} ?>>Electronic Transfer</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Reference Number :</label>

                                    <div class="controls">
                                        <input type="number" class="span11" placeholder="Enter Reference Number" name="reference" value="<?php echo $reference; ?>" />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Description :</label>

                                    <div class="controls">
                                        <textarea class="span11" placeholder="Enter Description" name="description" /><?php echo $description; ?></textarea>
                                    </div>
                                </div>


                                <div class="form-actions">
                                    <button type="submit" name="submit1" class="btn btn-success">Update</button>
                                </div>

                                <div class="alert alert-success" id="success" style="display:none">
                                    Record Updated Successfully!
                                </div>


                            </form>
                        </div>




                    </div>




                </div>
            </div>

        </div>
    </div>

<?php
if(isset($_POST["submit1"]))
{
 mysqli_query($link,"update transaction set type='$_POST[type]',account='$_POST[account]',category='$_POST[category]',amount='$_POST[amount]',payment='$_POST[payment]',reference='$_POST[reference]',description='$_POST[description]' where id=$id") or die(mysqli_error($link));
?>
    <script type="text/javascript">
            document.getElementById("success").style.display = "block";
            setTimeout(function(){
                window.location="add_transaction.php";
            },3000);
        </script>
<?php
}
?>



<?php
include "footer.php";
?>
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
                    Add New Transaction</a></div>
        </div>
        <!--End-breadcrumbs-->

        <!--Action boxes-->
        <div class="container-fluid">

            <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Add New Transaction</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form name="form1" action="" method="POST" class="form-horizontal">
                                <!-- <div class="control-group">
                                    <label class="control-label">Transaction Type :</label>

                                    <div class="controls">
                                        <select  required class="span11" name="type">
                                            <option value="Please Select">Please Select</option>
                                            <option value="Deposit">Deposit</option>
                                            <option value="Expense">Expense</option>
                                            <option value="Account Payable (A/P)">Account Payable (A/P)</option>
                                            <option value="Account Receivable (A/R)">Account Receivable (A/R)</option>
                                            <option value="Account Transfer">Account Transfer</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="control-group">
                                    <label class="control-label">Account :</label>

                                    <div class="controls">
                                        <select  required class="span11" name="account">
                                            <option value="Please Select">Please Select</option>
                                            <option value="Pety Cash">Pety Cash</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Category :</label>

                                    <div class="controls">
                                        <select  required class="span11" name="category">
                                            <option value="Please Select">Please Select</option>
                                            <option value="Profit">Profit</option>
                                            <option value="Loss">Loss</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Amount :</label>

                                    <div class="controls">
                                        <input type="number" class="span11" placeholder="Enter Amount" name="amount" />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Payment Method :</label>

                                    <div class="controls">
                                        <select  required class="span11" name="payment">
                                            <option value="Please Select">Please Select</option>
                                            <option value="Cash">Cash</option>
                                            <option value="Check">Check</option>
                                            <option value="Credit Card">Credit Card</option>
                                            <option value="Debit Card">Debit Card</option>
                                            <option value="Electronic Transfer">Electronic Transfer</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Reference Number :</label>

                                    <div class="controls">
                                        <input type="number" class="span11" placeholder="Enter Reference Number" name="reference" />
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Description :</label>

                                    <div class="controls">
                                        <textarea type="number" class="span11" placeholder="Enter Description" name="description" /></textarea>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Expense :</label>

                                    <div class="controls">
                                        <select  required class="span11" name="expense">
                                            <option value="0">Please Select</option>
                                            <?php
                                                $res = mysqli_query($link, "select * from expense where status='Pending'");
                                                while ($row = mysqli_fetch_array($res)) {
                                            ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Income :</label>

                                    <div class="controls">
                                        <select  required class="span11" name="income">
                                            <option value="0">Please Select</option>
                                            <?php
                                                $res = mysqli_query($link, "select * from income where status='Pending'");
                                                while ($row = mysqli_fetch_array($res)) {
                                            ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="alert alert-danger" id="error" style="display:none">
                                    This Username Already Exist! Please Try Another.
                                </div>


                                <div class="form-actions">
                                    <button type="submit" name="submit" class="btn btn-success">Save</button>
                                </div>

                                <div class="alert alert-success" id="success" style="display:none">
                                    Record Inserted Successfully!
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Transaction Type</th>
                                <th>Account</th>
                                <th>Category</th>
                                <th>Debit</th>
                                <th>Credit</th>
                                <th>Payment Method</th>
                                <th>Reference Number</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $res = mysqli_query($link, "select * from transaction");
                            while ($row = mysqli_fetch_array($res)) {
                                ?>
                                <tr>
                                    <td><?php echo $row["type"]; ?></td>
                                    <td><?php echo $row["account"]; ?></td>
                                    <td><?php echo $row["category"]; ?></td>
                                    <td><?php 
                                    if($row["category"] == 'Profit'){
                                        echo $row["amount"].".00";
                                    }
                                    else{
                                        echo "0.00";
                                    } ?></td>
                                    <td><?php 
                                    if($row["category"] == 'Loss'){
                                        echo $row["amount"].".00";
                                    }
                                    else{
                                        echo "0.00";
                                    } ?></td>
                                    <td><?php echo $row["payment"]; ?></td>
                                    <td><?php echo $row["reference"]; ?></td>
                                    <td><?php echo $row["description"]; ?></td>
                                    <td><a href="edit_transaction.php?id=<?php echo $row["id"]; ?>" style="color:green">Edit</a></td>
                                    <td><a href="delete_transaction.php?id=<?php echo $row["id"]; ?>" style="color:red">Delete</a></td>
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
if (isset($_POST["submit"])) {

    $expense = $_POST['expense'];
    
    $income = $_POST['income'];    

    if($expense != 0 && $income != 0){ 
        ?>
        <script type="text/javascript">
            document.getElementById("error").style.display = "none";
            document.getElementById("success").style.display = "block";
            setTimeout(function () {
                window.location.href = window.location.href;
            });
        </script>
    <?php   
    }
    else{
        echo 'query';
    
        $in_ch=mysqli_query($link,"insert into transaction(type,account,category,amount,payment,reference,description,expense,income) values ('$_POST[type]','$_POST[account]','$_POST[category]','$_POST[amount]','$_POST[payment]','$_POST[reference]','$_POST[description]','$_POST[expense]','$_POST[income]')"); 


        
        if($expense != 0){
            mysqli_query($link, "update expense set status='Completed' where id=$expense");
        }
        if($income != 0){
            mysqli_query($link, "update income set status='Completed' where id=$income");
        }
       
    }

}


?>


<?php
include "footer.php";
?>
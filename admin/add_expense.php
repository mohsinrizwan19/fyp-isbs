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
                    Add New Expense</a></div>
        </div>
        <!--End-breadcrumbs-->

        <!--Action boxes-->
        <div class="container-fluid">

            <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Add New Expense</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form name="form1" action="" method="POST" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Expense Name :</label>

                                    <div class="controls">
                                        <input type="text" required class="span11" placeholder="Expense name" name="name"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Description :</label>

                                    <div class="controls">
                                        <input type="text" required class="span11" placeholder="Description" name="description"/>
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
                                <th>Expense Name</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $res = mysqli_query($link, "select * from expense");
                            while ($row = mysqli_fetch_array($res)) {
                                ?>
                                <tr>
                                    <td><?php echo $row["name"]; ?></td>
                                    <td><?php echo $row["description"]; ?></td>
                                    <td><?php echo $row["status"]; ?></td>
                                    <td><a href="edit_expense.php?id=<?php echo $row["id"]; ?>" style="color:green">Edit</a></td>
                                    <td><a href="delete_expense.php?id=<?php echo $row["id"]; ?>" style="color:red">Delete</a></td>
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


    $count = 0;
    $res = mysqli_query($link, "select * from expense where name='$_POST[name]'");
    $count = mysqli_num_rows($res);

    if ($count > 0) {

    // echo "submitted";
    // die();
        ?>
        <script type="text/javascript">
            document.getElementById("success").style.display = "none";
            document.getElementById("error").style.display = "block";
        </script>
        <?php
    } else {

    
        // mysqli_query($link, "insert into expense values(NULL,'$_POST[name]','$_POST[description]',now())");
        $in_ch=mysqli_query($link,"insert into expense(name,description,date) values ('$_POST[name]','$_POST[description]',now())"); 
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


}

?>


<?php
include "footer.php";
?>
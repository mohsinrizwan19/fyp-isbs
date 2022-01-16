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
                    Attandance</a></div>
        </div>
        <!--End-breadcrumbs-->

        <!--Action boxes-->
        <div class="container-fluid">

            <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Mark Attandance</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form name="form1" action="" method="POST" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Employee:</label>

                                    <div class="controls">
                                        <select class="span11" name="employee_name" id="employee_name" required>
                                            <option>Select</option>
                                            <?php
                                            $res = mysqli_query($link, "select * from user_registration");
                                            while ($row = mysqli_fetch_array($res)) {
                                                echo "<option value='".$row["firstname"]." ".$row["lastname"]."'>" ;
                                                echo $row["firstname"]." ".$row["lastname"];
                                                echo "</option>";
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Attendance Status:</label>

                                    <div class="controls">
                                        <select class="span11" name="type" id="type" required >
                                            <option>Select</option>
                                            <option value="Check In">Check In</option>
                                            <option value="Check Out">Check Out</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Date :</label>

                                    <div class="controls">
                                        <input type="date" class="span11" name="date" required />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Time :</label>

                                    <div class="controls">
                                        <input type="time" class="span11" name="time" required/>
                                    </div>
                                </div>
                                <div class="alert alert-danger" id="error" style="display:none">
                                    This Username Already Exist! Please Try Another.
                                </div>


                                <div class="form-actions">
                                    <button type="submit" name="submit" class="btn btn-success">Mark</button>
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
                                <th>User Name</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Time</th>
                               <!--  <th>Edit</th>
                                <th>Delete</th> -->
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $res = mysqli_query($link, "select * from attandance");
                            while ($row = mysqli_fetch_array($res)) {
                                ?>
                                <tr>
                                    <td><?php echo $row["user_name"]; ?></td>
                                    <td><?php echo $row["type"]; ?></td>
                                    <td><?php echo $row["date"]; ?></td>
                                    <td><?php echo $row["time"]; ?></td>
                                    <!-- <td><a href="edit_expense.php?id=<?php //echo $row["id"]; ?>" style="color:green">Edit</a></td>
                                    <td><a href="delete_expense.php?id=<?php //echo $row["id"]; ?>" style="color:red">Delete</a></td> -->
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


        mysqli_query($link, "insert into attandance values(NULL,'$_POST[employee_name]','$_POST[date]','$_POST[type]','$_POST[time]')");
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

?>


<?php
include "footer.php";
?>
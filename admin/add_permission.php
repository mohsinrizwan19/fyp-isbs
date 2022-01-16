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
                    Add New Permission</a></div>
        </div>
        <!--End-breadcrumbs-->

        <!--Action boxes-->
        <div class="container-fluid">

            <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Add New Permission</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form name="form1" action="" method="POST" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Permission Name :</label>

                                    <div class="controls">
                                        <input type="text" required class="span11" placeholder="Permission name" name="name"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Guard Name :</label>

                                    <div class="controls">
                                        <input type="text" required class="span11" placeholder="Guard name" name="guard_name"/>
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
                                <th>Permission Name</th>
                                <th>Guard Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $res = mysqli_query($link, "select * from permission");
                            while ($row = mysqli_fetch_array($res)) {
                                ?>
                                <tr>
                                    <td><?php echo $row["name"]; ?></td>
                                    <td><?php echo $row["guard_name"]; ?></td>
                                    <td><a href="edit_permission.php?id=<?php echo $row["id"]; ?>" style="color:green">Edit</a></td>
                                    <td><a href="delete_permission.php?id=<?php echo $row["id"]; ?>" style="color:red">Delete</a></td>
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
    $res = mysqli_query($link, "select * from permission where name='$_POST[name]'");
    $count = mysqli_num_rows($res);

    if ($count > 0) {

    echo "submitted";
    die();
        ?>
        <script type="text/javascript">
            document.getElementById("success").style.display = "none";
            document.getElementById("error").style.display = "block";
        </script>
        <?php
    } else {

    
        mysqli_query($link, "insert into permission values(NULL,'$_POST[name]','$_POST[guard_name]')");
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
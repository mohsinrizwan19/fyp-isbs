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
$name="";
$guard_name="";
$res=mysqli_query($link,"select * from role where id=$id");
while($row=mysqli_fetch_array($res))
{
    $name=$row["name"];
    $guard_name=$row["guard_name"];
}
?>



    <div id="content">
        <!--breadcrumbs-->
        <div id="content-header">
            <div id="breadcrumb"><a href="#" class="tip-bottom"><i class="icon-home"></i>
                    Edit Role</a></div>
        </div>
        <!--End-breadcrumbs-->

        <!--Action boxes-->
        <div class="container-fluid">

            <div class="row-fluid" style="background-color: white; min-height: 1000px; padding:10px;">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Edit Role</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form name="form1" action="" method="post" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Role Name :</label>

                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Role name" name="name" value="<?php echo $name; ?>"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Permissions :</label>
                                    <div class="controls">
                                    <?php
                                        $per = mysqli_query($link, "select * from permission");
                                        while ($perms = mysqli_fetch_array($per)) {
                                                  
                                                  ?>
                                                    <input type="checkbox" id="vehicle3" name="guard_name[]" value="<?php echo $perms['id']; ?>">
                                                    <label for="vehicle3"> <?php echo $perms["name"]; ?></label><br>
                                            <?php }
                                         ?>
                                     <?php 

                                     ?>
                                    
                                    
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
 mysqli_query($link,"update role set name='$_POST[name]',guard_name='$_POST[guard_name]' where id=$id") or die(mysqli_error($link));
?>
    <script type="text/javascript">
            document.getElementById("success").style.display = "block";
            setTimeout(function(){
                window.location="add_role.php";
            },3000);
        </script>
<?php
}
?>



<?php
include "footer.php";
?>
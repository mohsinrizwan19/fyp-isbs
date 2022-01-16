<?php
include "../user/connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from permission where id=$id");
?>
<script type="text/javascript">
    window.location="add_permission.php";
</script>

<?php
include "../user/connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from role where id=$id");
?>
<script type="text/javascript">
    window.location="add_role.php";
</script>

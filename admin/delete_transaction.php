<?php
include "../user/connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from transaction where id=$id");
?>
<script type="text/javascript">
    window.location="add_transaction.php";
</script>

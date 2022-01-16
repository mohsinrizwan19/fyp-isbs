<?php
	$users = mysqli_query($link, "select * from user_registration");
	$permissions = mysqli_query($link, "select * from role_has_permission");
?>
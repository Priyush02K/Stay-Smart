
<?php require "../layouts/header.php"?>

<?php require "../../config/config.php"?>
<?php 



session_start();
session_unset();
session_destroy();

		// echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php'</script>";


header("location: http://localhost/Hotel%20Booking%20Management%20System./admin-panel/admins/admins.php");


?>
<?php 

session_start();
session_unset();
session_destroy();

header("location: http://localhost/Hotel%20Booking%20Management%20System");

?>
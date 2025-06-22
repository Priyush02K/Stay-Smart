<?php require "../../config/config.php"?>
<?php require "../layouts/header.php"?>

<?php 


if (isset($_GET['id'])) {
    $id=$_GET['id'];

    $getImage = $conn->query("SELECT * FROM hotels WHERE id= '$id'");
    $getImage->execute();

    $fetch = $getImage->fetch(PDO::FETCH_OBJ);

    unlink("hotel_image/" .$fetch->image);


    $delete = $conn->query("DELETE FROM hotels WHERE id='$id'");
    $delete->execute();

	echo "<script>window.location.href='".ADMINURL."./hotels-admins/show-hotels.php';    	</script>";



}



?>
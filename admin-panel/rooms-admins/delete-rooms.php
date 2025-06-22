<?php require "../../config/config.php"?>
<?php require "../layouts/header.php"?>

<?php 


if (isset($_GET['id'])) {
    $id=$_GET['id'];

    $getImage = $conn->query("SELECT * FROM rooms WHERE id= '$id'");
    $getImage->execute();

    $fetch = $getImage->fetch(PDO::FETCH_OBJ);

    unlink("rooms_image/" .$fetch->image);


    $delete = $conn->query("DELETE FROM rooms WHERE id='$id'");
    $delete->execute();
    echo "<script>window.location.href='".ADMINURL."./rooms-admins/show-rooms.php';    	</script>";

}



?>
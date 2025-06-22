<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>



<?php


  if (!isset($_SESSION['username']))  {
			echo "<script>window.location.href='".APPURL."'</script>";
    }



if (isset($_GET['id'])) {
    $id=$_GET['id'];

    if ($_SESSION['id']!=$id) {
			echo "<script>window.location.href='".APPURL."'</script>";
    }

    $bookings=$conn->query("SELECT * FROM  bookings WHERE user_id='$id'");
    $bookings->execute();

    $allbookings=$bookings->fetchAll(PDO::FETCH_OBJ);

}
else{
			echo "<script>window.location.href='".APPURL."/404.php'</script>";

}


?>


	<div class="container">
        <?php if(count($allbookings)>0) :?>

<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">check_in</th>
      <th scope="col">check_OUT</th>
      <th scope="col">email</th>
      <th scope="col">full_name</th>
      <th scope="col">phone_number</th>
      <th scope="col">hotel_name</th>
      <th scope="col">status</th>
      <th scope="col">room_name</th>
      <th scope="col">user_id</th>
      <th scope="col">created_at</th>


      
    </tr>
  </thead>
  <tbody>
    <?php foreach($allbookings as $booking) : ?>
    <tr>
      <th scope="row"><?php echo $booking->id; ?></th>
       <td><?php echo $booking->check_in; ?></td>
      <td><?php echo $booking->check_out; ?></td>
      <td><?php echo $booking->email; ?></td>
      <td><?php echo $booking->full_name; ?></td>
      <td><?php echo $booking->phone_number; ?></td>
      <td><?php echo $booking->hotel_name; ?></td>
      <td><?php echo $booking->status; ?></td>
      <td><?php echo $booking->room_name; ?></td>
      <td><?php echo $booking->user_id; ?></td>
      <td><?php echo $booking->created_at; ?></td>


    </tr>
  				<?php endforeach; ?>

  </tbody>
</table>
  </div>
    <?php else :?>
                <div class="alert alert-primary" role="alert">
                    You Have not made any booking just yet
            </div>
    </div>
    
<?php endif;?>



<?php require "../includes/footer.php"; ?>

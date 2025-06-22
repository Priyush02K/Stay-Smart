<?php require "layouts/header.php"?>
<?php require "../config/config.php"?>

<?php 


if (!isset($_SESSION['adminname'])) {
		echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php'</script>";
		// header("location: ".APPURL."");
}


//hotel count
$hotels=$conn->query("SELECT COUNT(*) AS count_hotels FROM hotels");
$hotels->execute();

$allHotels = $hotels->fetch(PDO::FETCH_OBJ);


//admin count
$admins=$conn->query("SELECT COUNT(*) AS count_admins FROM admins");
$admins->execute();

$allAdmins = $admins->fetch(PDO::FETCH_OBJ);


//rooms count
$rooms=$conn->query("SELECT COUNT(*) AS count_rooms FROM rooms");
$rooms->execute();

$allRooms = $rooms->fetch(PDO::FETCH_OBJ);

//booking count
$booking=$conn->query("SELECT COUNT(*) AS count_booking FROM bookings");
$booking->execute();

$Allbooking = $booking->fetch(PDO::FETCH_OBJ);


?>
            
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hotels</h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by </h6> -->
              <p class="card-text">number of hotels : <?php echo $allHotels->count_hotels?></p>
             
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Rooms</h5>
              
              <p class="card-text">Number of rooms : <?php echo $allRooms->count_rooms?></p>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Admins</h5>
              
              <p class="card-text">Number of admins : <?php echo $allAdmins->count_admins?></p>
              
            </div>
          </div>
        </div>



         <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Booking</h5>
              
              <p class="card-text">Number of booking : <?php echo $Allbooking->count_booking?></p>
              
            </div>
          </div>
        </div>

      </div>



      <style>
  .row {
    margin-top: 20px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
  }

  .card {
    background: linear-gradient(135deg, #f6f9fc, #e9eff5);
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
  }

  .card-body {
    text-align: center;
    padding: 25px;
  }

  .card-title {
    font-size: 22px;
    font-weight: 600;
    color: #333;
  }

  .card-text {
    font-size: 18px;
    font-weight: 500;
    margin-top: 10px;
    color: #555;
  }

  /* Optional: Add responsive spacing */
  @media (max-width: 768px) {
    .col-md-3 {
      flex: 0 0 100%;
      max-width: 100%;
    }
  }
</style>

   
<?php require "layouts/footer.php"?>

<?php require "../layouts/header.php"?>

<?php require "../../config/config.php"?>

<?php 


if (!isset($_SESSION['adminname'])) {
		echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php'</script>";
		// header("location: ".APPURL."");
}

$booking= $conn->query("SELECT * FROM bookings");
$booking->execute();

$allBooking = $booking->fetchAll(PDO::FETCH_OBJ);
?>

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Bookings</h5>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">check in</th>
                    <th scope="col">check out</th>
                    <th scope="col">email</th>
                    <th scope="col">phone number</th>
                    <th scope="col">full name</th>
                    <th scope="col">hotel name</th>
                    <th scope="col">room name</th>
                    <th scope="col">status</th>
                    <th scope="col">payment</th>
                    <th scope="col">created at</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($allBooking as $booking) :?>
                  <tr>
                    <th scope="row"><?php echo $booking->id ; ?></th>
                    <td><?php echo $booking->check_in ; ?></td>
                    <td><?php echo $booking->check_out ; ?></td>
                    <td><?php echo $booking->email ; ?></td>
                    <td><?php echo $booking->phone_number ; ?></td>
                    <td><?php echo $booking->full_name ; ?></td>
                    <td><?php echo $booking->hotel_name ; ?></td>
                    <td><?php echo $booking->status ; ?></td>
                    <td><?php echo $booking->payment ; ?></td>
                    <td><?php echo $booking->created_at ; ?></td>
                    <td><?php echo $booking->phone_number ; ?></td>
                    
                     <td><a href="status-booking.php?id=<?php echo $booking->id; ?>" class="btn btn-warning text-white  text-center ">status</a></td>
                  </tr>
                <?php endforeach ;?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>

<style>
  .card {
    border-radius: 15px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    margin-top: 20px;
    border: none;
  }

  .card-title {
    font-size: 24px;
    font-weight: 600;
    color: #333;
  }

  .btn-danger {
    background-color: #dc3545;
    border: none;
    transition: 0.3s ease;
  }

  .btn-danger:hover {
    background-color: #c82333;
    transform: scale(1.05);
  }

  .table {
    margin-top: 15px;
    border-radius: 10px;
    overflow: hidden;
  }

  .table th {
    background-color: #343a40;
    color: #fff;
    text-transform: capitalize;
    font-weight: 500;
    text-align: center;
  }

  .table td {
    vertical-align: middle;
    text-align: center;
  }

  .table-striped tbody tr:nth-of-type(odd) {
    background-color: #f9f9f9;
  }

  .table-striped tbody tr:hover {
    background-color: #f1f1f1;
    transition: 0.3s;
  }
</style>


<?php require "../layouts/footer.php"?>

<?php require "../layouts/header.php"?>

<?php require "../../config/config.php"?>


<?php 


if (!isset($_SESSION['adminname'])) {
		echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php'</script>";
		// header("location: ".APPURL."");
}

$rooms= $conn->query("SELECT * FROM rooms");
$rooms->execute();

$allRooms = $rooms->fetchAll(PDO::FETCH_OBJ);
?>



      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Rooms</h5>
             <a  href="create-rooms.php" class="btn btn-primary mb-4 text-center float-right">Create Room</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">image</th>
                    <th scope="col">price</th>
                    <th scope="col">num of persons</th>
                    <th scope="col">size</th>
                    <th scope="col">view</th>
                    <th scope="col">num of beds</th>
                    <th scope="col">hotel name</th>
                    <th scope="col">status value</th>
                    <th scope="col">change status</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($allRooms as $room) : ?>
                  <tr>
                    <th scope="row"> <?php echo  $room->id; ?> </th>
                    <td><?php echo  $room->name; ?> </td>
                    <td><?php echo  $room->image; ?> </td>
                    <td><?php echo  $room->price; ?></td>
                    <td><?php echo  $room->num_persons; ?></td>
                    <td><?php echo  $room->size; ?></td>
                    <td><?php echo  $room->view; ?></td>
                    <td><?php echo  $room->num_beds; ?></td>
                    <td><?php echo  $room->hotel_name; ?></td>
                    <td><?php echo  $room->status; ?></td>
                    
                    
                    

                    <td><a href="status-rooms.php?id=<?php  echo $room->id; ?>" class="btn btn-warning text-white  text-center ">status</a></td>
                    <td><a href="delete-rooms.php?id=<?php  echo $room->id; ?>" class="btn btn-danger  text-center ">Delete</a></td>
                  </tr>
              <?php endforeach ;?>
                    
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>


      <style>
  body {
    background-color: #f0f2f5;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .card {
    margin-top: 30px;
    border: none;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }

  .card-body {
    padding: 30px;
  }

  .card-title {
    font-size: 24px;
    font-weight: 600;
    color: #333;
  }

  .btn-primary {
    float: right;
    background-color: #007bff;
    border: none;
    border-radius: 6px;
    padding: 8px 16px;
    font-weight: 500;
    transition: all 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #0056b3;
  }

  .table {
    margin-top: 20px;
    border-radius: 8px;
    overflow: hidden;
  }

  .table thead {
    background-color: #343a40;
    color: white;
    font-size: 15px;
    text-align: center;
  }

  .table th, .table td {
    vertical-align: middle !important;
    text-align: center;
    padding: 12px;
  }

  .table tbody tr:hover {
    background-color: #f2f2f2;
  }

  .btn-danger {
    background-color: #dc3545;
    border: none;
    font-weight: 500;
    padding: 5px 10px;
    border-radius: 6px;
    font-size: 14px;
    transition: all 0.2s ease-in-out;
  }

  .btn-danger:hover {
    background-color: #c82333;
  }

  td img {
    max-width: 80px;
    border-radius: 6px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
  }
</style>



<?php require "../layouts/footer.php"?>

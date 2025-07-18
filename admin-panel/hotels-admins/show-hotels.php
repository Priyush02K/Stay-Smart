<?php require "../layouts/header.php"?>

<?php require "../../config/config.php"?>


<?php 


if (!isset($_SESSION['adminname'])) {
		echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php'</script>";
		// header("location: ".APPURL."");
}

$hotels= $conn->query("SELECT * FROM hotels");
$hotels->execute();

$allHotels = $hotels->fetchAll(PDO::FETCH_OBJ);
?>





          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Hotels</h5>
             <a  href="create-hotels.php" class="btn btn-primary mb-4 text-center float-right">Create Hotels</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">location</th>
                    <th scope="col">status value</th>
                    <th scope="col">change status</th>
                    <th scope="col">update</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php foreach($allHotels as $hotel): ?>
                    <th scope="row"><?php echo $hotel->id?></th>
                    <td><?php echo $hotel->name?></td>
                    <td><?php echo $hotel->location?></td>
                    <td><?php echo $hotel->status?></td>

                    <td><a  href="status-hotels.php?id=<?php echo $hotel->id?>" class="btn btn-warning text-white text-center ">status</a></td>
                    <td><a  href="update-hotels.php?id=<?php echo $hotel->id?>" class="btn btn-warning text-white text-center ">Update </a></td>
                    <td><a href="delete-hotels.php?id=<?php echo $hotel->id?>" class="btn btn-danger  text-center ">Delete </a></td>
                  </tr>
                 
                  <?php endforeach;?>
                  
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>

<style>
  body {
    background-color: #f4f6f9;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .card {
    background: #fff;
    border: none;
    border-radius: 10px;
    box-shadow: 0 6px 12px rgba(0,0,0,0.1);
    margin-top: 25px;
  }

  .card-title {
    font-size: 24px;
    font-weight: 600;
    color: #333;
  }

  .btn-primary {
    background-color: #007bff;
    border: none;
    padding: 8px 16px;
    font-weight: 500;
    border-radius: 6px;
    float: right;
    transition: background-color 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #0056b3;
  }

  .table {
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    margin-top: 20px;
  }

  .table thead {
    background-color: #007bff;
    color: white;
    font-weight: bold;
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

  .btn-warning {
    background-color: #f0ad4e;
    border: none;
    font-weight: 500;
    border-radius: 5px;
    padding: 5px 10px;
  }

  .btn-warning:hover {
    background-color: #ec971f;
  }

  .btn-danger {
    background-color: #d9534f;
    border: none;
    font-weight: 500;
    border-radius: 5px;
    padding: 5px 10px;
  }

  .btn-danger:hover {
    background-color: #c9302c;
  }
</style>


<?php require "../layouts/footer.php"?>

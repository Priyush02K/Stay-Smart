<?php require "../layouts/header.php"?>

<?php require "../../config/config.php"?>


<?php 


if (!isset($_SESSION['adminname'])) {
		echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php'</script>";
		// header("location: ".APPURL."");
}

$admins= $conn->query("SELECT * FROM admins");
$admins->execute();

$allAdmins = $admins->fetchAll(PDO::FETCH_OBJ);
?>

      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Admins</h5>
             <a  href="create-admins.php" class="btn btn-primary mb-4 text-center float-right">Create Admins</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#id</th>
                    <th scope="col">adminname</th>
                    <th scope="col">email</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($allAdmins as $admin) : ?>
                  <tr>
                    <th scope="row"><?php  echo $admin->id;?></th>
                    <td><?php  echo $admin->adminname;?></td>
                    <td><?php  echo $admin->email;?></td>
                   
                  </tr>

                  <?php endforeach; ?>
             
          
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>



  </div>

  <style>
  body {
    background-color: #f7f9fc;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .card {
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    border: none;
    border-radius: 10px;
    margin-top: 20px;
    background: #ffffff;
  }

  .card-title {
    font-size: 24px;
    font-weight: bold;
    color: #333;
  }

  .btn-primary {
    background-color: #007bff;
    border: none;
    border-radius: 6px;
    padding: 8px 16px;
    font-weight: 500;
    transition: background-color 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #0056b3;
  }

  .table {
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    margin-top: 10px;
  }

  .table thead {
    background-color: #007bff;
    color: white;
  }

  .table th, .table td {
    vertical-align: middle !important;
    text-align: center;
  }

  .table tbody tr:hover {
    background-color: #f2f2f2;
  }

</style>
<script type="text/javascript"></script>

</body>
</html>
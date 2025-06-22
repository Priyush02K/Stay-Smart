<?php require "../layouts/header.php"?>

<?php require "../../config/config.php"?>



 <?php  


if (isset($_SESSION['adminname'])) {
		echo "<script>window.location.href='".ADMINURL."'</script>";
		// header("location: ".APPURL."");
}


if (isset($_POST['submit'])) {
	if (empty($_POST['email']) OR empty($_POST['password'])  ) {
		# code...
		echo "<script>alert('one ore more input are empty') </script>";
	}
	else{
		$email = $_POST['email'];
		$password = $_POST['password'];


		//validation query
    $login=$conn->query("SELECT *FROM admins WHERE email='$email'  ");
    $login->execute();

    $fetch=$login->fetch(PDO::FETCH_ASSOC);

    //get the row count

    if ($login->rowCount()>0) {
      if (password_verify($password,$fetch['mypassword'])) 
      {

			$_SESSION['adminname']=$fetch['adminname'];
			$_SESSION['id']=$fetch['id'];

      echo "<script>window.location.href='".ADMINURL."';</script>";
	      // echo "<script>alert('LOGGED IN') </script>";


 		
      }
      else{
        	  	echo "<script>alert('email or passaword is wrong ') </script>";
         }
      
    }else{
        	  	echo "<script>alert('email or passaword is wrong ') </script>";

       }
		
		}
	}

 
  ?>





      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mt-5">Login</h5>
              <form method="POST" class="p-auto" action="login-admins.php">
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email" />
                   
                  </div>

                  
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" name="password" id="form2Example2" placeholder="Password" class="form-control" />
                    
                  </div>



                  <!-- Submit button -->
                  <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Login</button>
                  <button onclick="location.href='<?php echo APPURL; ?>'" class="btn btn-info mb-4 text-center">Back To Home</button>
                 
                </form>

            </div>
       </div>

  <style>


    
body {
  height: 100vh;
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: 'Segoe UI', sans-serif;
     padding-right: 450px;

  background: linear-gradient(-45deg, #74ebd5, #ACB6E5, #74ebd5, #ACB6E5);
  background-size: 400% 400%;
  animation: gradientBG 10s ease infinite;
}

@keyframes gradientBG {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}








    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      width: 200%;
      /* max-width: 350px; */
      background-color: #fff;
      
    }

    .card-title {
      text-align: center;
      font-weight: bold;
      color: #333;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .form-control {
      border-radius: 10px;
      padding: 10px;
      font-size: 15px;
      border: 1px solid #ccc;
    }

    .form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 0 0.2rem rgba(0,123,255,0.25);
    }

    .btn-primary {
      width: 100%;
      border-radius: 10px;
      padding: 10px;
      font-size: 16px;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>
       
 <?php require "../layouts/footer.php"?>

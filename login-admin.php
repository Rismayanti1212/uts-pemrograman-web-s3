<?php
   if(isset($_POST['login'])) {
      $admin = $_POST['email'];
      $password_admin = $_POST['password'];

      $pesan_error="";

      if ($pesan_error === "" AND $admin == 'cmzyrestaurant@gmail.com' AND $password_admin == 'cmzyres123') {
         session_start();
         $_SESSION["email"] = $admin;
         header("Location: index-admin.php");
       }
       else {
         $pesan_error .= "<p style = 'color : red; text-align: center;'>Username atau Password Salah</p>";
      }
   }
   else {
      // form belum disubmit atau halaman ini tampil untuk pertama kali
      // berikan nilai awal untuk semua isian form
      $pesan_error = "";
      $admin = "";
      $password_admin = "";
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <title>Login</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">
   <link href="css/login.css" rel="stylesheet">

</head>

<body id="body">
   <div id="login-card" class="card">
      <div class="card-body">
         <h2 class="text-center">Admin Login form</h2>
         <br>
         <?php
         // tampilkan pesan jika ada
         if (isset($pesan)) {
               echo "<div class=\"pesan\">$pesan</div>";
         }

         // tampilkan error jika ada
         if ($pesan_error !== "") {
               echo "<div class=\"error\">$pesan_error</div>";
         }
         ?>
         <form action="" method="POST">
            <div class="form-group">
               <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $admin ?>" autocomplete = 'off'>
            </div>

            <div class="form-group">
               <input type="password" class="form-control" id="password" placeholder="Enter password" name="password"  value="<?php echo $password_admin ?>" autocomplete = 'off'>
            </div>
            <div class="col-12">
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                  <label class="form-check-label" for="rememberMe">Remember me</label>
               </div>
            </div>
            <br>
            <div>
            <button type="submit" name="login" id="button" class="btn btn-primary deep-purple btn-block ">Sign In</button>
            </div>
         </form>
         <br>
         <div class="desaign" align = 'center' style = "color : grey">
                Designed by <a href="https://instagram.com/chmrsss_?igshid=YmMyMTA2M2Y">Rismayanti</a>
         </div>
      </div>
    </div>
</body>
</html>

<?php
   if(isset($_POST['login_admin'])) {
        session_start();
        header("Location: login-admin.php");
   }
   if(isset($_POST['login_user'])) {
    session_start();
    header("Location: login-user.php");
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
        <h1 class="text-center">WELCOME</h1>
         <h6 class="text-center">CMZ'y RESTAURANT</h6>
         <br>
         <form action="" method="POST">
            <button type="submit" name="login_admin" id="button" class="btn btn-primary deep-purple btn-block ">SIGN IN ADMIN</button>
            <button type="submit" name="login_user" id="button" class="btn btn-primary deep-purple btn-block ">SIGN IN USER</button>
            <br>
            <br>
            <div class="desaign" align = 'center' style = "color : grey">
                Designed by <a href="https://instagram.com/chmrsss_?igshid=YmMyMTA2M2Y">Rismayanti</a>
              </div>
         </form>
      </div>
    </div>
</body>
</html>

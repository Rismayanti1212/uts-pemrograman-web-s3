<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login_regis.css">
    <title>Login</title>
</head>
<body>
    <div class="container login">
        <div class="form-login">
            <h2>Login</h2>
            <form action="" method="post">
                <input type="text" name="user" placeholder="email atau username" class="input">
                <input type="password" name="password" placeholder="password" class="input">

                <input type="submit" name="login" value="Login" class="submit"><br><br>
            </form>

            <p><b>Belum punya akun?</b>
                <a href="register.php">Register</a>
            </p>
        </div>
    </div>
</body>
</html>
<?php
    session_start();
    require 'config.php';

    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $password = $_POST['password'];
        $admin = $_POST['user'];
        $pass_admin = $_POST['password'];

        $sql = "SELECT * FROM akun WHERE username = '$user' OR email = '$user'";
        $result= $db->query($sql);

        // cek akun ada atau tidak ada
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $username = $row['username'];
            $user_admin = $row['username'];

            if($admin == 'Admin' AND $pass_admin == 'admin'){

                $_SESSION['login'] = $user_admin;
                
                echo "<script>
                        alert('Selamat Datang $user_admin');
                        document.location.href = 'index-admin.php';
                    </script>";
            }
            else if(password_verify($password, $row['psw'])){

                $_SESSION['login'] = $username;
                
                echo "<script>
                        alert('Selamat Datang $username');
                        document.location.href = 'index-user.php';
                    </script>";
            }else{
                echo "<script>
                        alert('Username & Password Salah!');
                    </script>";

            }
        }else{
            echo "<script>
                    alert('Username & Password Tidak Terdaftar, Silahkan Registrasi!');
                 </script>";
        }
    }
?>
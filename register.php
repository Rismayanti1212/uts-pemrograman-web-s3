
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login_regis.css">
    <title>Register</title>
</head>
<body>
    <div class="container regis">

            <h2>Registrasi</h2>

        
        <div class="form">
            <form action="" method="post">

                <input type="email" name="email" class="input" placeholder="Masukkan email"><br>

                <input type="text" name="username" class="input" placeholder="Masukkan username"><br>


                <input type="password" name="password" class="input" placeholder="Password"><br>

                <input type="password" name="konfirmasi" class="input" placeholder="Konfirmasi password"><br>

                <input type="submit" name="regis" class="submit" value="Registrasi"><br><br>
            </form>

            <p><b>Sudah punya akun?</b>
                <a href="index.php">Login</a>
            </p>
        
        </div>
    </div>
</body>
</html>

<?php
    require 'config.php';

    if(isset($_POST['regis'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        // Cek Username Udah Digunakan atau Belum
        $sql = "SELECT * FROM akun WHERE username = '$username'";
        $user = $db->query($sql);
        if(mysqli_num_rows($user) > 0){
            echo "<script>
                    alert('Username telah digunakan, Silahkan gunakan Username lain')
                </script>";
        }else {
            // cek konfirmasi password
            if($password == $konfirmasi){
                $password = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO akun (email, username, psw)
                VALUES ('$email', '$username', '$password')";

                $result = $db->query($query);

                if ($result){
                    echo "<script>
                            alert('Registrasi Berhasil');
                        </script>";
                } else {
                    echo "<script>
                             alert('Registrasi Gagal');
                        </script>";
                }
            }else{
                echo "<script>
                        alert('Konfirmasi Password Salah');
                    </script>";
            }
        }
    }

?>


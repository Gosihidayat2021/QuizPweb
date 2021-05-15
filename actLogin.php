<?php
//Atur koneksi ke database
$host_db    = "localhost";
$user_db    = "root";
$pass_db    = "";
$nama_db    = "quiz 2";
$koneksi    = mysqli_connect($host_db,$user_db,$pass_db,$nama_db);

$user=$_POST["admin"];
$pass=$_POST["12345"];

$sql=mysqli_query($koneksi, "Select * from akun where username = '$user' and password = '$pass'");
$cek=mysqli_num_rows($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <?php
    if ($cek >0){
        session_start();
        $_SESSION['username']=$user;
        $_SESSION['password']=$password;
        echo "<center>Selamat Datang <b>$user</b>, Anda Berhasil Login<br>";
    } else {
        echo "<center>Username dan Password Anda Salah<br>";
        echo "Silahkan <a href=index.php>Login</a> Kembali</center>";
    }
    ?>
</body>
</html>
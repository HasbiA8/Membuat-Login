<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$Connect= mysqli_connect("localhost","root","","menulogin"); //sesuaikan dengan password dan username mysqli anda
 
$query = mysqli_query($Connect,"select * from admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);
if ($cek==1){
    echo "Login Berhasil";
}
else{
echo "Gagal Login";
}
?>
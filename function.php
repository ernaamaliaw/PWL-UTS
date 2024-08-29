<?php
$servername="localhost";
$username= "root";
$password="";
$dbname="db_erna";

$conn = mysqli_connect($servername,$username,$password,$dbname);
date_default_timezone_set('Asia/Jakarta');

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows=[];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function register($data){
    global $conn;
    $username = strtolower(stripslashes($data['username']));
    $email = $data['email'];
    $telp = $data['telp'];
    $password= mysqli_real_escape_string($conn, $data['pw']);
    $password2 = mysqli_real_escape_string($conn, $data['pw2']);
    $user_role = $data['user_role'];
    //Cek kesamaan username
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username='$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('username sudah dipakai!');</script>";
        return false;
    }
    //Cek konfirmasi pw
    if($password !== $password2){
        echo "<script>alert('password konfirmasi tidak sama!');</script>";
        return false;
    }
    //Enkrip pw
    $password = md5($password);
    //Insert DB
    mysqli_query($conn, "INSERT INTO user(username,email,telp,password,user_role) VALUES('$username','$email', '$telp','$password','$user_role')");

    return mysqli_affected_rows($conn);
}
function hapusAkun($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM user WHERE id=$id");
    return mysqli_affected_rows($conn);
}
?>
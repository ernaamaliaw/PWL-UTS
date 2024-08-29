<?php
include "function.php";
$id = $_GET['id'];
if(hapusAkun($id)>0){
    header("location:akun.php");
}
?>
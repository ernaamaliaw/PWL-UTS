<?php
    include "koneksi.php";
    include "uploadFoto.php";
    $id=$_POST['tid'];
    $nama=$_POST['tnama'];
    $jenis=$_POST['tjenis'];
    $hrg=$_POST['thrg'];
    $ket=$_POST['tket'];
    $stok=$_POST['tstok'];

    if (upload_foto($_FILES["foto"])) {
        $foto=$_FILES["foto"]["name"];
        $sql = "INSERT INTO brg (id,nama,jenis, hrg,stok,keterangan,foto) values ('$id', '$nama', '$jenis', '$hrg', '$jml', '$ket', '$foto')";
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header("location:index.php");
        }
        else{
            $conn->close();
            echo "New records failed";
        }
    } else
        echo "Sorry, there was an error uploading your file.";
?>
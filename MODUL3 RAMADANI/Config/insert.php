<?php
 
    include('connector.php');
    // require 'connector.php'; 

    if(isset($_POST['proses'])) {
        $idmobil = rand(10000000,19000000);
        $mobil = $_POST['mobil'];
        $nama = $_POST['nama'];
        $merk = $_POST['merk'];
        $date = $_POST['date'];
        $deskripsi = $_POST['deskripsi'];
        $status = $_POST['status'];
        
        
        $gambar = $_FILES['gambar']['name'];
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        move_uploaded_file($file_tmp, 'asset/image/'.$gambar);
        
        $query = "INSERT INTO showroom_ramadani_table(id_mobil, nama_mobil, pemilik_mobil, 
        merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES('$idmobil', '$mobil', '$nama', '$merk', '$date', '$deskripsi', '$gambar', '$status')";
        $query_value = mysqli_query($connect, $query);

        header("Location:/WAD2022-RAMADANI-1202204096/MODUL3%20RAMADANI/pages/ListCar-RAMADANI.php");
    }
?>
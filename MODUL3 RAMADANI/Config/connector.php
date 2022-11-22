<?php
$connect = mysqli_connect("localhost", "root", "", "modul3",3344);

$get_table = mysqli_query($connect, "SELECT * FROM showroom_ramadani_table");
$jumlah_mobil = mysqli_num_rows($get_table);
?>
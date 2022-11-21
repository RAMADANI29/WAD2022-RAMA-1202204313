<?php
    require '/connector.php';

    if(isset($_POST["delete_car"])) {
        $id = $_POST["id_mobil_hapus"];

        $query = "DELETE FROM showroom_ramadani_table WHERE id_mobil=$id";

        $query_delete = mysqli_query($connect, $query);
    }

    header("Location:/WAD2022-RAMADANI-1202204096/MODUL3%20RAMADANI/pages/ListCar-RAMADANI.php");
?>
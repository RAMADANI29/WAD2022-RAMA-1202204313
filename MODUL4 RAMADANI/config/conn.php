<?php

$connectLogin = mysqli_connect("localhost", "root", "", "wad_modul4_ramadani", 3344);

$get_table2 = mysqli_query($connectLogin, "SELECT * FROM user_ramadani");

?>
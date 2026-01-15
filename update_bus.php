<?php
include "db.php";

$x = $_POST['x'];
$y = $_POST['y'];

mysqli_query($conn, "UPDATE bus_status SET x_pos=$x, y_pos=$y WHERE id=1");
?>

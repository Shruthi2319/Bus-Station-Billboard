<?php
include "db.php";


$result = mysqli_query($conn, "SELECT * FROM bus_status WHERE id=1");
$bus = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bus Tracker Admin</title>
    <style>
        body {
            background: #111;
            color: white;
            font-family: Arial;
            text-align: center;
        }

        .map {
            position: relative;
            width: 600px;
            height: 350px;
            margin: 20px auto;
            border: 2px solid white;
            background: url("images/map.png");
            background-size: cover;
        }

        #bus {
            position: absolute;
            width: 15px;
            height: 15px;
            background: red;
            border-radius: 50%;
            transition: left 3s linear; 
            left: <?php echo $bus['x_pos']; ?>px;
            top: <?php echo $bus['y_pos']; ?>px;
        }

        button {
            padding: 10px 25px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>

<body>



<h1>🚌 Bus Tracking - Admin Control Room</h1>

<div style="display:flex; justify-content:space-around; align-items:flex-start;">

    
    <div>
        <h3>Admin Map</h3>
        <div class="map">
            <div id="bus"></div>
        </div>
        <button onclick="moveBus()">Move Bus</button>
    </div>

   
    <div>
        <h3>Billboard Preview</h3>
        <iframe 
            src="index.php"
            width="600"
            height="1000"
            style="border:2px solid white;">
        </iframe>
    </div>

</div>



<script>
let x = <?php echo $bus['x_pos']; ?>;
let y = <?php echo $bus['y_pos']; ?>;

function moveBus() {
    x += 10;   

    if (x > 560) {
        x = 50; 
    }

    
    document.getElementById("bus").style.left = x + "px";

    
    fetch("update_bus.php", {
        method: "POST",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: "x=" + x + "&y=" + y
    });
}
</script>

</body>
</html>

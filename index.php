<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        h1{
            display: block;
            display: flex;
            height: 70vh;
            justify-content:center;
            align-items: center;
            font-size: 50px;
            font-family: 'Potta One', cursive;
            color: white;
        }
    </style>
    <title>Time</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
</head>
<body>
<h1> 
    <?php 
        date_default_timezone_set('Europe/Amsterdam');
        $time = date("H");
        $test = "";
        if ($time>="6" AND $time<"12"){
            echo "Goede morgen! <br>";
            echo "Het is nu ", date("H:i");
            echo "<body style='background-image: url(img/morning.png)'>";
        }else if ($time>="12" AND $time<"18"){
            echo "Goede middag! <br>";
            echo "Het is nu ", date("H:i");
            echo "<body style='background-image: url(img/afternoon.png)'>";
        }else if ($time>="18" AND $time<"23"){
            echo "Goede Avond! <br>";
            echo "Het is nu ", date("H:i");
            echo "<body style='background-image: url(img/night.png)'>";
        }else if ($time>="0" AND $time<"6"){
            echo "Goede Nacht! <br>";
            echo "Het is nu ", date("H:i");
            echo "<body style='background-image: url(img/evening.png)'>";

        }
        ?>
        </h1>
</body>
</html>
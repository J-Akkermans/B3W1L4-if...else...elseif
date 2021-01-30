<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        h1{
            font-size: 50px;
        }
    </style>
    <title>Time</title>
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
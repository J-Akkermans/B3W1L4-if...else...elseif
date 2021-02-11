<?PHP 
$bgi = "";
$content = "";
date_default_timezone_set('Europe/Amsterdam');
$time = date("H");
if ($time>="6" AND $time<"12"){
    $content = "Goede morgen! <br> Het is nu";
    $bgi = "morning";
}else if ($time>="12" AND $time<"18"){
    $content = "Goede middag! <br> Het is nu";
    $bgi = "afternoon";
}else if ($time>="18" AND $time<"23"){
    $content = "Goede Avond! <br> Het is nu";
    echo "Het is nu ", date("H:i");
    $bgi = "night";
}else if ($time>="0" AND $time<"6"){
    $content = "Goede Nacht! <br> Het is nu";
    $bgi = "evening";
}

?>
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
            color: black;
        }
    </style>
    <title>Time</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Potta+One&display=swap" rel="stylesheet">
</head>
<body style="background-image: url(img/<?php echo $bgi;?>.png)">
<h1> 
        <?php 
            echo $content, date("H:i");
        ?>
</h1>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 03</title>
</head>
<body>
    <h1>Asas PHP</h1>

    <?php
    // komen satu baris
    #komen satu baris
    /*
    komen banyak baris
    */
    $name = 'Huda';
    echo "<h2> Hello $name</h2>";
    $x = 10;  
    $y = 11;
    echo $x + $y;
    $hadir = false;
    $umur = 22;
    $nokp = '010912021170';
    $x = 100;
    $y = 80;

    if ($x == 100 or $y == 80) {
        echo "<h4>Hello World</h4>";
    } else {
        echo "<h5>Tak dak apa</h5>";
    }
    
    ?>
    <h2>
        <?php
        $bandar = 'Parit Buntar';
        $baru = '';
        for($x = 0; $x < strlen($bandar); $x++) {
            $baru .= $bandar[$x] . '-';
        }
        echo $baru;
        ?>
    </h2>

    
    
    
</body>
</html>
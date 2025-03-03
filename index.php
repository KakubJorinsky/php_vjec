<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = "Jméno";
        $number = 3;
    ?>
    <h1><?php echo($name) ?> zde je text.</h1>

    <?php
        for($i = 0; $i <= 3; $i++){
            echo "Toto číslo je: $i <br>";
        }

        $j = 0;
        while($j <= 3){
            echo "<p>Funguje v cyklu while $j</p>";
            $j++;
        }
    ?>
</body>
</html>
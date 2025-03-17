<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>

    <?php include "header.php" ?>
    <main>
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
        <?php
        $user = 'root';
        $password = 'root';
        $db = 'prvni_db';
        $host = 'localhost';
        $port = 3306;

        $conn = new mysqli($host, $user, $password, $db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM zbozi";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Název produktu: " . $row["nazev produktu"]. " - Cena: " . $row["cena"]. " - Počet kusů: " . $row["pocet kusu"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
        <br>
        <br>
        <br>
        <?php
        $user = 'root';
        $password = 'root';
        $db = 'zaci';
        $host = 'localhost';
        $port = 3306;

        $conn = new mysqli($host, $user, $password, $db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM zak";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Jméno: " . $row["Jméno"]. " - Příjmení: " . $row["Příjmení"]. " - Třída: " . $row["Třída"] . " - Věk: " . $row["Věk"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS02 - Table</title>
    <style>
        table {border-collapse: collapse; width: 300px; height: 300px;}
        tr, td {border: 1px solid;}
    </style>
</head>

<body>
    <?php
        $baris=0;
        if(isset($_POST["submit"])){
            $baris = $_POST["baris"];
            $kolom = $_POST["kolom"];
            if (empty($baris) and (empty($kolom))){
                echo "<h2>Anda belum memasukkan jumlah baris dan jumlah kolom</h2>";
            }
            else if(empty($baris)){
                echo "<h2> Anda belum memasukkan jumlah baris </h2>";
            }
            else if(empty($kolom)){
                echo "<h2> Anda belum memasukkan jumlah kolom </h2>";
            }

        }
    ?>

    <?php
    if($baris == 0): ?>
    <form action="" method="post">
        Jumlah Baris: <br><br><input type="text" name="baris"> <br><br>
        Jumlah Kolom: <br><br><input type="text" name="kolom"> <br><br>
        <button type="submit" name="submit"> Buat Table </button>
    </form>

    <?php
        endif;
    ?>

    <?php
    echo "<table>";
    echo"<br>";
    if (isset($_POST["submit"])) {
        for($i = 1; $i <=$baris; $i++){
            echo "<tr>";
            for($j = 1; $j <=$kolom; $j++){
                echo "<td></td>";
            }
            echo "</tr>";
        }   
    }
    echo "</table>"   
    ?>

</body>
</html>
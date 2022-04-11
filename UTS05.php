<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS05 - Matrix</title>
    <style>
        table {border-collapse: collapse; width: 120px; height: 120px;}
        tr, td {border: 1px solid;}
    </style>
</head>
<body>
    <?php
        if(isset($_POST["submit"])){
        $baris = $_POST["baris"];
        $kolom = $_POST["kolom"];
        if (empty($baris) and (empty($kolom))){
            echo "<h2> Harap Masukkan jumlah baris dan jumlah kolom!!</h2>";
        }
        else if(empty($baris)){
            echo "<h2> Harap Masukkan jumlah baris!! </h2>";
        }
        else if(empty($kolom)){
            echo "<h2> Harap Masukkan jumlah kolom!! </h2>";
        }
        }
    ?>


    <form action="" method="post">
        Masukkan Jumlah Baris: <br><br><input type="number" name="baris" value="<?php if (isset($baris)) echo "$baris";?>"> <br><br>
        Masukkan Jumlah Kolom: <br><br><input type="number" name="kolom" value="<?php if (isset($kolom)) echo "$kolom";?>"> <br><br>
        <button type="submit" name="submit"> Submit </button>
    </form>

    <?php
    echo "<br>";
    echo "<table>";
        if (isset($_POST["submit"])) {
            for($i = 1; $i <=$baris; $i++){
                echo '<tr>';
                for($j = 1; $j <=$kolom; $j++){
                    echo '<td>';
                    if ($i==1 or $j==1){
                        echo $i+$j-1;
                    }
                    else{
                        echo $i+$j;
                    }
                    echo '</td>';
                }
                echo "</tr>";
            }   
        } 
    echo "</table>"; 
    ?>

</body>
</html>
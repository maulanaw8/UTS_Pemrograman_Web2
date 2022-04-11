<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS01 - List</title>
    <style>
            li{line-height: 2px;}
        </style>
</head>

<body>
    <?php
        $nilai=0;
        if(isset($_POST["submit"])){
        $nilai = $_POST["nilai"];
        }
    ?>

    <?php
    if($nilai == 0): ?>
    <form action="" method="post">
        Jumlah List: <br><br><input type="text" name="nilai"> <br><br>
        <button type="submit" name="submit"> Submit</button>
    </form>

    <?php
        endif;
    ?>

    <?php
        $i = 1;
        if (isset($_POST["submit"])) {
            echo "<h2>Jumlah list adalah $nilai:</h2>";
            while ($i <= $nilai){
                echo "<ul><li>$i</li></ul>";
                $i++;
            }
        }
    ?>

</body>
</html>
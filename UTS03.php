<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS03 - Ukuran Table</title>

    <style>
        .kecil{
            width: 75px;
            height: 75px;
            border: 1px solid black;
        }
        .sedang{
            width: 150px;
            height: 150px;
            border: 1px solid black;
        }
        .besar{
            width: 300px;
            height: 300px;
            border: 1px solid black;
        }
    </style>

</head>

<body>
        <?php
        if(isset($_POST["submit"])){
           $size = $_POST['ukuran'];
        }
        ?>

    <form action="" method="POST">
        Pilih Ukuran: <br><br>
        <select name="ukuran">
            <option <?php if ($_POST['ukuran'] == 'kecil') { ?> selected="true" <?php }; ?> value="kecil">kecil</option>
            <option <?php if ($_POST['ukuran'] == 'sedang') { ?> selected="true" <?php }; ?> value="sedang">sedang</option>
            <option <?php if ($_POST['ukuran'] == 'besar') { ?> selected="true" <?php }; ?> value="besar">besar</option>
        </select>
        <button type="submit" name="submit">Pilih</button>
    </form>

    <br>

    <?php
    if(isset($_POST["submit"])){
        if ($size == 'kecil') {
            echo '<div class="kecil"> </div>';
        } elseif ($size == 'sedang') {
            echo '<div class="sedang"> </div>';
        } elseif ($size == 'besar'){
            echo '<div class="besar"> </div>';
        }
    }
    ?>

</body>
</html>
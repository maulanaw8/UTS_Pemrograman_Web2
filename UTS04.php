<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS04 - Login</title>
</head>
<body>


    <?php
     $username = 0;
        if(isset($_POST["login"])){
            $username = $_POST['username'];
            $password = $_POST['password'];
        }
    ?>

    <?php
    if($username == 0): ?>
    <form action="" method="POST">
        Username: <br><br><input type="text" name="username"><br><br>
        Password: <br><br><input type="password" name="password"><br><br>
        <button type="submit" name="login">Login</button>
    </form>

    <?php
    endif;
    ?>

    <?php
    if(isset($_POST["login"])){
        if ($username == 'admin' && $password == '12345') {
            echo "<h2>Selamat Datang Admin</h2>";
        } else {
            echo "<h2>Username atau Password yang anda masukkan salah!!!!</h2>";
        }
    }
?>



</body>
</html>
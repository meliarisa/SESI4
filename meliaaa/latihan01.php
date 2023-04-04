<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form data</title>
</head>
<body>
    <?php
        if(isset($_GET["txUSER"])){
            $usr=$_GET["txUSER"];
            if($usr==""){
                echo "<div><h3 style='color:red;padding:5px;'>user name belum diisi</h3></div>";
            }
        }
    ?>

    <form action="latihan01.php" method="GET">
        <div>
            User Name
            <input type="text" id="txUSER" name="txUSER">
        </div>
        <div>
            password
            <input type="password" id="txPASSKEY" name="txPASSKEY">
        </div>
        <div>
            <button type="submit">login</button>
            <a href="daftar.php">daftar</a>
        </div>
    </form>
</body>
</html>
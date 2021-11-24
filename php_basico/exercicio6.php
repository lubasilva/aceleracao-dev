<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" placeholder="1 valor" name="num1"><br>
        <input type="text" placeholder="2 valor" name="num2"><br>
        <input type="text" placeholder="3 valor" name="num3"><br>
        <input type="text" placeholder="4 valor" name="num4"><br>
        <input type="text" placeholder="5 valor" name="num5"><br>
        <input type="text" placeholder="6 valor" name="num6"><br>
        <input type="submit">
    </form>

<?php
if (!empty($_GET)) {
    $num[] = $_GET['num1'];
    $num[] = $_GET['num2'];
    $num[] = $_GET['num3'];
    $num[] = $_GET['num4'];
    $num[] = $_GET['num5'];
    $num[] = $_GET['num6'];

    
    for($i = 0; $i < 6; $i++) {
        $media += $num[$i];
    }

    echo $media / 6;
    
}

?>
</body>
</html>
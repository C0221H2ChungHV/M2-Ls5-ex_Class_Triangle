<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <div><label>Nhap mau tam giac:</label><input type="text" name="color" required></div>
    <br/>
    <div><label>Nhap do dai canh thu nhat:</label><input type="text" name="side1" required></div>
    <br/>
    <div><label>Nhap do dai canh thu hai:</label><input type="text" name="side2" required></div>
    <br/>
    <div><label>Nhap do dai canh thu ba:</label><input type="text" name="side3" required></div>
    <br/>
    <div><input type="submit" value="Submit"></div>
</form>
<?php
include_once('Triangle.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_POST["name"];
    $color=$_POST["color"];
    $side1=$_POST["side1"];
    $side2=$_POST["side2"];
    $side3=$_POST["side3"];
}
echo"------------<br/>";
$triangle = new Triangle($name, $color, $side1, $side2, $side3);
$triangle->getArea();
$triangle->getPerimeter();
$triangle->toString();
?>
</body>
</html>

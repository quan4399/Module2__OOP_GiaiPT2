
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
<form action="" method="post">
    <table>
        <tr>
            <td>Hệ số bậc 2: </td>
            <td>
                <input type="number" name="a">
            </td>
        </tr>
        <tr>
            <td>Hệ số bậc 1: </td>
            <td>
                <input type="number" name="b">
            </td>
        </tr>
        <tr>
            <td>Hệ số tự do: </td>
            <td>
                <input type="number" name="c">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Giải">
            </td>
        </tr>
    </table>
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    include_once "QuadraticEquation.php";
    $pt = new QuadraticEquation($a,$b,$c);
    echo $pt->result()."</br>";
}
?>

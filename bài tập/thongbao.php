<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hiển thị thông báo</title>
</head>
<body>
<form action="" method="post">

    <input name="number" type="number" placeholder="input number">
    <input type="submit" value="enter">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$number = $_POST["number"];

$arr =[];
    for ($i = 0; $i < $number; $i++) {
        $arr[$i] = rand(0,100);
    }
    if ($number < 0 or $number >100) {
        echo "chỉ nhập vào các số khoảng từ 0 đến 10";
    }else{
        echo $arr[$i];
    }
}

?>
</body>
</html>

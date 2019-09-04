<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input {
        width: 300px;
        font-size: 18px;
        border: 2px solid greenyellow;
        border-radius: 30px;
        padding: 12px 10px 12px 10px;
    }

    #submit {
        border: 1px solid black;
        border-radius: 20px;
        padding: 10px 32px;
        font-size: 16px;
        background: grey;
    }
</style>
<body>
<form method="post">
    <table>
        <tr>
            <td><h2>Inventment Amount: </h2></td>
            <td><input type="text" name="present_value" placeholder="Nhập lượng tiền đầu tư ban đầu..."></td>
        </tr>
        <tr>
            <td><h2>Yearly Interest Rate: </h2></td>
            <td><input type="text" name="interest_rate" placeholder="Nhập lãi suất năm..."></td>
        </tr>
        <tr>
            <td><h2>Number of Years: </h2></td>
            <td><input type="text" name="years" placeholder="Nhập số năm đầu tư..."></td>
        </tr>
        <tr>
            <td>
                <button type="submit" id="submit">Calculate</button>
            </td>
        </tr>
    </table>
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $value_One = $_POST["present_value"];
       $value_Two = $_POST["interest_rate"];
       $value_Three = $_POST["years"];
       $future = ($value_One + ($value_One*$value_Two))*$value_Three;
       echo "<h2> $future </h2";
    }
?>
</body>
</html>

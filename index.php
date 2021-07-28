<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Dream</title>
</head
<body align="center">
<h1>Currency Converter</h1>
<br>
<br>
<br>
<form action="index.php" method="get">
Enter Currency : <input type="text" name="input" />
 Select Currency :
    <select name="Dropdown">
        <option value="USD">USD</option>
        <option value="GBP">GBP</option>
        <option value="ZAR">ZAR</option>
    </select>

    <input type="submit" name="sbmt" value="Convert" />

</form>

</body>
</html>


<?php

if(isset($_GET['sbmt']))
{
    $cc_input = $_GET['input'];
    $cc_dropdown = $_GET["Dropdown"];

     if($cc_dropdown == "USD")
     {
            $output = $cc_input * 1.1810;
            echo $output . " Dollar";
        }
}




?>


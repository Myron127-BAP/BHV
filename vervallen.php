<?php
error_reporting( error_reporting() & ~E_NOTICE );
session_start();
include 'codesend.php';
if ($_SESSION['gebruiker'] == 1) {
    header("Location: overview.php");
}
if ($_SESSION['vervallen'] == false)
{
    header("Location: login.php");
}
?>
<!doctype html>
<head>

    <link rel="stylesheet" href="Style.css" type="text/css">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Index</title>

</head>
<body>

<div class="inlogcode">
    <form action='#' method='POST'>
        <label>De Code is helaas verlopen </label>
        <br>
        <input class="btn-normal" type="submit" name="codeverzenden" value="Verzend een nieuwe code">
    </form>
</div>
</body>

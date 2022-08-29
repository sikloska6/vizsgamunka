<?php 

$utazas = $_POST['utazas'];
$szallas = $_POST['szallas'];
$utasok_szama = $_POST['utasok_szama'];
$plusz_agy = $_POST['plusz_agy'];
$idegenvezetes = $_POST['idegenvezetes'];
$utasbiztositas = $_POST['utasbiztositas'];
$egyeb = $_POST['egyeb'];
$submit = $_POST['submit'];

$total = $utazas+$szallas+$plusz_agy+$idegenvezetes+$utasbiztositas+$egyeb;
$total = $total*$utasok_szama;
$truetotal = number_format($total,0, '.', '.');

if(isset($_POST['submit']))
{
print('<div>'.$truetotal.'Ft'.'</div>');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajánlat</title>
    <style>
        body{
            width: 100%;
            background-color: #66AB78;
            padding: 10px;
            margin: 10px;
        }
        body > div{
            text-align: center;
            font-size: x-large;
        }
        a{
            text-align: left;
            font-size: larger;
            color: black;
        }
        a:hover{
            color: crimson;
        }
    </style>
</head>
<body>
    <div>A jelenlegi jánlat amit adhat!</div>
    <a href="admin.php">Ajánlatot írok</a>
</body>
</html>


<style>
    span{
        font-size: 20px;
        font-weight: 20px;
        color: white;
    }
</style>
<?php

if(isset($_POST['submit'])){
    $nev = $_POST['nev'];
    $email = $_POST['email'];
    $telefonszam = $_POST['telefonszam'];
    $tb_szam = $_POST['tb_szam'];
    $utasok_szama = $_POST['utasok_szama'];
    $plusz_agy = $_POST['plusz_agy'];
    $idegenvezetes = $_POST['idegenvezetes'];
    $utasbiztositas = $_POST['utasbiztositas'];
    $egyeb = $_POST['egyeb'];
    if($nev !=''&& $email !=''&& $telefonszam !=''&& $tb_szam !=''&& $utasok_szama !=''&& $plusz_agy !=''&& $idegenvezetes !=''&& $utasbiztositas !=''&& $egyeb !='')
    {
        echo "<script> window.location.href = './visszaigazol.php' </script>";
    }
    else{
    ?><span><?php echo "kérem minden mezőt töltsön ki!";?></span> <?php
    }
    }

?>
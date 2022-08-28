<?php
require_once('./conf.php');
$conn = mysqli_connect($server, $user, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['delete']))
{
    $id = $_POST['id'];
    $sql = "DELETE FROM foglalas.utas WHERE  id ='$id';";
    $result = mysqli_query($conn, $sql);
    if($sql)
    {
        echo '<script>alert("ADAT TÖRÖLVE!"); </script>';
        header("location:admin.php");
    }
    else
    {
        echo '<script>alert("NEM SIKERÜLT A TÖRLÉS!"); </script>'; 
    }
}
?>


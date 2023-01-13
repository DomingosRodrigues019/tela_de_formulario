<?php
    session_start();
    if((!isset($_SESSION['email']) == true ) and (!isset($_SESSION['senha']) == true))
    {
        unset ($_SESSION['email']);   
        unset ($_SESSION['senha']); 
        header('Location:login.php');
    }
        $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>SISTEMA</title>
<style>
    body{
         background-image: linear-gradient(to right, rgb(128, 41, 235), rgb(72, 0, 78));
         color: white;
    }
</style>
</head>
<body>
    
    <h1>Acessou o sistema!</h1>
</body>
</html>
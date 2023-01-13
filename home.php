<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Domingos</title>
    <style>
        body{
            font-family:Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(128, 41, 235), rgb(72, 0, 78));
        }
        .box{
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            border-radius: 20px;                 /*serve para aredondar as bordas*/
            
        }
        a{
            padding: 15px;
             font-size: 15px;
             color: white;
             border: 2px solid rgb(105, 18, 94); 
             border-radius: 10px;       

        }
        a:hover{
            background-image: linear-gradient(to right, rgb(128, 41, 235), rgb(72, 0, 78));
        
        }
    </style>
</head>
<body>
    <div class = "box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>
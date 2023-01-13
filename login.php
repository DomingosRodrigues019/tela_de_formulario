<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tela de Login </title>
    <style>
        body{

            background-image: linear-gradient(to right, rgb(128, 41, 235), rgb(72, 0, 78));
        }
        div{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            border: 80px;
            border-radius: 20px;
            color: white;
        }
        fieldset{
            border: 3px solid rgb(105, 18, 94);
            border-radius: 20px;
        
        }
        legend{
            border: 3px solid rgb(105, 18, 94);
            border-radius: 20px;
            padding: 10px;
            text-align:center;
            color: white; 
        }
        input{
            padding: 15px;
            border: 3px solid rgb(105, 18, 94);
            outline: none;
             font-size: 15px;
             border-radius: 10px;
        }
        .submit{
            background-color: rgb(105, 18, 94);
            border: none;
            padding: 15px;
             width: 100%;
             border-radius: 10px;
             color: white;
         
        }
        .submit:hover{
            background-image: linear-gradient(to right, rgb(146, 102, 211), rgb(184, 15, 214));
            cursor: pointer;
        } 

    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
       <fieldset>
            <legend><b>LOGIN</b></legend>
                 <form action="consultarLogin.php"method="POST">
                    <input type="text" name="email" placeholder="Email">
                    <br><br>
                    <input type="password" name=" senha" placeholder="Senha">
                    <br><br>
                    <input class= "submit"type="submit" name="submit" value="Enviar">
                </form>
       </fieldset> 
    </div>
</body>
</html>
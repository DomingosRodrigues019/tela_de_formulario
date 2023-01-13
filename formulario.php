<?php
    if (isset($_POST['submit'])) 
    {
        /*print_r('NOME: '.$_POST['nome']);
        print_r('<br>');
        print_r('EMAIL: '.$_POST['email']);
        print_r('<br>');
        print_r('TELEFONE: '.$_POST['telefone']);
        print_r('<br>');
        print_r('SEXO: '.$_POST['genero']);
        print_r('<br>');
        print_r('DATA DE NASCIMENTO: '.$_POST['data_nascimento']);
        print_r('<br>');
        print_r('CIDADE: '.$_POST['cidade']);
        print_r('<br>');
        print_r('ESTADO: '.$_POST['estado']);
        print_r('<br>');
        print_r('ENDEREÇO: '.$_POST['endereco']);*/

        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query( $conexao, "INSERT INTO usuarios(nome, senha, email, telefone, sexo, data_nasc, cidade, estado, endereco) 
        VALUES ( '$nome','$senha','$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco' )");
    }   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
    <style>
        body{
            font-family:Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(128, 41, 235), rgb(72, 0, 78));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid rgb(105, 18, 94);
        
        }
        legend{
            border: 3px solid rgb(105, 18, 94);
            padding: 10px;
            text-align:center;
            background-color: rgb(105, 18, 94);
            color: white; 
        }
        .inputbox{
            position: absolute;
        }
        .inputUser{
            background: none;
            border: none;
            outline: none;
            border-bottom: 1px solid white;
            color: white;
            font-size:15px;
            width: 175%;
        }
        .LabelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .LabelInput,
        .inputUser:valid ~ .LabelInput{
            top: -10px;
            font-size: 10px;
            color: rgb(105, 18, 94);
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-color: rgb(105, 18, 94);
            width: 100%;
            border: none;
            padding: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px; 
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(146, 102, 211), rgb(184, 15, 214));
        }

    </style>
</head>
<body>
<a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method= "POST">
            <fieldset>
                <legend><b>FORMULARIO </b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome", id="nome", class="inputUser" required>
                    <label for="name" class="LabelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="password" name="senha", id="senha", class="inputUser" required>
                    <label for="senha" class="LabelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text"name="email", id="email", class="inputUser" required>
                    <label for="email" class="LabelInput">Email</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone", id="telefone", class="inputUser" required>
                    <label for="tel" class="LabelInput">Telefone</label>
                </div>
                <br>
                <P>Sexo:</P>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>  
                <br><br>            
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br><br>
                <input type="radio" id="outros" name="genero" value="outros" required>
                <label for="feminino">Outros</label>
                <br><br>
                <label for="data_de_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>  
                <br><br>
                <div class="inputbox">
                    <input type="text"name="cidade", id="cidade", class="inputUser" required>
                    <label for="cidade" class="LabelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text"name="estado", id="estado", class="inputUser" required>
                    <label for="estado" class="LabelInput">Estado</label>
                 </div>
                 <br><br>
                <div class="inputbox">
                <input type="text"name="endereco", id="endereco", class="inputUser" required>
                <label for="endereco" class="LabelInput">Endereço</label>
                 </div>
                 <br><br>
                 <input type="submit" name="submit", id="submit">
            </fieldset>
            
        </form>
            
    </div>
</body>
</html>
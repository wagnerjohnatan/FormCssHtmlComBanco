<?php

if(isset($_POST['submit'])){




include_once('config.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['genero'];
$data_nasc = $_POST['data_nasc'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];


$result = mysqli_query($conexao, "INSERT INTO usuario(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco)
 VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right,rgb(142, 5, 233), rgb(238, 28, 28));
        }
        .box{
            position:absolute;
            top: 60%;
           
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: white;
            padding: 15px;
            border-radius: 20px;
            
            
        }
        fieldset{
            border: 3px solid salmon;
        }
        legend{
            border: 1px solid salmon;
            padding: 10px;
            text-align: center;
            background-color: salmon;
            color: snow;
            border-radius: 5px;
        }
        .inputbox{
            position: relative;
            
        }
        .inputUser{
            background: none;
            border:none;
            border-bottom: 1px solid black;
            outline: none;
            color: black;
            font-size: 12px;
            width: 100%;
            letter-spacing: 2px;

        }
       .labelInput{
           position: absolute;
           
           pointer-events: none;
           transition: .5s;
       }
       .inputUser:focus ~ .labelInput, 
       .inputUser:valid ~ .labelInput{
           top: -80px;
           font-size: 12px;
           color: coral;
       }
       #data_nascimento{
           border:none;
           padding: 8px;
           border-radius: 10px;
           outline: none;
           font-size: 15px;

       }
       #submit{
        background-image: linear-gradient(to right,rgb(142, 5, 233), rgb(238, 28, 28));
        width: 100%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
       }
       #submit:hover{
        background-image: linear-gradient(to right,rgb(116, 21, 180), rgb(207, 24, 24));
       }

    </style>
</head>
<body>
    <div class="box">
        <form action="FormUsuario.php" method="POST">
            <fieldset>
             <legend><b>Formulário de Usuários</b></legend>
             <br>
             <div class="inputBox">
                 <input type="text" name="nome" id="nome" class="inputUser" required>
                 <label for="nome" class="labelInput">Nome Completo</label>
             </div>
             <br><br>
             <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="nome" class="labelInput">Email</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="nome" class="labelInput">Telefone</label>
            </div>
            <br><br>
            <p>Sexo:</p>
            <input type="radio" id="feminino" name="genero" value="feminino" required>
            <label for="feminino">Feminino</label>
            <input type="radio" id="masculino" name="genero" value="masculino" required>
            <label for="masculino">Masculino</label>
            <input type="radio" id="outro" name="genero" value="outro" required>
            <label for="outro">Outro</label>
            <br><br>
            
                <label for="data_nasc"><b>Data de Nascimento:</b> </label>
                <input type="date" name="data_nasc" id="data_nasc"  required>
                
           
            <br><br>
            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelInput">Estado</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco">Endereço</label>
            </div>
            <br><br>
            <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>                                                                                                 
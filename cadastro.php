
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

     <style>
        
        :root {
            --input-linear: linear-gradient(120deg, #f5f5f7, #42424e);
            --button-linear: linear-gradient(120deg, #f5f5f7, #42424e, #0d0f0f);
            --white: #fff;
        }
        
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .navbar{
            margin-bottom: 0;
        }

        .login {
            height: 100vh;
            background: var(--input-linear);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login_container {
            min-height: 500px;
            width: 400px;
            background-color: var(--white);
            box-sizing: border-box;
            padding: 32px;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login_title{
            margin-bottom: 32px;
            color: #303030;
        }

        .login_form{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .login_input{
            height: 48px;   
            width: 100%;
            box-sizing: border-box;
            padding-left: 8px;
            border: unset;
            outline: none;
        }

        .login_inputborder{
            height: 1px;
            width: 100%;
            margin-bottom: 16px;
            background-color: #cfcfcf;
            transition: .3s ease-in-out;       
        }

        .login_inputborder::after{
            content: '';
            display: block;
            height: 1px;
            width: 0;
            margin-bottom: 16px;
            background: var(--input-linear);
            transition: .3s ease-in-out;
        }

        .login_input:focus + .login_inputborder::after{
            width: 100%;
        }

        .login_submit{
            height: 48px;
            width: 100%;
            outline: none;
            background: var(--button-linear);
            background-size: 200%;
            margin-bottom: 42px;
            color: var(--white);
            font-size: 16px;
            font-weight: bold;
            border: unset;
            border-radius: 4px;
            cursor: pointer;
            transition: 2s ease;
        }

        .login_submit:hover{
            background-position: right;
        }

        .login_reset{
            font-size: 12px;
            color: #929292;
            text-decoration: none;
        }
    </style>
</head>
<body>
<script type="text/javascript" >
    $(document).ready(function(){
        $('#cep').mask('99.999-999')
    });       
</script>

<?php
include 'conexao.php';
?>

<div class="container-fluid">
        <div class="row">
            <div class="col-sn-4 col-sm-offset-4">
                <main class="login">
                    <div class="login_container">
                        <h1 class="login_title">Cadastro</h1>

                        <form class="login_form" method="POST" action="cadastrouser.php" name="login"> <!--receber usuario-->
                            
                            <input class="login_input" type="text" name="nome" required placeholder="Nome">
                            <span class="login_inputborder"></span>    

                            <input class="login_input" type="text" name="sobrenome" required placeholder="Sobrenome">
                            <span class="login_inputborder"></span>

                            <input class="login_input" type="email" name="email" required placeholder="E-mail">
                            <span class="login_inputborder"></span>

                            <input class="login_input" type="password" name="senha" required placeholder="Senha">
                            <span class="login_inputborder"></span>

                            <input class="login_input" type="text" name="cidade" required placeholder="Cidade">
                            <span class="login_inputborder"></span>

                            <input class="login_input" type="text" id="cep" name="cep" required placeholder="Cep">
                            <span class="login_inputborder"></span>

                            <textarea class="login_input" type="text" name="endereco" required style="height: 140px; width: 340px; resize: none"placeholder="Endereço"></textarea>
                            <span class="login_inputborder"></span>

                            <button class="login_submit" name="cadastro" >Cadastrar</button>
                           
                        </form>
                        
                    </div>
                </main>
            </div>    
        </div>    
    </div>   
    <script type="text/javascript" src="jquery.mask.js"></script> 
</body>
</html>
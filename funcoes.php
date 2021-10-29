<?php

    function alertErro($msg)
    {
        echo '<div class="alert alert-danger" role="alert">';
            echo $msg;
        echo '</div>';   
    }
    function alertSucesso($msg)
    {
        echo '<div class="alert alert-success" role="alert">';
        echo $msg;
        echo '</div>';
    }
    function btEncerrar()
    {
     echo '<div class="row justify-content-center">
                <!--Ml coloca margin na esquerda-->
                <a href="lista_dados.php" class="btn btn-primary text-center ml-3">Ver Dados</a>
                <a href="index.php" class="btn btn-primary text-center ml-3">Cadastrar</a>
            </div>';
    }
    function login()
    {
        //Mudar no banco para não ser possivel adicionar 2 e-mails no mesmo banco
        session_start();
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        //Cripritografar a senha no banco de dados
        require_once "conexao.php";
        $query = "SELECT nome FROM usuario WHERE email = $email AND senha = sha1('".$senha."')";

        //Essa ! inverte a avalição
        if(!($resultado -> num_rows == 1 )){
            header("location: login.php");
            exit();
        }

        echo $query;
        $resultado = $con -> query($query);
    }
?>
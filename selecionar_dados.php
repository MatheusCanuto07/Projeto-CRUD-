<?php

    require_once "conexao.php";
    $flag = 0;
    //Constroi a que consulta
    $query = "Select * FROM cliente where id = {$_GET['id']}";
    //Executa a consulta
    $resultado = $con -> query($query);

    // Verefica se a consulta retornou algum resultado
    if ($resultado -> num_rows > 0) {
        foreach ($resultado as $value) {
            foreach ($value as $key => $v) {
                $$key = $v;
            }
        }
    }
?>
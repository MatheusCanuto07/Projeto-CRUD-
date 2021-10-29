    <?php
    require_once "conexao.php";

    if(isset($_GET['id'])){
        $frag = 0;
    } else{
        $frag = 1;
    }

    $array_erro = [];

    //Trim retira excesso de espaço
    $id = trim($_POST['id']);
    //Trim retira os espaços 
    empty($_POST['nome']) ? $array_erro['nome'] = "Campo nome não preenchido" : $nome = trim($_POST['nome']);
    empty($_POST['email']) ? $array_erro['email'] = "Campo e-mail não preenchido" : $email = trim($_POST['email']);
    empty($_POST['dtnascimento']) ? $array_erro['dtnascimento'] = "Campo data não preenchido" : $dtnascimento = trim($_POST['dtnascimento']);
    //Float val retorna um valor float 
    //strreplace, substitui a virgula e o ponto
    empty($_POST['salario']) ? $array_erro['salario'] = "Campo salario não preenchido" : $salario = trim(floatval(str_replace(',','.', $_POST['salario'])));
    empty($_POST['modalidades']) ? $array_erro['modalidades'] = "Campo modalidades não preenchido" : $modalidades = trim($_POST['modalidades']);
    if (count($array_erro) > 0) {
        foreach ($array_erro as $value) {
            alertErro($value);
            echo '<br>';
        }
    } else {
        $query = '';

        //criamos a query

        if($flag){
        $query = "INSERT INTO cliente values(NULL, '$nome', '$email', '$dtnascimento', '$salario', '$modalidades', NOW())";
        }else{
        $query = "UPDATE cliente set nome ='$nome', email='$email', dtnascimento='$dtnascimento', salario='$salario',modalidades='$modalidades' WHERE id = id={$_POST['id']}";
        }

        //execução da query acontece aqui
        $resultado = $con->query($query);

        if($resultado){
            alertSucesso('Operação realizada com sucesso!');
            unset($nome, $email, $dtnascimento, $salario, $modalidades);
            $con->close();
            btEncerrar();
            exit;

        }else{
            alertErro('Não foi possível realizar a operação');
     
        }
    }

    ?>
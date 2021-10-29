<!--Formulário-->
<main class = "shadow-lg py-3 px-md-5 mb-5 bg-white text-dark rounded border">
<?php
    $flag = 1;
    //Php entende qualquer dado diferente de dado de 0 como verdadeiro 
    //O botão submit foi acessionado
    if(isset($_POST['submit']) || isset($_POST['alterar']))
        require_once "resultado.php";   
    elseif(isset($_GET['id'])){
        require_once "selecionar_dados.php";
    }   
?>
<form action="#" method="post">
    <!--Explicação
        Caso o id já tenha sido atribuido a variavel global ela vai ser impressa, se não ela o input não vai ser impresso
        O type hidden faz com que o input fique oculto
    -->
    <input type="hidden" name="id" value="<?= isset($_GET['id'])?$_GET['id']:"" ?>">
<div class="form-row">
    <div class="form-group col-md-8">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" value = "<?= isset($nome)?$nome:'' ?>">
    </div>
    <div class="form-group col-md-4">
        <label for="email">E-mail</label>
        <input type="email" name="email" class="form-control" id="email" value = "<?= isset($email)?$email:'' ?>">
    </div>

</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="dtnascimento">Data de Nascimento</label>
        <input type="date" class="form-control" name="dtnascimento" id="dtnascimento" value = "<?= isset($dtnascimento)?$dtnascimento:'' ?>">
    </div>
    <div class="form-group col-md-4">
        <label for="salario">Salário</label>
        <input type="text" name="salario" class="form-control" placeholder="0000,00" id="salario" value = "<?= isset($salario)?$salario:'' ?>">
    </div>
    <div class="form-group col-md-4">
        <label for="modalidades">Modalidades</label>
        <input type="number" name="modalidades" class="form-control" id="modalidades" value = "<?= isset($modalidades)?$modalidades:'' ?>">
    </div>

</div>
<div class="form-row"> 
    <?php
        if($flag):
    ?>
    <input type="submit" name="submit" class="btn btn-primary text-center" value="Enviar">
    <?php
        else:
    ?>
    <input type="submit" name="alterar" class="btn btn-primary text-center" value="Alterar">
    <?php
        endif  
    ?>
    <a href="lista_dados.php" class="btn btn-primary text-center">Ver dados</a>
</div>


</form>

</main>
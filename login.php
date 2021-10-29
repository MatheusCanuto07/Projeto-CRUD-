<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="form-row justify-content-center">
        <main class="shadow-lg py-3 px-md-5 mt-5 mb-5 bg-white text-dark rounded border">
            <!--<main class="d-flex shadow-lg justify-content-center rounded border">-->
               
            <form action="index.php" method="post">
                
                <div class="form-group justify-content-center">
                    <h1 class="text-center">Login</h1>
                </div>
           
                <div class="form-group justify-content-center">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= isset($email) ? $email : '' ?>">
                </div>

                <div class="form-group justify-content-center">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" class="form-control" id="senha" value="<?= isset($senha) ? $senha : '' ?>">
                </div>

                <div class="form-group justify-content-center">
                    <input type="submit" value="submit" class="btn btn-primary">
                </div>

            </form>
        </main>
    </div>
</body>
</html>
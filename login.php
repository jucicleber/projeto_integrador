<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
    body {
        background-image: url(../imagens_do_project/fundo2.jpg);
        background-attachment: fixed;
        background-size: 100%;
    }

    h1 {
        font-family: arial;
        font-size: 70px;
        color: red;
    }

    label {
        font-family: arial;
        font-size: 50px;
        color: red;
    }
    </style>
    <title>Tela de login</title>
</head>

<body>
    <div class="container">
        <div>
            <h1>Por favor digite seus dados de login nos campos abaixo:</h1>
        </div>
        <form method="POST" action="verificacao.php">
            <div class="mb-3 col-6">
                <label for="exampleFormControlInput1" class="form-label">Login</label>
                <input type="text" class="form-control" name="login" placeholder="Digite seu login">
            </div>
            <div class="mb-3 col-6">
                <label for="exampleFormControlTextarea1" class="form-label">Senha</label>

                <input type="text" class="form-control" name="senha" placeholder="Digite sua Senha">
            </div>
            <div class="d-grid gap-2 col-4">
                <button type="button" class="btn btn-primary btn-block">Confirmar</button>
            </div>
            
        </form>
    </div>

</body>

</html>
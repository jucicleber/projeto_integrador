<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-image:url(../imagens_do_project/fundo3.jpg) ;
            
        }
        h1,h2,h3{
            font-family:arial;
            font-size:50px;
            color: blue;            
        }       
        button{
            font-family:arial;
            font-size:50px;
            color: blue;
            background-color: black;
            border-radius: 150px;
        }
    </style>
    <title>dashboard</title>
</head>
<body>
    <h1>Seja Bem vindo!!!</h1>
    <h3>Ao sistema Chácara São João</h3>
    <h2>Qual processo vamos executar? Selecione nos botões abaixo.</h2>
    <button>
        Criar requisição
    </button>
    <button>
        <a href="adicionar_nota.php"><button>Adicionar nota no estoque</button></a>
    </button>
    <button>
        Criar devolução
    </button>
    <button>
        Emitir nota fiscal
    </button>
        <a href="produto.php"><button>Cadastrar Produto</button></a>
    <button>
        <a href="ver_saldo.php"><button>Ver estoque</button></a>
    </button>
    <button>
        Ver cadastros de pessoas no sistema
    </button>
</body>
</html>

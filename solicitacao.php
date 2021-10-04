<?php
include_once("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            body{
                background-image:url(../imagens_do_project/imagem3.jpg ) ;
                background-attachment:fixed;
                background-size:100%;
            }
            .bt1{
                background-color: black;
                border-radius: 50px;
            }
            h1{
                font-family:arial;
                font-size:50px;
                color:blue;
            }
            h5{
                font-family:arial;
                font-size:50px;
                color:blue;
            }
            h6,h2,h3,h4{
                font-family:arial;
                font-size:20px;
                color:black;
            }
            button{
                font-family:arial;
                font-size:50px;
                color:black;
            }
        </style>
    
    </head>
    <body>
        <h1>Insira seus dados para liberação de acessos!</h1>

        <h5>Após preencher os dados aguardar email de resposta da analise.</h5>
        <form method="POST" action="cadastro_solicitacao.php">

        <h2> Nome </h2>
        <input class="nome" type="text" name="nome">

        <h3> Email Corporativo</h3>
        <input class="email" type="text" name="email">

        <h4> Matricula</h4>
        <input class="matricula" type="text" name="matricula">
        <button type="submit" >Enviar informações</button>

        <h6> Cargo</h6>
        <?php
            
            /* query para chamar o banc de dados. */
            $query = "SELECT * from cargo";
            
        ?>
        <select class="Opções" name="cargo">
            <option value="" selected="selected">-- Selecione a opção</option>>
            <?php
                if ($result = $conn->query($query)) {
                    while ($row = $result->fetch_row()) {  ?>
                    <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
                    <?php
                    }
                }

            ?>
            </form>
    </body>
</html>
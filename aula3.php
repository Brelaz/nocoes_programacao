<html>
    <head>
        <title>Nosso primeiro Sistema</title>
    </head>
    <body bgcolor="gray">
        <form action="" method="POST">
            <center>
                <h1 style="color:white;">Cadastro de Alunos</h1><br>
                <label style="color:white;">Nome</label><br>
                <input type="text" name="nome"> <br>

                <label style="color:white;">RG</label><br>
                <input type="text" name="rg"> <br>

                <label style="color:white;">CPF</label><br>
                <input type="text" name="cpf"> <br>

                <label style="color:white;">Idade</label><br>
                <input type="text" name="idade"> <br>
                
                <button type="submit">Salvar</button>
            </center>
        </form>
    </body>
</html>
<?php
if(isset($_POST['nome']) && isset($_POST['rg'])){
    if($_POST['nome'] == ""){
        echo "<h2 style='color:red;'>O nome não foi informado</h2>";
    }else if($_POST['nome'] == "Mateus"){
        echo "o nome é mateus";
    }else{
        echo "<h2 style='color:green;'>Seu cadastro foi efetuado com Sucesso!</h2>";
    }
}
?>
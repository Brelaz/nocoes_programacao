<html>
    <head>
        <title>Nosso primeiro Sistema</title>
    </head>
    <body bgcolor="gray">
        <form action="" method="POST">

            <label style="color:white;">Nome</label><br>
            <input type="text" name="nome"> <br>


            <label style="color:white;">Sobrenome</label><br>
            <input type="text" name="sobrenome"> <br>

            
            <button type="submit">Salvar</button>
        </form>
        <?php

            $variavel = "mateus alves";
            echo $variavel;
            print_r($_POST);
            echo 'oi';
            if(isset($_POST['nome'])){
                if($_POST['nome'] == "mateus"){
                    echo "olá mateus";
                }else if($_POST['nome'] == "cristina"){
                    echo "olá cristina";
                }else if($_POST['nome'] == "danila"){
                    echo "olá danila";
                }else if($_POST['nome'] == 'vinicius'){
                    echo "olá vinicius";
                }else if($_POST['nome'] == 'mateus alves'){
                    echo "olá mateus alves";
                }else if($_POST["nome"] == 'erica'){
                    echo "olá erica";
                }else if($_POST["nome"] == 'natalia'){
                    echo "olá natalia";
                }else if($_POST["nome"] == 'renato'){
                    echo "olá renato";
                }

                if($_POST['nome'] == "mateus" || $_POST['nome'] == "cristina" || $_POST['nome'] == "danila"){
                    echo "estamos estudando no polo";
                }
            }
            
        ?>
    </body>
</html>
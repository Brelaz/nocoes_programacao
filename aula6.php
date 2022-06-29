<html>
    <head>
        <title>Tarumã SP</title>
    </head>
    <body>
        <form action="" method="POST">
            <center>    
                <label>Cidade: </label><br>
                <input type="text" name="cidade" required><br>

                <label>Estado: </label><br>
                <input type="text" name="estado" required><br>
                <button type="submit">Salvar/Gravar</button>
            </center>
        </form>
        <center>
        <?php
        class pessoa_obj{};


        $pessoa = new pessoa_obj();
        $pessoa->name = "Nick";
        $pessoa->sobrenome = "Doe";
        $pessoa->idade = 0.6;
        $pessoa->date = '01/01/2022';
        $pessoa->peso = 8;

        $arrayPessoas = array();
        echo "<br>O meu array de pessoas: <br>";
        print_r($arrayPessoas);
        array_push($arrayPessoas, $pessoa);
        
        echo "<br><br><pre>";
        print_r($arrayPessoas);
        echo "</pre><br><br>";
        
        echo "<table border='1'>";
        for ($posicao=0; $posicao < count($arrayPessoas); $posicao++) { 
            if($arrayPessoas[$posicao]->idade < 20){
                echo "<tr>";
                    echo "<td> ".$arrayPessoas[$posicao]->name."</td>";
                    echo "<td> ".$arrayPessoas[$posicao]->sobrenome."</td>";
                echo "</tr>";
            } 
        }
        echo "</table>";
        //echo "<br>";
        //for ($posicao=count($arrayPessoas)-1; $posicao > -1; $posicao--) { 
        //    echo "Oie ".$arrayPessoas[$posicao]->name;
        //}
        if(isset($_POST['cidade']) && isset($_POST['estado'])){
            if($_POST['cidade'] == ""){
                echo "Sr Usuário, o campo cidade não foi preenchido.";
            }else if($_POST['estado'] == ""){
                echo "Sr Usuário, o campo estado não foi preenchido.";
            }else{
                echo "Dados Cadastrados com Sucesso";
            }
        }
        ?>
        
        <table border="1">              <!-- inicando a tabela -->
            <tr>                        <!-- iniciando a linha -->
                <td>Cidade:</td>        <!-- iniciando e fechando uma coluna -->
                <td>Estado:</td>        <!-- iniciando e fechando uma coluna -->
            </tr>                       <!-- fechando a linha -->
            <tr>                        <!-- iniciando a linha -->
                <td>Tarumã</td>         <!-- iniciando e fechando uma coluna -->
                <td>SP</td>             <!-- iniciando e fechando uma coluna -->
            </tr>                       <!-- fechando a linha -->

        </table>                        <!-- fechando a tabela -->
        </center>
        
    </body>
</html>

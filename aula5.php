<html>
    <head>
        <title>Tarumã SP</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="" method="POST">
            <center>
                <label>Nome: </label><br>
                <input type="text" name="nome" required><br>

                <label>Sobrenome: </label><br>
                <input type="text" name="sobrenome" required><br>

                <label>Idade: </label><br>
                <input type="number" name="idade" required><br>

                <label>Data: </label><br>
                <input type="date" name="data" required><br>

                <label>Peso: </label><br>
                <input type="number" name="peso" required><br>

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
        $pessoa->cidade = "Florínea";
        $pessoa->estado = "SP";

        $pessoa2 = new pessoa_obj();
        $pessoa2->name = "Edson";
        $pessoa2->sobrenome = "Marangoni";
        $pessoa2->idade = 22;
        $pessoa2->date = '09/06/2000';
        $pessoa2->peso = 97;
        $pessoa2->cidade = "Tarumã";
        $pessoa2->estado = "SP";
        
        $pessoa3 = new pessoa_obj();
        $pessoa3->name = "Kauan";
        $pessoa3->sobrenome = "Borsoi";
        $pessoa3->idade = 19;
        $pessoa3->date = '04/06/2003';
        $pessoa3->peso = 68;
        $pessoa3->cidade = "Tarumã";
        $pessoa3->estado = "SP";

        // print_r($pessoa);
        // echo "<Br><br>";
        // print_r($pessoa2);
        // echo "<br>";
        // print_r($pessoa3);
        // echo "<Br>";
        $arrayPessoas = array();
        
        function inserirPessoaNaLista($arrayPessoas, $item){
            $pessoa = new pessoa_obj();
            $pessoa->name = $item['nome'];
            $pessoa->sobrenome = $item['sobrenome'];
            $pessoa->idade = $item['idade'];
            $pessoa->date = $item['data'];
            $pessoa->peso = $item['peso'];
            $pessoa->cidade = $item['cidade'];
            $pessoa->estado = $item['estado'];

            array_push($arrayPessoas, $pessoa);
            return $arrayPessoas;
        }

        // echo "<br>O meu array de pessoas: <br>";
        // print_r($arrayPessoas);
        array_push($arrayPessoas, $pessoa);
        array_push($arrayPessoas, $pessoa2);
        array_push($arrayPessoas, $pessoa3);
        
        // echo "<br><br><pre>";
        // print_r($arrayPessoas);
        // echo "</pre><br><br>";
        
        
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
                $arrayPessoas = inserirPessoaNaLista($arrayPessoas, $_POST);
                echo "Dados Cadastrados com Sucesso";
            }
        }

        echo "<table border='1'>";
        for ($posicao=0; $posicao < count($arrayPessoas); $posicao++) { 
            if($arrayPessoas[$posicao]->idade < 50){
                echo "<tr>";
                    echo "<td> ".$arrayPessoas[$posicao]->name."</td>";
                    echo "<td> ".$arrayPessoas[$posicao]->sobrenome."</td>";
                echo "</tr>";
            } 
        }
        //teste .. github
        echo "</table>";
        ?>
        
        <!-- <table border="1">              inicando a tabela -->
            <!-- <tr>                        iniciando a linha -->
                <!-- <td>Cidade:</td>        iniciando e fechando uma coluna -->
                <!-- <td>Estado:</td>        iniciando e fechando uma coluna -->
            <!-- </tr>                       fechando a linha -->
            <!-- <tr>                        iniciando a linha -->
                <!-- <td>Tarumã</td>         iniciando e fechando uma coluna -->
                <!-- <td>SP</td>             iniciando e fechando uma coluna -->
            <!-- </tr>                       fechando a linha -->
        <!-- </table>                        fechando a tabela -->
        </center>
        
    </body>
</html>
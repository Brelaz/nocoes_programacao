<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    
    <!-- <script type='text/javascript' src='scripts/bootstrap.js'></script> -->
    <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
  </head>
  <body>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <a href="bootstrap.php" class="navbar-brand" style="color:white;">Página Principal</a>
            <a href="funcionarios.php" class="navbar-brand" style="color:white;">Funcionários</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <center>
        <a href="cadastrarFuncionario.php" type="button" class="btn btn-success">
            Cadastrar Novo Funcionário
        </a>
        <?php
        function conexao(){
            $nomeServidor = "localhost";
            $database = "database";
            $usuario = "root";
            $senha = "";
    
            //criar a conexão
            $conexao = mysqli_connect($nomeServidor, $usuario, $senha, $database);
            //checagem de conexão
            if(!$conexao){
              die("Conexão Falhou: ".mysqli_connect_error());
            }else{
              // echo "Conexão com Sucesso!";
            }
            return $conexao;
          }
    
          function selectFuncionarios(){
            $conexao = conexao();
            //executar o comando desejado
            $comando = "SELECT * FROM FUNCIONARIOS ORDER BY NOME";
            $resultado_comando = mysqli_query($conexao, $comando) or die('Erro no envio do comando: '.$comando.' '.mysqli_error($conexao));
            //exibir os dados da nossa tabela
            return $resultado_comando;
          }
          function deletar($id){
            $conexao = conexao();
            $comando = "DELETE FROM FUNCIONARIOS WHERE ID = $id";
            if(mysqli_query($conexao, $comando)){
              echo "Registro do funcionário apagado com Sucesso!"; 
            }else{
              echo "Deu erro, funcionário não foi apagado.";
            }

          }

          $funcionarios = selectFuncionarios();
        ?>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Salário</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(isset($_GET['id'])){
                    deletar($_GET['id']);
                    header("Location: funcionarios.php");
                }
                while($indice = mysqli_fetch_array($funcionarios)){
                    
                    echo "<tr>";
                    echo "<td>".$indice['id']."</td>";
                    echo "<td>".$indice['nome']."</td>";
                    echo "<td>".$indice['cargo']."</td>";
                    echo "<td>".$indice['salario']."</td>";
                    echo "<td>".$indice['descricao']."</td>";
                    echo "<td>";
                        echo "<form action='editarFuncionarios.php?id=$indice[id]' method='POST'>";
                            echo "<button class='btn btn-info'>Editar</button>";
                        echo "</form>";
                        echo "<form action='funcionarios.php?id=$indice[id]' method='POST'>";
                            echo "<button type='submit' class='btn btn-danger'>Remover</button>";
                        echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </center>
    </body>
</html>
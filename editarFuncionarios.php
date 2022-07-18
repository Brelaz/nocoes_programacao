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
          echo "Conexão com Sucesso!";
        }
        return $conexao;
      }
      function selectFuncionarios($id){
        $conexao = conexao();
        //executar o comando desejado
        $comando = "SELECT * FROM FUNCIONARIOS WHERE ID = $id";
        $resultado_comando = mysqli_query($conexao, $comando) or die('Erro no envio do comando: '.$comando.' '.mysqli_error($conexao));
        //exibir os dados da nossa tabela
        return $resultado_comando;
      }
      function atualizarFuncionario($id, $nome, $cargo, $salario,$descricao){
        $conexao = conexao();
        $comando = "UPDATE FUNCIONARIOS SET NOME = '$nome', cargo ='$cargo', salario = $salario, descricao = '$descricao'WHERE ID = $id";
        $resultado_comando = mysqli_query($conexao, $comando) or die('Erro no envio do comando: '.$comando.' '.mysqli_error($conexao));
        //exibir os dados da nossa tabela
        return $resultado_comando;
      }
        if(isset($_POST['nome']) && isset($_POST['cargo'])){
          atualizarFuncionario($_GET['id'], $_POST['nome'],$_POST['cargo'], $_POST['salario'], $_POST['descricao']);
          header("Location: funcionarios.php");
      }

      $funcionario = selectFuncionarios($_GET['id']);
      print_r($funcionario);
    ?>
    <form class="form-control" action="" method="POST">
        <?php while($indice = mysqli_fetch_array($funcionario)){ ?>
        <label>Nome</label>
        <input class="form-control" type="text" name="nome" required value="<?php echo $indice['nome']; ?>"><br>

        <label>Cargo</label>
        <input class="form-control" type="text" name="cargo" required value="<?php echo $indice['cargo']; ?>"><br>

        <label>Salário</label>
        <input class="form-control" type="number" name="salario" required value="<?php echo $indice['salario']; ?>"><br>

        <label>Descrição</label>
        <input class="form-control" type="text" name="descricao" required value="<?php echo $indice['descricao']; ?>"><br>
        
        <?php } ?>
        <button type="submit" class="form-control btn btn-success">
          Salvar
        </button>
    </form>
  </body>
</html>
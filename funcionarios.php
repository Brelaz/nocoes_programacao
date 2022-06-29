<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
      
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <a href="bootstrap.php"class="navbar-brand"style="color:white;">Página Principal</a>
            <a href="funcionarios.php"class= "navbar-brand" style="color:white;">Funcionários</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <center>
        <a href="cadastrarFuncionario.php" type="button" class="btn btn-success">Cadastrar Novo Funcionário</a>
            
        <table class="table table-dark table-hover">
        <thead>
             <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Cargo</th>
                <th scope="col">Salario</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
         <tbody>
            <tr>
                <td>...</td> 
                <td>...</td> 
                <td>...</td> 
                <td>...</td> 
                <td>...</td> 
                <td>...</td> 
                 
            </tr>
        </table>
    </center>
    </body>
</html>
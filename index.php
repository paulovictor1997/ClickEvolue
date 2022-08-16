<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="?page=novo">Novo Usuário</a>
        <a class="nav-link" href="?page=listar">Listar Usuários</a>
      </div>
    </div>
  </div>
</nav>
    
    <main class="container">
        <div class="row">
            <div class="col mt-5">
            <?php
            include("config.php");
            switch(@$_REQUEST["page"]){
                case "novo":
                    include("usuario.php");
                break;

                case "listar":
                    include("listar.php");
                break;

                case "salvar":
                    include("salvar.php");
                break;

                case "editar":
                    include("editar.php");
                break;

                default:
                print "<h1>Sejam bem vindos!</h1>";
                print "<p>Se você é novo por aqui, cadastre-se.</p>";
            } 
             ?>
            </div>
        </div>
    </main>

  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>
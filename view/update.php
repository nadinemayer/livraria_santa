<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<?php
    require('../controller/getSession.php');
    include('../model/livro.php');
    $dado = selectWhere();

    if(isset($_POST['update'])){
        echo update();
    }
    
?>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="read.php">Livraria Santa</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="read.php">Home</a>
                <a class="nav-link" href="create.php">Create</a>
                <a class="nav-link" href="../controller/endSession.php">Exit</a>
            </div>
            </div>
            </div>
        </nav>

    <form method="post" class="row g-3">

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name='nome' value = "<?php echo $dado[0]['nome']; ?>">
        </div>

        <div class="mb-3">
            <label for="paginas" class="form-label">Paginas</label>
            <input type="text" class="form-control" id="paginas" name='paginas' value = "<?php echo $dado[0]['paginas'] ?>">
        </div>

        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" id="autor" name='autor' value = "<?php echo $dado[0]['autor'] ?>">
        </div>

        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="text" class="form-control" id="quantidade" name='quantidade' value = "<?php echo $dado[0]['quantidade'] ?>">
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preco</label>
            <input type="text" class="form-control" id="preco" name='preco' value = "<?php echo $dado[0]['preco']; ?>" >
        </div>

  <button type="submit" class="btn btn-primary" name='update'>Criar</button>
</form>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ</title>
    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<?php
    require('../controller/getSession.php');
    require('../model/livro.php');
    $data = read();

    if(!empty($_GET["id"])){
        echo delete();
    }
?>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Livraria Santa</a>
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

    <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Nome</th>
        <th scope="col">Paginas</th>
        <th scope="col">Autor</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Preco</th>
        <td scope="col">Apagar/Editar</td>

        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $row){ ?>
        <tr>
        <th scope="row"><?php echo $row['id']; ?></th>
        <th><?php echo $row['nome']; ?></th>
        <th><?php echo $row['paginas']; ?></th>
        <th><?php echo $row['autor']; ?></th>
        <th><?php echo $row['quantidade']; ?></th>
        <th><?php echo $row['preco']; ?></th>
        <th>
            <a href="read.php?id=<?php echo $row['id']; ?>">&#128465;</a>
            <a href="update.php?id=<?php echo $row['id']; ?>">&#9999;&#65039;</a>
        </th>
        </tr>
        <?php } ?>
    </tbody>
    </table>
    </body>
</html>
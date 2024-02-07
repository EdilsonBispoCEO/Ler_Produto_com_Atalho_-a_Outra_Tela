<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Um titulo escrito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="page-header">

        </div>
        <form action="<?php echo htmlspecialchears($_SERVER["PHP_SELF"]);?>" method="post">
        <table class="table table-hover- table-responsive table-bordered">
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome" class="form-control"/></td>
            </tr>
            <tr>
                <td>Descrição</td>
                <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Preço<object data=""type=""></object></td>
                <td><input type="text" name="preço" class="form-control"/></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Salvar" class="btn btn-primary"/>
                    <a href="index.php" class="btn btn-danger">Voltar para ler produtos</a>
                </td>
            </tr>
        </table>
    </form>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/boostrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>
</html>
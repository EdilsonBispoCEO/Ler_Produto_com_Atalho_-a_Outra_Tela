<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - Ler um Registro - Tutorial PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
     
        <div class="container">
    <?php
    
    try{
        
    } catch (PDOException $exception){
        die("Erro: O parametro 'id' não foi encontrado na URL".$exception->getMessage());
    }

    if (isset($_GET['id'])) {
        
        $id = $_GET['id'];
        
        echo "ID do resgistro: $id";
    } else{
        die("Erro: O parametro 'id' não foi encontrado na URL" );
    }
    
    include 'config/bancodedados.php';
      
    ?>

        <div class="pageheader">
            <h1> Meus produtos</h1>
        </div>
    </div>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/boostrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>
</html>
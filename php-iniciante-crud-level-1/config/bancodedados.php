
    <?php
    $host = 'localhost';
    $nome_bd = "php_iniciante_crud_level_1";
    $nomedeusuario = "root";
    $senha = "";
    try{
        $con = new PDO("mysql:host =($host);dbname={$nome_bd}",$nomedeusuario,$senha);
    }

catch(PDOException $exception){
    echo "Connection error;". $exception ->getMessage();

}
    ?>

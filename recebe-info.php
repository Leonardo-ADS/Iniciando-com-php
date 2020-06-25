<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebendo informações</title>
</head>
<body>
    
    <?php
    /**
     * protocolo HTTP - GET e SET
     * Toda requisição no browser é uma requisição http com get
     * Todo Preenchimento de formulário é uma requisição set
     * ?chave=valor
     * $_POST - omite as informações no endereço url
     * $_GET -  não omiti as informações do endereço
     */
     
     // $_GET variavel global 
     var_dump($_GET);
     var_dump($_POST);
    
    
    ?>

<h1><?php //echo $_GET['nome']?></h1>
<h1><?php echo $_POST['nome']?></h1>
</body>
</html>
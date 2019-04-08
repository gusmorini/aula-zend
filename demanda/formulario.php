<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de atendimento a demanda</title>
    <link rel="stylesheet" type="text/css" href="main.css">

</head>
<body>

    <h1>Sistema de atendimento a demanda</h1>

    <?php

        if ($_GET['error']) {

            $html = "<h3 class='error'>";
            $html.=  $_GET['error'];
            $html.= "</h3>";

            echo $html;
        }

        if ($_GET['msg']) {

            $html = "<h3 class='msg'>";
            $html.=  $_GET['msg'];
            $html.= "</h3>";

            echo $html;
        }

    ?>


    <form action="processar.php" method="POST">
    
        <label>Nome do solicitante</label>
        <input type="text" name="nome" required value="<?=($_GET['nome']) ? $_GET['nome'] : '';?>"/>
        <label>CPF</label>
        <input type="text" name="cpf" required value="<?=($_GET['cpf']) ? $_GET['cpf'] : '';?>">
        <label>CEP</label>
        <input type="text" name="cep" value="<?=($_GET['cep']) ? $_GET['cep'] : '';?>">
        <label>Município</label>
        <input type="text" name="municipio" value="<?=($_GET['municipio']) ? $_GET['municipio'] : '';?>">
        <label>UF</label>
        <input type="text" name="uf" value="<?=($_GET['uf']) ? $_GET['uf'] : '';?>">
        <label>E-mail</label>
        <input type="email" name="email" required value="<?=($_GET['email']) ? $_GET['email'] : '';?>">
        <label>DDD</label>
        <input type="text" name="ddd" value="<?=($_GET['ddd']) ? $_GET['ddd'] : '';?>">
        <label>Telefone</label>
        <input type="text" name="telefone" value="<?=($_GET['telefone']) ? $_GET['telefone'] : '';?>">
        <label>Assunto</label>
        <input type="text" name="assunto" required value="<?=($_GET['assunto']) ? $_GET['assunto'] : '';?>">
        <label>Detalhes</label>
        <textarea name="detalhes" id="" cols="30" rows="7"><?=($_GET['detalhes']) ? $_GET['detalhes'] : '';?></textarea>

        <button type="submit">gravar</button>
    
    </form>
    
</body>
</html>
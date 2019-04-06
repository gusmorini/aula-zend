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

    <form action="processar.php" method="POST">
    
        <input type="text" name="cpf" placeholder="CPF">
        <input type="text" name="nome" placeholder="nome do solicitante">
        <input type="text" name="cep" placeholder="CEP">
        <input type="text" name="municipio" placeholder="Município">
        <input type="text" name="uf" placeholder="UF">
        <input type="email" name="email" placeholder="E-mail">
        <input type="text" name="ddd" placeholder="DDD">
        <input type="text" name="telefone" placeholder="telefone">
        <input type="text" name="assunto" placeholder="assunto">
        <textarea name="detalhes" id="" cols="30" rows="10" placeholder="detalhes"></textarea>

        <button type="submit">gravar</button>
    
    </form>
    
</body>
</html>
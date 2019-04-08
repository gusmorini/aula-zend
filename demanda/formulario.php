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
    
        <label>Nome do solicitante</label>
        <input type="text" name="nome">
        <label>CPF</label>
        <input type="text" name="cpf">
        <label>CEP</label>
        <input type="text" name="cep">
        <label>Município</label>
        <input type="text" name="municipio">
        <label>UF</label>
        <input type="text" name="uf">
        <label>E-mail</label>
        <input type="email" name="email">
        <label>DDD</label>
        <input type="text" name="ddd">
        <label>Telefone</label>
        <input type="text" name="telefone">
        <label>Assunto</label>
        <input type="text" name="assunto">
        <label>Detalhes</label>
        <textarea name="detalhes" id="" cols="30" rows="7"></textarea>

        <button type="submit">gravar</button>
    
    </form>
    
</body>
</html>
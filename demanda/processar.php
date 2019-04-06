<?php

use Zend\ServiceManager\ServiceManager;
use Zend\Db\Sql\Insert;

require "vendor/autoload.php";

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$cep = $_POST['cep'];
$municipio = $_POST['municipio'];
$uf = $_POST['uf'];
$email = $_POST['email'];
$ddd = $_POST['ddd'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$detalhes = $_POST['detalhes'];

//$driver = new Mysqli($connection);
//$adapter = new Adapter($driver);
//$config = new Config(require 'config.php');

$serviceManager = new ServiceManager();
$serviceManager->setService('config', require 'config.php');
$serviceManager->setFactory('DbAdapter', 'Zend\Db\Adapter\AdapterServiceFactory');

$adapter = $serviceManager->get('DbAdapter');

//echo get_class($adapter);
// $sql = "INSERT INTO solicitante() VALUES()";
// $adapter->query($sql);

function banco ($tabela, $coluna, $valor, $adapter) {
    $insert = new Insert($tabela);
    $insert->columns($coluna)->values($valor);
    $sql = $insert->getSqlString($adapter->getPlatform());
    $statement = $adapter->query($sql);
    $insertedRows = $statement->execute();
}


$tabela = 'solicitante';
$coluna = ['cpf','nome','CEP','municipio','UF','email','ddd','telefone'];
$valor = [$cpf,$nome,$cep,$municipio,$uf,$email,$ddd,$telefone];

banco($tabela, $coluna, $valor, $adapter);

$tabela = 'assunto';
$coluna = ['assunto','detalhes'];
$valor = [$assunto, $detalhes];

banco($tabela, $coluna, $valor, $adapter);
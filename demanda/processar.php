<?php

use Zend\ServiceManager\ServiceManager;
use Zend\Db\Sql\Insert;
use Zend\Db\Sql\Select;
use Zend\Db\Sql\Expression;

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

function bancoInsert ($tabela, $coluna, $valor, $adapter) {
    $insert = new Insert($tabela);
    $insert->columns($coluna)->values($valor);
    $sql = $insert->getSqlString($adapter->getPlatform());
    $statement = $adapter->query($sql);
    $insertedRows = $statement->execute();
}

$select = new Select('solicitante');
$select->columns(['cpf'])->where(['cpf'=>$cpf]);
$sql = $select->getSqlString($adapter->getPlatform());
$statement = $adapter->query($sql);
$result = $statement->execute();

if (count($result) > 0) {

    // cpf já existe

    $error = "CPF já cadastrado";

    $url = "/aula-zend/demanda/formulario.php";
    $url.= "?error=CPF já cadastrado";
    $url.= "&nome=$nome";
    $url.= "&cpf=$cpf";
    $url.= "&cep=$cep";
    $url.= "&municipio=$municipio";
    $url.= "&uf=$uf";
    $url.= "&email=$email";
    $url.= "&ddd=$ddd";
    $url.= "&telefone=$telefone";
    $url.= "&assunto=$assunto";
    $url.= "&detalhes=$detalhes";

    header("Location:$url");

} else {

    $tabela = 'solicitante';
    $coluna = ['cpf','nome','CEP','municipio','UF','email','ddd','telefone'];
    $valor = [$cpf,$nome,$cep,$municipio,$uf,$email,$ddd,$telefone];
    bancoInsert($tabela, $coluna, $valor, $adapter);

    $tabela = 'assunto';
    $coluna = ['assunto','detalhes'];
    $valor = [$assunto, $detalhes];
    bancoInsert($tabela, $coluna, $valor, $adapter);

    $expression = new Expression('max(codigo)');
    $select = new Select('assunto');
    $select->columns(['codigoAssunto' => $expression]);
    $sql = $select->getSqlString($adapter->getPlatform());
    $statement = $adapter->query($sql);
    $result = $statement->execute();
    $codigo_assunto = $result->current()['codigoAssunto'];

    //fecha a conexão 
    $adapter->getDriver()->getConnection()->disconnect();

    $tabela = 'demanda';
    $coluna = ['codigo_solicitante','codigo_assunto'];
    $valor = [$cpf, $codigo_assunto];
    bancoInsert($tabela, $coluna, $valor, $adapter);

    echo "Cadastro Realizado";

}

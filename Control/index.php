<?php

require '../dependencias/autoload.php';

use Ecert\Control\BackRouter;

//------------------------------Não faz parte da implementação-------------------
echo "<h1>Iniciando Roteador BackEnd</h1><br/>";
echo "Recebendo requisições por GET usando parametro '?req='<br/>";
echo "<br/>Exemplos de requisição: <br/> <a href='?req=modulo1'>?req=modulo1</a><br/><a href='?req=modulo1_create'>?req=modulo1_create</a><br/>";
//---------------------------------------------------

//obtendo rota por parametro GET
$rota = isset($_GET['req']) ? $_GET['req'] : 'INVALIDO';
//enviando parametro para roteamento no backEnd
$r = new BackRouter();
echo "<hr/>";
echo "<br/><b>Requisição Atual:</b><br/>";
$r->rota($rota);
<?php
//definindo espaço de trabalho da aplicação
namespace Ecert;

//iniciando o autoload de classes do Front End
require './dependencias/autoload.php';

use Ecert\View\FrontRouter;

//------------------------------Não faz parte da implementação-------------------
echo "<h1>Iniciando Roteador Front End</h1><br/>";
echo "Recebendo requisições por GET usando parametro '?req='<br/>";
echo "<br/>Exemplos de requisição: <br/> <a href='?req=credenciais'>?req=credenciais</a><br/><a href='?req=credenciais_login'>?req=credenciais_login</a><br/>";
//-------------------------------------------------------------------------------

//obtendo rota por parametro GET
$rota = isset($_GET['req']) ? $_GET['req'] : 'cadastro';
//enviando parametro para roteamento no backEnd
$r = new FrontRouter();
echo "<hr/>";
echo "<br/><b>Requisição Atual:</b><br/>";
$r->rota($rota);

echo '<hr/>';
echo "<a href='./Control'>Ver Roteador BackEnd</a>";
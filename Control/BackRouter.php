<?php
namespace Ecert\Control;

use Ecert\Control\Modulo1\Modulo1Router as Modulo1;
use Ecert\Control\Modulo2\Modulo2Router as Modulo2;

class BackRouter{
    public function rota($path)
    {
        $pathRelativo = explode('_',$path);
        $path = isset($pathRelativo[1])? $pathRelativo[1] : $path;
        switch ($pathRelativo[0]) {
            case 'modulo1':
                echo "Back Modulo 1<br/>";
                $m = new Modulo1();
                $m->rota($path);
                break;
            case 'modulo2':
                echo "Back Modulo 2<br/>";
                $m = new Modulo2();
                $m->rota($path);
                break;
            case 'modulo3':
                echo "Back Modulo 3<br/>";
                echo "Ainda nao implementado<br/>";
                break;
            default:
                echo "Back Modulo Padrao<br/>";
                break;
        }
    }
}
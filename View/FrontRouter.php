<?php

namespace Ecert\View;

use Ecert\View\Credenciais\CredenciaisRouter;

class FrontRouter{
    public function rota($path)
    {
        $pathRelativo = explode('_',$path);
        $path = isset($pathRelativo[1])? $pathRelativo[1] : $path;
        switch ($pathRelativo[0]) {
            case 'credenciais':
                $fr = new CredenciaisRouter();
                $fr->rota($path);
                break;
            case 'modulo2':
                echo "Front Modulo 2 ";
                break;
            case 'modulo3':
                echo "Front Modulo 3 ";
                break;
            
            default:
            echo "Front Modulo Padrão ";
                break;
        }
    }
}
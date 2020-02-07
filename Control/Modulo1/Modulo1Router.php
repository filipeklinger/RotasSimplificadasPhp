<?php

namespace Ecert\Control\Modulo1;

class Modulo1Router{

    public function rota($path)
    {
        switch ($path) {
            case 'create':
                echo "Create Md 1<br/>";
                break;
            case 'read':
                echo "Read Md 1<br/>";
                break;
            case 'updade':
                echo "Update Md 1<br/>";
                break;
            case 'delete':
                echo "detele Md 1<br/>";
                break;
            
            default:
                echo "Ação Padrão modulo 1<br/>";
                break;
        }
    }
}
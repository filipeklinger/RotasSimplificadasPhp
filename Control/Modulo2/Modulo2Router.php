<?php

namespace Ecert\Control\Modulo2;

class Modulo2Router{
    
    public function rota($path)
    {
        switch ($path) {
            case 'create':
                echo "Create Md 2";
                break;
            case 'read':
                echo "Read Md 2";
                break;
            case 'updade':
                echo "Update Md 2";
                break;
            case 'delete':
                echo "detele Md 2";
                break;
            
            default:
                echo "Padrao modulo 2";
                break;
        }
    }
}
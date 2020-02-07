<?php

namespace Ecert\View\Credenciais;

class CredenciaisRouter{
    
    public function rota($path)
    {
        switch ($path) {
            case 'login':
                include 'login.html';
                break;
            case 'cadastro':
                include 'cadastro.html';
                break;
            default:
            echo "View Credenciais Padrão";
                break;
        }
    }
}
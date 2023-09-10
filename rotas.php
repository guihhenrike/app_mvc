<?php

use App\Controller\PessoaController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        echo "página inicial";
        ?>
            <a href="/pessoa"><button>Ir para página de pessoas</button></a> 
        <?php
    break;

    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;

    case '/pessoa/form/save':
        PessoaController::save();
    break;

    default:
        echo "Erro 404 Not Found";
    break;
}
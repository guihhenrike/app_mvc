<?php

// Caminhos de diretorio

define('BASEDIR', dirname(__FILE__) . '/../');
define('VIEWS', dirname(__FILE__) . '/View/modules/');



// Dados de conexão ao Banco de Dados

$_ENV['db']['host'] = 'localhost';
$_ENV['db']['user'] = 'root';
$_ENV['db']['pass'] = 'root';
$_ENV['db']['database'] = 'db_mvc';
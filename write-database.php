<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require('vendor/autoload.php');
use Silex\Application;

$app = new Application();
$app['debug'] = true;

$dbopts = parse_url(getenv('DATABASE_URL'));
$app->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
               array(
                'pdo.server' => array(
                   'driver'   => 'pgsql',
                   'user' => $dbopts["user"],
                   'password' => $dbopts["pass"],
                   'host' => $dbopts["host"],
                   'port' => $dbopts["port"],
                   'dbname' => ltrim($dbopts["path"],'/')
                   )
               )
);
  $num = rand();
  $st = $app['pdo']->prepare("INSERT INTO gps VALUES(NULL, 'TESTE " . $num . "');");
  $st->execute();


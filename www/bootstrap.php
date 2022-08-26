<?php

declare(strict_types=1);

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require_once __DIR__ . '/vendor/autoload.php';


//подключение к БД через PDO
$dsn = 'mysql:host=mysql;dbname=db;charset=UTF8';
$user = 'user';
$password = 'password';

$paths = [
    realpath(__DIR__ . '/src')
];
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driverClass' => \Doctrine\DBAL\Driver\PDO\MySQL\Driver::class,
    'host'        => 'mysql',
    'user'     => 'user',
    'password' => 'password',
    'dbname'   => 'db',
);

$cache = new \Symfony\Component\Cache\Adapter\FilesystemAdapter();
$wrapper = new \Symfony\Component\Cache\DoctrineProvider($cache);

$config = Setup::createAnnotationMetadataConfiguration(
    $paths,
    $isDevMode,
    null,
    $wrapper,
    false
);

$entityManager = EntityManager::create($dbParams, $config);


$logger = new Logger('stdout');
$logger->pushHandler(new StreamHandler('php://stdout', Logger::DEBUG));

$logger->debug('bootstrap finished');

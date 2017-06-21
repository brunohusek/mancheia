<?php

namespace Mancheia\Core\ServiceProviders;

use Silex\Provider\DoctrineServiceProvider;

class DatabaseServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app->register(new DoctrineServiceProvider(), [
            'db.options' => [
                'driver' => 'pdo_mysql',
                'host' => '127.0.0.1',
                'dbname' => 'mancheia',
                'user' => 'root',
                'password' => 'my$QL#3214',
                'charset' => 'utf8'
            ]
        ]);
    }
}

<?php
use Illuminate\Database\Capsule\Manager as Capsule;
require_once __DIR__ . '/vendor/autoload.php';

$pdo = Capsule::connection()->getPdo();
$name = Capsule::connection()->getDatabaseName();

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/database/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/database/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'migrations',
        'default_environment' => 'development',
        'development' => [
            'name' => $name,
            'connection' => $pdo,
        ]
    ],
    'version_order' => 'creation'
];

<?php

namespace App\Models;
use Illuminate\Database\Capsule\Manager as Capsule;

class Database {

    function __construct() {
        $db = parse_ini_file('../config/database.ini', true);

        $capsule = new Capsule;
        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => $db['DB_HOST'],
            'port' => $db['DB_PORT'],
            'database' => $db['DB_NAME'],
            'username' => $db['DB_USER'],
            'password' => $db['DB_PASS'],
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);

        $capsule->bootEloquent();
    }
}
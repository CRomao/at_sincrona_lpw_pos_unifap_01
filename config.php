<?php

require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$config = [
    "driver" => "mysql",
    "host" => "127.0.0.1",
    "database" => "posts",
    "username" => "root",
    "password" => ""
];

$capsule->addConnection($config);
$capsule->setAsGlobal();
$capsule->bootEloquent();
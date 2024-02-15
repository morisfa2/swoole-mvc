<?php
require_once __DIR__ . '/vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Swoole\Http\Request;
use Swoole\Http\Response;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => env('DB_CONNECTION'),
    'host'      => env('DB_HOST'),
    'port'      => env('DB_PORT'),
    'database'  => env('DB_DATABASE'),
    'username'  => env('DB_USERNAME'),
    'password'  => env('DB_PASSWORD'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();


$http = new Swoole\Http\Server("0.0.0.0", 9501);


$http->on("start", function ($server) {
    echo "Swoole HTTP server is started at http://127.0.0.1:9501\n";
});



$http->on('request', function (Request $request, Response $response) {    $response->header("Content-Type", "text/plain");
    $route = $request->server['request_uri'];

    switch ($route) {
        case '/':
            $controller = new App\Controllers\LoanController;
            $controller->index($request, $response);
            break;
        default:
            $response->status(404);
            $response->end("Not Found");
    }

});

$http->start();

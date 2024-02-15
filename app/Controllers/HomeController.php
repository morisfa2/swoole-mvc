<?php

namespace App\Controllers;

use Illuminate\Database\Capsule\Manager as DB;
use Swoole\Http\Request;
use Swoole\Http\Response;

class HomeController
{
    public function index(Request $request, Response $response)
    {

        $response->end("index");


//        $users = DB::table('users')->get();
//        $response->header("Content-Type", "application/json");
//        $response->end(json_encode($users));
    }
}

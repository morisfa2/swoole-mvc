<?php

namespace App\Controllers;

use Illuminate\Database\Capsule\Manager as DB;
use Swoole\Http\Request;
use Swoole\Http\Response;
use App\Models\LoanProvider;

class LoanController
{
    public function index(Request $request, Response $response)
    {
        $users = LoanProvider::all();
        $response->header("Content-Type", "application/json");
        $response->end(json_encode($users));
    }
}

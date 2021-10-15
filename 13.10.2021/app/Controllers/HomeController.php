<?php

namespace App\Controllers;

use App\Core\RouterList;

class HomeController
{
    public function index()
    {
        $methods = RouterList::all();

        return renderView('home', [
            'methods' => $methods
        ]);
    }
}

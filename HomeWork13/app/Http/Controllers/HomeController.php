<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function index()
    {

        // $routeCollection = Route::getRoutes();
        $routeCollection = [];

        // var_dump($routeCollection);

        // $routes = array();
        // $count = 0;

        // foreach ($routeCollection->actionList as $key => $value) {
        //     if (str_contains($key, 'App\\Http\\Controllers\\')) {
        //         $count++;
        //     }
        // }
        // echo $count;

        return view('home.index', ['routes' => $routeCollection]);
    }
}

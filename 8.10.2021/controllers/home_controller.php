<?php
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

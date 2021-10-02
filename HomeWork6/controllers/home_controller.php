<?php

class HomeController
{
    public function index($data = [])
    {
        renderView('home');
    }
}

<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use League\Flysystem\Adapter\Local;
use App\Services\Locale;

class LocaleController extends Controller
{
    public function setLocale($code)
    {
        Locale::setLocale($code);

        return redirect()->back();
    }
}

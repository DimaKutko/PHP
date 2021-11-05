<?php

namespace LocaleEdu;

use App\Http\Controllers\Controller;

class LocaleController extends Controller
{
    public function setLocale($code)
    {
        LocaleService::setLocale($code);

        return redirect()->back();
    }
}

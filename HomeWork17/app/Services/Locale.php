<?php

namespace App\Services;

use Illuminate\Support\Facades\Session;

class Locale
{
    const EN = 'en';
    const RU = 'ru';
    const SESSION_KEY = 'locale';

    public static function availableLocales()
    {
        return collect(
            [
                (object)[
                    'code' => self::EN,
                    'name' => 'English',
                ],
                (object) [
                    'code' => self::RU,
                    'name' => 'Русский',
                ]
            ]
        );
    }

    public static function setLocale($code)
    {
        $availableLocales = self::availableLocales();

        if ($availableLocales->where('code', $code)->isEmpty()) {
            throw new \Exception("Code is not exists: {$code}");
        }

        Session::put(self::SESSION_KEY, $code);
    }

    public static function getLocale()
    {
        return Session::get(self::SESSION_KEY, self::detectDefault());
    }

    public static function detectDefault()
    {
        $serverCodeLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

        if (self::availableLocales()->where('code', $serverCodeLang)->isEmpty()) {
            return self::RU;
        } else {
            return $serverCodeLang;
        }
    }
}

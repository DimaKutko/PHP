<?php

namespace LocaleEdu;

use Illuminate\Support\Facades\Session;

class LocaleService
{
    const EN = 'en';
    const RU = 'ru';
    const SESSION_KEY = 'locale';

    public static function availableLocales()
    {
        $availableLocales = config('locale.available_locales');
        if (empty($availableLocales)) {
            throw new LocaleException('Available locales is empty');
        }
        $output = collect();
        foreach ($availableLocales as $code => $name) {
            $output->push((object)[
                'code' => $code,
                'name' => $name
            ]);
        }
        return $output;
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

        return config('locale.default');

        if (self::availableLocales()->where('code', $serverCodeLang)->isEmpty()) {
            if (empty(config('locale.default'))) {
                throw new LocaleException('locale.default is empty');
            }

            return config('locale.default');
        } else {
            return $serverCodeLang;
        }
    }
}

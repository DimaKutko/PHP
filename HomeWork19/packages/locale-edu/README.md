LocaleEdu
=======

LocaleEdu - is an extension for dynamic localization of sites on laravel.

## Installation

To install LocaleEd: 

1) Download the project and place it in the folder `package/locale-edu`

2) Update your autoload config in `composer.json`
``` json
 "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Database\\Factories\\": "database/factories/",
            "Database\\Seeders\\": "database/seeders/",
            "LocaleEdu\\": "packages/locale-edu/src"
        }
    },
```

3) Execute a few console commands
``` sh
$ php composer.phar dump-autoload
$ php artisan vendor:publish --provider="LocaleEdu\\LocaleServiceProvider"
```

4) Update your middleware and transfer the starter session to the main middleware
``` php 
 protected $middlewareGroups = [
        'web' => [
            //Other classes
            LocaleEdu\LocaleMiddleware::class, //Add this line
        ],
```
``` php 
protected $middleware = [
        \Illuminate\Session\Middleware\StartSession::class,
        //Other classes
    ]
```

## Documentation

 - LocaleEdu works with the default translations located at `resources/lang/...`

- Useg `locale::dropdown` for show language picker on your views
```html 
Example:
<li>
    @include('locale::dropdown')
</li>
```

- To add a language, add it to the config along the path `config/locale.php` in `available_locales` and implement it in `resources/lang/your_lang`
  ```php
  'available_locales' => [
        'ru' => 'Русский',
        'en' => 'English',
        'your_lang' => 'your_description',
    ],
  ```

- The extension supports setting the browser language if the language is implemented otherwise the default language is selected. The default language can be changed along the path `config/locale.php`
 ```php
    'dafault' => 'your_default_lang',
  ```
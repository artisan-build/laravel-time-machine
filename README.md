# Laravel Time Machine

This package replaces the `now()` helper in Laravel so that you can use an environment variable to set the app's current date and / or time. This is probably a horrible idea in production, but I'm not here to tell you how to live your life.

### Installation
```
composer require artisan-build/laravel-time-machine
```

In the composer.json file of your project, add this to the extra section:

```json
"include_files": [
  "vendor/artisan-build/laravel-time-machine/scripts/time-machine.php"
]
```

Then run `composer dump-autoload`. This will cause our version of `now()` to be loaded before Laravel's helper which means that laravel won't load its own. 

### Usage

In your .env file, set a value of NOW like so:

```dotenv
NOW="October 1, 2021"
```

Any value that can be correctly parsed by `Carbon::parse()` will do nicely.

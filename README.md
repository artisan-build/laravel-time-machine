# Laravel Time Machine

This package replaces the `now()` helper in Laravel so that you can use an environment variable to set the app's current date and / or time. This is probably a horrible idea in production, but I'm not here to tell you how to live your life.

### Installation
```
composer require artisan-build/laravel-time-machine
```

This will probably require some sort of composer.json manipulation in the app, but I'm not sure yet.

### Usage

In your .env file, set a value of NOW like so:

```dotenv
NOW="October 1, 2021"
```

Any value that can be correctly parsed by `Carbon::parse()` will do nicely.

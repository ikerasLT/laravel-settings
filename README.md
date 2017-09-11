# Laravel Settings

Provides accessibility to key - value based settings model

## Instalation

Require this package with composer

`composer require ikeraslt/laravel-settings`

Add the ServiceProvider to the providers array in config/app.php

`Ikeraslt\LaravelSettings\ServiceProvider::class,`

If you want to use the facade, add this to your facades in config/app.php:

`'Settings' => Ikeraslt\LaravelSettings\Facade::class,`

Run the migrations. This will add the settings table to your database

`php artisan migrate`

## Usage

### Via helper

Get setting:

`$value = settings('key');`

Set value:

`settings('key', 'value');`

### Via facade

Get setting:

`$value = Settings::get('key');`

Set value:

`Settings::set('key', 'value');`
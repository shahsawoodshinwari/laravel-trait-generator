
# Laravel Trait Generator

This Laravel package provides a simple artisan command to quickly generate traits in your application. It is designed to be a developer-friendly tool that fits right into the workflow of a Laravel full-stack web developer.

## Installation

You can install the package via composer:

```bash
composer require shaka/laravel-trait-generator
```

If you are not using Laravel's package auto-discovery, add the service provider to the `providers` array in `config/app.php`:

```php
'providers' => [
    // ...
    Shaka\LaravelTraitGenerator\LaravelTraitGeneratorServiceProvider::class,
],
```

## Usage

To generate a new trait, use the artisan command:

```bash
php artisan make:trait YourTraitName
```

This will create a new trait in the `app/Traits` directory.

## Customization

You can publish the stub used by the package to customize the generated traits:

```bash
php artisan vendor:publish --provider="Shaka\LaravelTraitGenerator\LaravelTraitGeneratorServiceProvider" --tag="stubs"
```

This will publish the stub to `stubs/vendor/laravel-trait-generator/trait.stub`, where you can customize it as needed.

## Credits

- [Shah Sawood](https://github.com/your-profile) (Package Author)
- [ChatGPT Pro](https://openai.com/chatgpt-pro) (Package Creator)

## License

The Laravel Trait Generator is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

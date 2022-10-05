# MEOW POINTS
### laravel package for points system
[![Latest Version on Packagist](https://img.shields.io/packagist/v/ahmedtofaha/laravel-insights.svg?style=flat-square)](https://packagist.org/packages/ahmedtofaha/laravel-insights)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ahmedtofaha/laravel-insights/run-tests?label=tests)](https://github.com/ahmedtofaha/laravel-insights/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ahmedtofaha/laravel-insights/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/ahmedtofaha/laravel-insights/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ahmedtofaha/laravel-insights.svg?style=flat-square)](https://packagist.org/packages/ahmedtofaha/laravel-insights)
## Installation

You can install the package via composer:

```bash
composer require ahmedtofaha/laravel-insights
```

You can publish all we need and run the migrations with:

```bash
php artisan vendor:publish --provider="AhmedTofaha\LaravelInsights\LaravelInsightsServiceProvider"
php artisan migrate
```

This is the contents of the published config file:

```php
# laravel-insights.php
return [
    /*
    determine how much points equal to money amount
    @type float
    */
    'amount' => 10.0,
];
```


## Usage
### Intro
```php

````

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [ahmedtofaha](https://github.com/ahmedtofaha10)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

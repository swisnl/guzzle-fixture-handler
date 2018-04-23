# Fixture handler for Guzzle 6

[![PHP from Packagist](https://img.shields.io/packagist/php-v/swisnl/guzzle-fixture-handler.svg)](https://packagist.org/packages/swisnl/guzzle-fixture-handler)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/swisnl/guzzle-fixture-handler.svg)](https://packagist.org/packages/swisnl/guzzle-fixture-handler)
[![Software License](https://img.shields.io/packagist/l/swisnl/guzzle-fixture-handler.svg)](LICENSE) 
[![Run Status](https://api.shippable.com/projects/5a7da052260fde0600abfc2a/badge?branch=master)](https://app.shippable.com/github/swisnl/guzzle-fixture-handler)
[![Coverage Badge](https://api.shippable.com/projects/5a7da052260fde0600abfc2a/coverageBadge?branch=master)](https://app.shippable.com/github/swisnl/guzzle-fixture-handler)

This is a fixture [handler](http://docs.guzzlephp.org/en/stable/handlers-and-middleware.html) for Guzzle 6 and is meant for testing purposes.
It is a temporary wrapper around [swisnl/php-http-fixture-client](https://github.com/swisnl/php-http-fixture-client) for packages that do not support [PHP-HTTP](http://docs.php-http.org/) yet, but require Guzzle 6.

## Install

``` bash
composer require --dev swisnl/guzzle-fixture-handler
```

## Usage

``` php
// Create client with handler
$responseBuilder = new \Swis\Guzzle\Fixture\ResponseBuilder('/path/to/fixtures');
$handler = new \Swis\Guzzle\Fixture\Handler($responseBuilder);
$handlerStack = \GuzzleHttp\HandlerStack::create($handler);
$client = new \GuzzleHttp\Client(['handler' => $handlerStack]);

// Send request
$response = $client->send(new Request(...));
```

## Fixture mapping

As this is only a wrapper, please see the [documentation of swisnl/php-http-fixture-client](https://github.com/swisnl/php-http-fixture-client#fixture-mapping) for more information about using the fixtures.

## Testing

``` bash
composer test
```

## Security

If you discover any security related issues, please email security@swis.nl instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

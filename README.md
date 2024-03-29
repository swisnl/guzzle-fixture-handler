# Fixture handler for Guzzle 6+

[![PHP from Packagist](https://img.shields.io/packagist/php-v/swisnl/guzzle-fixture-handler.svg)](https://packagist.org/packages/swisnl/guzzle-fixture-handler)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/swisnl/guzzle-fixture-handler.svg)](https://packagist.org/packages/swisnl/guzzle-fixture-handler)
[![Software License](https://img.shields.io/packagist/l/swisnl/guzzle-fixture-handler.svg)](LICENSE)
[![Buy us a tree](https://img.shields.io/badge/Treeware-%F0%9F%8C%B3-lightgreen)](https://plant.treeware.earth/swisnl/guzzle-fixture-handler)
[![Build Status](https://img.shields.io/github/checks-status/swisnl/guzzle-fixture-handler/master?label=tests)](https://github.com/swisnl/guzzle-fixture-handler/actions/workflows/tests.yml)
[![Scrutinizer Coverage](https://img.shields.io/scrutinizer/coverage/g/swisnl/guzzle-fixture-handler.svg)](https://scrutinizer-ci.com/g/swisnl/guzzle-fixture-handler/?branch=master)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/swisnl/guzzle-fixture-handler.svg)](https://scrutinizer-ci.com/g/swisnl/guzzle-fixture-handler/?branch=master)
[![Made by SWIS](https://img.shields.io/badge/%F0%9F%9A%80-made%20by%20SWIS-%230737A9.svg)](https://www.swis.nl)

This is a fixture [handler](http://docs.guzzlephp.org/en/stable/handlers-and-middleware.html) for Guzzle 6+ and is meant for testing purposes.
It is a temporary wrapper around [swisnl/php-http-fixture-client](https://github.com/swisnl/php-http-fixture-client) for packages that do not support [PSR-18: HTTP Client](https://www.php-fig.org/psr/psr-18/) yet, but require Guzzle 6+ explicitly.

## Install

``` bash
$ composer require --dev swisnl/guzzle-fixture-handler
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

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email security@swis.nl instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

This package is [Treeware](https://treeware.earth). If you use it in production, then we ask that you [**buy the world a tree**](https://plant.treeware.earth/swisnl/guzzle-fixture-handler) to thank us for our work. By contributing to the Treeware forest you’ll be creating employment for local families and restoring wildlife habitats.

## SWIS :heart: Open Source

[SWIS](https://www.swis.nl) is a web agency from Leiden, the Netherlands. We love working with open source software.

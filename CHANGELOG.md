# Changelog

All notable changes to `swisnl/guzzle-fixture-handler` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](http://keepachangelog.com/) principles.

## Unreleased

- Nothing

## [3.0.0] - 2022-01-10

### Changed
- Bumped swisnl/php-http-fixture-client to v3. Please see [changelog](https://github.com/swisnl/php-http-fixture-client/blob/master/CHANGELOG.md#300---2022-01-10) for all (breaking) changes.

### Removed
- Dropped PHP <7.4 support.

## [2.3.0] - 2021-07-12

### Added
- PHP 8 support

### Removed
- Dropped PHP <7.2 support

## [2.2.0] - 2020-07-01

### Added
- Added support for Guzzle 7 [#2](https://github.com/swisnl/guzzle-fixture-handler/pull/2)

## [2.1.0] - 2018-10-05

### Added
- Added strict mode [#3](https://github.com/swisnl/php-http-fixture-client/pull/3)

## [2.0.0] - 2018-09-05

This release changes the way URIs with GET-params are resolved to fixtures. GET-params are now separated with `&` and key/value pairs are combined with `=` instead of `-`. Besides that, more characters are allowed in the filename. Please see the updated [README](https://github.com/swisnl/php-http-fixture-client/blob/master/README.md) and pull request [#2](https://github.com/swisnl/php-http-fixture-client/pull/2) for more information.

### Changed
- Changed logic for converting GET-params to a filename [#2](https://github.com/swisnl/php-http-fixture-client/pull/2)

## [1.0.1] - 2018-02-09

### Fixed
- Fixed namespace of HandlerTest.

## [1.0.0] - 2018-02-09

Initial release.

# Matomy PHP Client

[![Build Status](https://img.shields.io/travis/plients/Matomy-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/plients/Matomy-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/plients/matomy.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/plients/Matomy-PHP-Client.svg?style=flat-square)](https://github.com/plients/Matomy-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/plients/Matomy-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/plients/Matomy-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require plients/matomy
```

## Usage

##### Create a new Client
``` php
$client = new Plients\Matomy\Client();
$client->setConfig(['userId' => 'YOUR_USER_ID', 'apiKey' => 'YOUR_USER_ID']);

$response = $client->api('Programs')->search();

dump($response);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

Mozilla Public License Version 2.0 ([MPL-2.0](./LICENSE)).

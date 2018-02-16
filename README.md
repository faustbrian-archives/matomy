# Matomy PHP Client

[![Build Status](https://img.shields.io/travis/faustbrian/Matomy-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Matomy-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/matomy-php-client.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Matomy-PHP-Client.svg?style=flat-square)](https://github.com/faustbrian/Matomy-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Matomy-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Matomy-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/matomy-php-client
```

## Usage

##### Create a new Client
``` php
$client = new BrianFaust\Matomy\Client();
$client->setConfig(['userId' => 'YOUR_USER_ID', 'apiKey' => 'YOUR_USER_ID']);

$response = $client->api('Programs')->search();

dump($response);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)

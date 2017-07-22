# Matomy PHP Client

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

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)

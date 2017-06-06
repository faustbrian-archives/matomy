<?php

/*
 * This file is part of Matomy PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Matomy;

class HttpClient extends \BrianFaust\AbstractHttpClient
{
    protected $options = [
        'base_uri' => 'https://network.adsmarket.com/',
        'headers'  => [
           'User-Agent' => 'BrianFaust\Matomy',
        ],
    ];

    protected $requestModifiers = [
        Modifiers\AuthModifier::class,
        Modifiers\BaseUriModifier::class,
        Modifiers\FunctionModifier::class,
    ];

    protected function buildRequestUri($baseUri, $path)
    {
        return $baseUri;
    }
}

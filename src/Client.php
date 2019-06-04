<?php

declare(strict_types=1);

/*
 * This file is part of Matomy PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\Matomy;

use Plients\Http\Http;

class Client
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $userId;

    /**
     * Create a new client instance.
     *
     * @param string $userId
     * @param string $key
     */
    public function __construct(string $userId, string $key)
    {
        $this->userId = $userId;
        $this->key = $key;
    }

    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \Plients\Matomy\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri("https://network.adsmarket.com/?userid={$this->userId}&key={$this->key}&report=cmn");

        $class = "Plients\\Matomy\\API\\{$name}";

        return new $class($client);
    }
}

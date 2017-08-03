<?php

declare(strict_types=1);

/*
 * This file is part of Matomy PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Matomy\API;

use BrianFaust\Http\HttpResponse;
use BrianFaust\Http\PendingHttpRequest;

abstract class AbstractAPI
{
    /**
     * @var \BrianFaust\Http\PendingHttpRequest
     */
    protected $client;

    /**
     * Create a new API class instance.
     *
     * @param \BrianFaust\Http\PendingHttpRequest $client
     */
    public function __construct(PendingHttpRequest $client)
    {
        $this->client = $client;
    }

    protected function get(string $fn, array $parameters): HttpResponse
    {
        return $this->client->get(
            property_exists($this, 'report') ? 'AccessReports' : 'site/API2',
            compact('fn') + $parameters
        );
    }
}

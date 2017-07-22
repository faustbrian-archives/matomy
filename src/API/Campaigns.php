<?php

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

class Campaigns extends AbstractAPI
{
    public function search(array $parameters = []): HttpResponse
    {
        return $this->client->get('findcampaigns', $parameters);
    }
}

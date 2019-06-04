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

namespace Plients\Matomy\API;

use Plients\Http\HttpResponse;

class CommissionsReport extends AbstractAPI
{
    public $report = true;

    public function export(array $parameters = []): HttpResponse
    {
        return $this->client->get('/', $parameters);
    }
}

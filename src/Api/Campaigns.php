<?php

/*
 * This file is part of Matomy PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Matomy\Api;

class Campaigns extends \BrianFaust\AbstractApi
{
    public function search($parameters = [])
    {
        $this->setQuery($parameters);

        return array_get($this->get('findcampaigns'), 'campaigns.campaign');
    }
}

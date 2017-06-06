<?php

/*
 * This file is part of Matomy PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Matomy\Modifiers;

class AuthModifier extends AbstractModifier
{
    public function apply()
    {
        $this->httpClient->addQuery('userid', $this->httpClient->getConfig('userId'));
        $this->httpClient->addQuery('key', $this->httpClient->getConfig('apiKey'));
        $this->httpClient->addQuery('report', 'cmn');

        return $this->httpClient;
    }
}

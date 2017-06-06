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

class BaseUriModifier extends AbstractModifier
{
    public function apply()
    {
        $baseUri = $this->httpClient->getOption('base_uri');

        $path = property_exists($this->httpClient->getApiClass(), 'report') ? 'AccessReports' : 'site/API2';

        $this->httpClient->setOption('base_uri', $this->httpClient->getOption('base_uri').$path);

        $this->httpClient->addQuery('fn', $this->argument['path']);

        return $this->httpClient;
    }
}
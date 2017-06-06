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

class ServiceProvider extends \BrianFaust\AbstractServiceProvider
{
    protected function getIdentifier()
    {
        return 'faustbrian.matomy';
    }
}

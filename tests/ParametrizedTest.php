<?php
/**
 * Copyright (C) 2015  Alexander Schmidt
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * @author     Alexander Schmidt <mail@story75.com>
 * @copyright  Copyright (c) 2015, Alexander Schmidt
 * @date       17.06.2015
 */

namespace Bonefish\Tests\Traits;


use Bonefish\Traits\Parametrized;

class ParametrizedTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Parametrized
     */
    private $sut;

    public function setUp()
    {
        $this->sut = $this->getMockForTrait(Parametrized::class);
    }

    public function testParameterGetterAndSetter()
    {
        $parameters = ['foo', 'bar'];

        $this->sut->setParameters($parameters);

        $this->assertEquals($parameters, $this->sut->getParameters());
    }
}
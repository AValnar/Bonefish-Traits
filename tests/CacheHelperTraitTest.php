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


use Bonefish\Traits\CacheHelperTrait;

class CacheHelperTraitTest extends \PHPUnit_Framework_TestCase
{
    use CacheHelperTrait;

    public function testCachePrefixGetterAndSetter()
    {
        $cachePrefix = 'foo';

        $this->setCachePrefix($cachePrefix);

        $this->assertEquals($cachePrefix, $this->getCachePrefix());
    }

    /**
     * @param string $cachePrefix
     * @param string $identifier
     * @param string $expected
     * @dataProvider getCacheKeyDataProvider
     * @depends testCachePrefixGetterAndSetter
     */
    public function testGetCacheKey($cachePrefix, $identifier, $expected)
    {
        $this->setCachePrefix($cachePrefix);

        $this->assertEquals($expected, $this->getCacheKey($identifier));
    }

    public function getCacheKeyDataProvider()
    {
        return [
            ['', 'foo', sha1('foo')],
            ['bar', 'foo', sha1('barfoo')],
            ['baz', '', sha1('baz')],
        ];
    }
}
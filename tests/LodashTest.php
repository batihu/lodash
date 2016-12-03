<?php

namespace Lodash\Tests;

use Lodash\Lodash;

class LodashTest extends \PHPUnit_Framework_TestCase
{

    public function testChunk()
    {
        $l =new Lodash();
        $this->assertEquals( [['a', 'b'], ['c', 'd']] , $l->chunk(['a', 'b', 'c', 'd'], 2));
        $this->assertEquals( [['a', 'b', 'c'], ['d']] , $l->chunk(['a', 'b', 'c', 'd'], 3));
    }
}

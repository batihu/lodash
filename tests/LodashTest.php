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


    public function testCompact()
    {
        $l = new Lodash();
        $l->compact([0, 1, false, 2, '', 3]);
    }
}

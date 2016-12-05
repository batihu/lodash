<?php

namespace Lodash\Tests;

use Lodash\Lodash;

class LodashTest extends \PHPUnit_Framework_TestCase
{
    public $l;

    public function __construct()
    {
        $this->l = new Lodash();
    }


    public function testChunk()
    {
        $this->assertEquals([['a', 'b'], ['c', 'd']], $this->l->chunk(['a', 'b', 'c', 'd'], 2));
        $this->assertEquals([['a', 'b', 'c'], ['d']], $this->l->chunk(['a', 'b', 'c', 'd'], 3));
    }


    public function testCompact()
    {
        $this->assertEquals([1, 2, 3], $this->l->compact([0, 1, false, 2, '', 3]));
        $this->assertEquals([4, 5, 6, 7], $this->l->compact([4, false, 5, 0, 6, '', 7, false, false, '',]));
        $this->assertEquals([4, 5, 6, 7], $this->l->compact([6, false, 4, 0, 7, '', 5, false, false, '',]));
    }
}

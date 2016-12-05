<?php

namespace Lodash\Tests;

use Lodash\Lodash;

class LodashTest extends \PHPUnit_Framework_TestCase
{
    public $lodash;

    public function __construct()
    {
        $this->lodash = new Lodash();
    }


    public function testChunk()
    {
        $this->assertEquals([['a', 'b'], ['c', 'd']], $this->lodash->chunk(['a', 'b', 'c', 'd'], 2));
        $this->assertEquals([['a', 'b', 'c'], ['d']], $this->lodash->chunk(['a', 'b', 'c', 'd'], 3));
    }


    public function testCompact()
    {
        $this->assertEquals([1, 2, 3], $this->lodash->compact([0, 1, false, 2, '', 3]));
        $this->assertEquals([4, 5, 6, 7], $this->lodash->compact([4, false, 5, 0, 6, '', 7, false, false, '',]));
        $this->assertEquals([4, 5, 6, 7], $this->lodash->compact([6, false, 4, 0, 7, '', 5, false, false, '',]));
    }

    public function testConcat()
    {
        $this->lodash->concat();

    }
}

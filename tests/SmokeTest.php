<?php

namespace Konstmal\Separator\Test;

use Konstmal\Separator\Separator;

class SmokeTest extends \PHPUnit_Framework_TestCase
{


    /**
     * Test empty
     */
    public function testEmpty()
    {
        $result = Separator::separate([], 1);
        $this->assertEquals(-1, $result);
    }

    /**
     * Test from formulation of the task
     */
    public function testFormulation()
    {
        $result = Separator::separate([5, 5, 1, 7, 2, 3, 5], 5);
        $this->assertEquals(4, $result);
    }

    /**
     * My test #1
     */
    public function testMyTest()
    {
        $result = Separator::separate([1, 2, 3, 5, 5, 5, 1, 5], 5);
        $this->assertEquals(4, $result);
    }

    /**
     * My test #2
     */
    public function testMyOtherTest()
    {
        $result = Separator::separate([1, 2, 3, 4], 4);
        $this->assertEquals(-1, $result);
    }



}

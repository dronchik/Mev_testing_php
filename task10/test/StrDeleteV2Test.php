<?php

namespace OlechkaBrajko\Task10;

require "StrDeleteV2.php";

class StrDeleteV2Test extends \PHPUnit_Framework_TestCase
{
    private $tmp;

    protected function setUp()
    {
        $this->tmp = new StrDeleteV2();
    }

    protected function tearDown()
    {
        $this->tmp = null;
    }

    public function testArraySum()
    {
        $str = "  iuy p  1 ";
        $result = $this->tmp->strDeleteV2($str);
        $this->assertEquals("iuyp1", $result);

        $str = "      ";
        $result = $this->tmp->strDeleteV2($str);
        $this->assertEquals("", $result);
    }
}

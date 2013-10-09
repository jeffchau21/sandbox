<?php

require_once 'Adder.php';

class AdderTest extends PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
	int $c = $this->add(3,4);
	$this->assertEquals(6,$c);
    }
 
}
?>

<?php
require("super.php");
class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {

        $test = new super(2);
        $this->assertEquals('Connected successfully',$test->go());
  	}
}

?>

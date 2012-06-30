<?php

class simpleTest extends WP_UnitTestCase {
	public function testEchoSomething(){
		ob_start();
		jpb_echoSomething();
		$output = ob_get_clean();
		$this->assertEquals('YAWP!',$output);
	}
	public function testReturnSomething(){
		$return = jpb_returnSomething();
		$this->assertEquals('YAWP!',$return);
	}
	public function testContentFilter(){
		$content = apply_filters('the_content','My barbaric what?');
		$this->assertEquals('YAWP!',$content);
	}
}

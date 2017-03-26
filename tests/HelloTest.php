<?php

use Hello\Hello;

class HelloTest extends PHPUnit_Framework_TestCase {
  public function testSuccess() {
    $this->assertEquals('Hello world!', Hello::world());
  }
}

?>


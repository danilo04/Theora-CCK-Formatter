<?php

require_once "PHPUnit/Framework.php";
require_once "../src/theora_formatter/theora_formatter.module";

class TheoraFormatterTest extends PHPUnit_Framework_TestCase {
  
  /**
   * @Test
   */
  function testGetExtension() {
    $ext = array("filepath" => "video1.ogv");
    $this->assertEquals("ogv", _theora_formatter_get_extension($ext));
    $ext = array("filepath" => "video1.ext.oga");
    $this->assertEquals("oga", _theora_formatter_get_extension($ext));
    $ext = array("filepath" => "video1");
    $this->assertEquals("", _theora_formatter_get_extension($ext));
  }
  
}
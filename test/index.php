<?php

include __DIR__ . "/../vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use silver\package\Main;

final class MainTest extends TestCase {

    /**  @test */
    public function outputTest(){
        $this->assertEquals("Hello world", Main::hello("world"));
    }

}
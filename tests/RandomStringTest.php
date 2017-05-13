<?php

use PHPUnit\Framework\TestCase;

use \Devtech\RandomString\RandomString;

class RandomStringTest extends TestCase {
    
    public function testStringIsEmpty() {
        // $randomString = new RandomString();
        
        $this->assertEquals('', RandomString::getChars());
    }
    
}
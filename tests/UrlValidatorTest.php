<?php

use PHPUnit\Framework\TestCase;

class UrlValidatorTest extends TestCase {
    private $validator;

    protected function setUp(): void {
        $this->validator = new UrlValidator();
    }

    public function testValidUrl() {
        $this->assertTrue($this->validator->isValid('https://www.example.com'));
    }

    public function testInvalidUrl() {
        $this->assertFalse($this->validator->isValid('invalid-url'));
    }

    public function testEmptyUrl() {
        $this->assertFalse($this->validator->isValid(''));
    }

    public function testValidUrlWithQuery() {
        $this->assertTrue($this->validator->isValid('https://www.example.com?query=test'));
    }

    public function testValidUrlWithPath() {
        $this->assertTrue($this->validator->isValid('https://www.example.com/path/to/resource'));
    }
}

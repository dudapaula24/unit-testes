<?php

use PHPUnit\Framework\TestCase;

class PhoneValidatorTest extends TestCase {
    private $validator;

    protected function setUp(): void {
        $this->validator = new PhoneValidator();
    }

    public function testValidPhone10Digits() {
        $this->assertTrue($this->validator->isValid('1123456789'));
    }

    public function testValidPhone11Digits() {
        $this->assertTrue($this->validator->isValid('11923456789'));
    }

    public function testInvalidPhoneLength() {
        $this->assertFalse($this->validator->isValid('123456789'));
    }

    public function testInvalidPhoneCharacters() {
        $this->assertFalse($this->validator->isValid('abcdefg'));
    }

    public function testEmptyPhone() {
        $this->assertFalse($this->validator->isValid(''));
    }
}

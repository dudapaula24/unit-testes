<?php

use PHPUnit\Framework\TestCase;

class CepValidatorTest extends TestCase {
    private $validator;

    protected function setUp(): void {
        $this->validator = new CepValidator();
    }

    public function testValidCep() {
        $this->assertTrue($this->validator->isValid('01001-000'));
    }

    public function testInvalidCepLength() {
        $this->assertFalse($this->validator->isValid('12345'));
    }

    public function testInvalidCepCharacters() {
        $this->assertFalse($this->validator->isValid('abcdefg'));
    }

    public function testInvalidCepRepeatedDigits() {
        $this->assertFalse($this->validator->isValid('11111-111'));
    }

    public function testEmptyCep() {
        $this->assertFalse($this->validator->isValid(''));
    }
}

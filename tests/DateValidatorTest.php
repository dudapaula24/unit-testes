<?php

use PHPUnit\Framework\TestCase;

class DateValidatorTest extends TestCase {
    private $validator;

    protected function setUp(): void {
        $this->validator = new DateValidator();
    }

    public function testValidDate() {
        $this->assertTrue($this->validator->isValid('2024-11-12'));
    }

    public function testInvalidDate() {
        $this->assertFalse($this->validator->isValid('2024-13-12'));
    }

    public function testEmptyDate() {
        $this->assertFalse($this->validator->isValid(''));
    }

    public function testValidDateWithDifferentFormat() {
        $this->assertTrue($this->validator->isValid('12/11/2024', 'd/m/Y'));
    }

    public function testInvalidDateWithDifferentFormat() {
        $this->assertFalse($this->validator->isValid('32/11/2024', 'd/m/Y'));
    }
}

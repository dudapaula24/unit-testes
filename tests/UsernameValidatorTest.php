<?php

use PHPUnit\Framework\TestCase;

class UsernameValidatorTest extends TestCase {
    private $validator;

    protected function setUp(): void {
        $this->validator = new UsernameValidator();
    }

    public function testValidUsername() {
        $this->assertTrue($this->validator->isValid('valid_username1'));
    }

    public function testTooShortUsername() {
        $this->assertFalse($this->validator->isValid('ab'));
    }

    public function testTooLongUsername() {
        $this->assertFalse($this->validator->isValid('this_is_a_very_long_username'));
    }

    public function testInvalidCharactersUsername() {
        $this->assertFalse($this->validator->isValid('invalid-username!'));
    }

    public function testEmptyUsername() {
        $this->assertFalse($this->validator->isValid(''));
    }
}

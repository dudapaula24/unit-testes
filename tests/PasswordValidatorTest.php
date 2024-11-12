<?php

use PHPUnit\Framework\TestCase;

class PasswordValidatorTest extends TestCase {
    private $validator;

    protected function setUp(): void {
        $this->validator = new PasswordValidator();
    }

    public function testValidPassword() {
        $this->assertTrue($this->validator->isValid('Valid123!'));
    }

    public function testPasswordTooShort() {
        $this->assertFalse($this->validator->isValid('Short1!'));
    }

    public function testPasswordWithoutNumbers() {
        $this->assertFalse($this->validator->isValid('Password!'));
    }

    public function testPasswordWithoutUppercase() {
        $this->assertFalse($this->validator->isValid('password123!'));
    }

    public function testPasswordWithoutLowercase() {
        $this->assertFalse($this->validator->isValid('PASSWORD123!'));
    }

    public function testPasswordWithoutSpecialCharacters() {
        $this->assertFalse($this->validator->isValid('Password123'));
    }
}

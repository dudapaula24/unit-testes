<?php

use PHPUnit\Framework\TestCase;

class EmailValidatorTest extends TestCase {
    public function testValidEmail() {
        $validator = new EmailValidator();
        $this->assertTrue($validator->isValid('eduarda24paula@gmail.com'));
    }

    public function testInvalidEmail() {
        $validator = new EmailValidator();
        $this->assertFalse($validator->isValid('teste@example'));
    }

    public function testEmptyEmail() {
        $validator = new EmailValidator();
        $this->assertFalse($validator->isValid(''));
    }
}

<?php

use PHPUnit\Framework\TestCase;

class LoginValidatorTest extends TestCase {
    private $users;
    private $validator;

    protected function setUp(): void {
        $this->users = [
            'user1' => 'password1',
            'user2' => 'password2'
        ];
        $this->validator = new LoginValidator($this->users);
    }

    public function testValidLogin() {
        $this->assertTrue($this->validator->isValid('user1', 'password1'));
    }

    public function testInvalidLogin() {
        $this->assertFalse($this->validator->isValid('user1', 'wrongpassword'));
    }

    public function testNonExistentUser() {
        $this->assertFalse($this->validator->isValid('user3', 'password3'));
    }

    public function testEmptyUsername() {
        $this->assertFalse($this->validator->isValid('', 'password1'));
    }

    public function testEmptyPassword() {
        $this->assertFalse($this->validator->isValid('user1', ''));
    }
}

<?php

use PHPUnit\Framework\TestCase;

class PromoCodeValidatorTest extends TestCase {
    private $validator;

    protected function setUp(): void {
        $this->validator = new PromoCodeValidator();
    }

    public function testValidPromoCode() {
        $this->assertTrue($this->validator->isValid('SAVE20'));
    }

    public function testTooShortPromoCode() {
        $this->assertFalse($this->validator->isValid('SAV'));
    }

    public function testTooLongPromoCode() {
        $this->assertFalse($this->validator->isValid('LONGCODE1234'));
    }

    public function testInvalidCharactersPromoCode() {
        $this->assertFalse($this->validator->isValid('SAVE-20'));
    }

    public function testEmptyPromoCode() {
        $this->assertFalse($this->validator->isValid(''));
    }
}

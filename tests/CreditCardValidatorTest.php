<?php

use PHPUnit\Framework\TestCase;

class CreditCardValidatorTest extends TestCase {
    private $validator;

    protected function setUp(): void {
        $this->validator = new CreditCardValidator();
    }

    public function testValidCreditCard() {
        $this->assertTrue($this->validator->isValid('4111111111111111')); // Número de teste Visa válido
    }

    public function testInvalidCreditCard() {
        $this->assertFalse($this->validator->isValid('4111111111111112')); // Número inválido
    }

    public function testValidCreditCardWithSpaces() {
        $this->assertTrue($this->validator->isValid('4111 1111 1111 1111')); // Número de teste Visa válido com espaços
    }

    public function testInvalidCreditCardWithLetters() {
        $this->assertFalse($this->validator->isValid('4111a11111111111')); // Número com letras
    }

    public function testEmptyCreditCard() {
        $this->assertFalse($this->validator->isValid('')); // Número vazio
    }
}

<?php

class PhoneValidator {
    public function isValid($phone) {
        // Remove caracteres não numéricos
        $phone = preg_replace('/[^0-9]/', '', $phone);
        
        // Verifica se o número tem 10 ou 11 dígitos (formatos comuns no Brasil)
        if (strlen($phone) === 10 || strlen($phone) === 11) {
            return true;
        }

        return false;
    }
}

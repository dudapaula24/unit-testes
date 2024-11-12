<?php

class CepValidator {
    public function isValid($cep) {
        // Remove caracteres não numéricos
        $cep = preg_replace('/[^0-9]/', '', $cep);
        
        // Verifica se o CEP tem 8 dígitos
        if (strlen($cep) != 8) {
            return false;
        }

        // Verifica se todos os dígitos são iguais (CEPs inválidos como "11111111")
        if (preg_match('/(\d)\1{7}/', $cep)) {
            return false;
        }

        return true;
    }
}

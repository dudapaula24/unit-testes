<?php

class PromoCodeValidator {
    public function isValid($promoCode) {
        // Verifica se o código promocional tem entre 5 e 10 caracteres
        if (strlen($promoCode) < 5 || strlen($promoCode) > 10) {
            return false;
        }

        // Verifica se o código promocional contém apenas letras e números
        if (!preg_match('/^[a-zA-Z0-9]+$/', $promoCode)) {
            return false;
        }

        return true;
    }
}

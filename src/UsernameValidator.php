<?php

class UsernameValidator {
    public function isValid($username) {
        // Verifica se o nome de usuário tem entre 3 e 20 caracteres
        if (strlen($username) < 3 || strlen($username) > 20) {
            return false;
        }

        // Verifica se o nome de usuário contém apenas letras, números e sublinhados
        if (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
            return false;
        }

        return true;
    }
}

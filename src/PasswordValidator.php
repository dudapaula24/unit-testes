<?php

class PasswordValidator {
    public function isValid($password) {
        // Verifica se a senha tem pelo menos 8 caracteres
        if (strlen($password) < 8) {
            return false;
        }

        // Verifica se a senha contém pelo menos um número
        if (!preg_match('/\d/', $password)) {
            return false;
        }

        // Verifica se a senha contém pelo menos uma letra maiúscula
        if (!preg_match('/[A-Z]/', $password)) {
            return false;
        }

        // Verifica se a senha contém pelo menos uma letra minúscula
        if (!preg_match('/[a-z]/', $password)) {
            return false;
        }

        // Verifica se a senha contém pelo menos um caractere especial
        if (!preg_match('/[\W]/', $password)) {
            return false;
        }

        return true;
    }
}

<?php

class EmailValidator {
    public function isValid($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}
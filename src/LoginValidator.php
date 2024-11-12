<?php

class LoginValidator {
    private $users;

    public function __construct($users) {
        $this->users = $users;
    }

    public function isValid($username, $password) {
        if (isset($this->users[$username]) && $this->users[$username] === $password) {
            return true;
        }
        return false;
    }
}

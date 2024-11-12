<?php

class UrlValidator {
    public function isValid($url) {
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }
}

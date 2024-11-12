<?php

class CreditCardValidator {
    public function isValid($number) {
        $number = preg_replace('/\D/', '', $number);

        $sum = 0;
        $alternate = false;

        for ($i = strlen($number) - 1; $i >= 0; $i--) {
            $n = $number[$i];

            if ($alternate) {
                $n *= 2;
                if ($n > 9) {
                    $n -= 9;
                }
            }

            $sum += $n;
            $alternate = !$alternate;
        }

        return ($sum % 10 == 0);
    }
}

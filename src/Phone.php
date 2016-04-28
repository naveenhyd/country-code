<?php

/**
 * Phone
 */

namespace CountryCode;

class Phone extends Country {

    function __construct($country = '') {
        parent::__construct($country);
    }

    function getPhone($number) {
        $this->rawPhone = preg_replace('/\D/', '', $number);

        $this->phoneFormatted = $this->_setup['phone_format'];
        for ($k = 0; $k < strlen($this->rawPhone); $k++) {
            $this->phoneFormatted = preg_replace("@X@", $this->rawPhone[$k], $this->phoneFormatted, 1);
        }
        return array(
            'phoneFormatted' => $this->phoneFormatted,
            'rawPhone' => $this->rawPhone
        );
    }

}

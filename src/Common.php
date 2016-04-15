<?php

/**
 * Country
 */

namespace CountryCode;

define("BASE_PATH", __DIR__);

class Common {

    public function __set($name, $value) {
        $this->$name = $value;
    }

}

<?php

/**
 * Country
 */

namespace CountryCode;

require dirname(__DIR__) . "/vendor/autoload.php";

class Country extends Common {

    /**
     * 
     * @param string $countryCode
     */
    public function Setup($countryCode) {
        if ($this->CheckCountryInCsv($countryCode)) {
            parent::__set('country', $countryCode);
        }
    }

    /**
     * 
     * @param string $country
     * @return boolean
     */
    public function CheckCountryInCsv($country) {
        $content = file_get_contents(BASE_PATH . "/country-list.csv");
    }

}

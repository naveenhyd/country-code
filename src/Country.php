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
        $content = array_map('str_getcsv', file(BASE_PATH . "/country-list.csv"));

        foreach ($content as $key => $row) {
            $row = explode(";", $row[0]);
            if ($row[1] == $country || $row[2] == $country) {
                if ($key > 0) {
                    return true;
                } else {
                    return false;
                }
            }
        }
    }

}

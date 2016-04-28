<?php

/**
 * Country
 */

namespace CountryCode;

require dirname(__DIR__) . "/vendor/autoload.php";

class Country extends Common {

    function __construct($countryCode = '') {
        if (!empty($countryCode)) {
            $this->Setup($countryCode);
        }
    }

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
        $country = strtoupper($country);
        $content = array_map('str_getcsv', file(BASE_PATH . "/country-list.csv"));

        foreach ($content as $key => $row) {
            $row = explode(";", $row[0]);
            if ($row[1] == $country || $row[2] == $country) {
                if ($key > 0) {

                    #   setup the format strings
                    $this->_setup = array(
                        'country' => $row[0],
                        'phone_format' => $row[4],
                        'date_format' => $row[5]
                    );

//                    print_r($this);

                    return true;
                } else {
                    return false;
                }
            }
        }
    }

}

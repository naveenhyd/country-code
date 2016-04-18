<?php

/**
 * Country
 */

namespace CountryCodeTest;

require dirname(__DIR__) . "/vendor/autoload.php";

class CountryTest extends \PHPUnit_Framework_TestCase {

    function __construct() {
        $this->countryObj = new \CountryCode\Country();
    }

    function testSetup() {
        $this->countryObj->Setup('IN');
        $this->assertEquals('IN', $this->countryObj->country, "Country Code Setup Test");
    }

    function testCheckCountryInCsv() {
        $this->assertEquals(true, $this->countryObj->CheckCountryInCsv("IN"), "Country exists in csv test");
    }

}

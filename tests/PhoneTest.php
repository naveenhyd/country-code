<?php

/**
 * Country
 */

namespace CountryCodeTest;

require dirname(__DIR__) . "/vendor/autoload.php";

class PhoneTest extends \PHPUnit_Framework_TestCase {

    function __construct() {
        $this->phoneObj = new \CountryCode\Phone("USA");
    }

    function testgetPhone() {
        $result = $this->phoneObj->getPhone('0123456789');
        $this->assertEquals('012-345-6789', $result['phoneFormatted']);
    }

}

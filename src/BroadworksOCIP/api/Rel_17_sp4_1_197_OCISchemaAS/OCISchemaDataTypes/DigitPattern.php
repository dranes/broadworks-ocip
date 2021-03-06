<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinLength;
use BroadworksOCIP\Builder\Restrictions\MaxLength;


/**
 * Digit patterns that are used to restrict calls Communicaton Barring.
 *         The patterns can consist of the digits 0 through 9 and a leading + and the following wild cards:
 *         *  - Any number of digits.  For example 555* matches any digit string beginning with 555 plus zroe or more additional digits. 
 *         ? - a single-digit placeholder. For example, 555???? matches any string beginning with 555, plus at least four additional digits.  
 *         []  -  Indicates a range of digits. A consecutive range indicated with a hyphen (-), or a nonconsecutive range with a comma (,). Hyphens and commas can be used in combination ie [5-7,9].  Only single-digit ranges are supported. ie. [98-102] is invalid.
 */
class DigitPattern extends SimpleType
{
    public $elementName = "DigitPattern";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinLength("1"));
        $this->addRestriction(new MaxLength("160"));
    }
}

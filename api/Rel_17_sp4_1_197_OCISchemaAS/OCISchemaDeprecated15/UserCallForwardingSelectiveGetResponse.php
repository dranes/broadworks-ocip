<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserCallForwardingSelectiveGetRequest. The criteria table's column headings are:        
 *          "Is Active", "Criteria Name", "Time Schedule", "Calls From" and "Forward To".
 */
class UserCallForwardingSelectiveGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $defaultForwardToPhoneNumber=null,
             $playRingReminder,
             $criteriaTable
    ) {
        $this->defaultForwardToPhoneNumber = new OutgoingDNorSIPURI($defaultForwardToPhoneNumber);
        $this->playRingReminder            = $playRingReminder;
        $this->criteriaTable               = $criteriaTable;
        $this->args                        = func_get_args();
    }

    public function setDefaultForwardToPhoneNumber($defaultForwardToPhoneNumber)
    {
        $defaultForwardToPhoneNumber and $this->defaultForwardToPhoneNumber = new OutgoingDNorSIPURI($defaultForwardToPhoneNumber);
    }

    public function getDefaultForwardToPhoneNumber()
    {
        return (!$this->defaultForwardToPhoneNumber) ?: $this->defaultForwardToPhoneNumber->value();
    }

    public function setPlayRingReminder($playRingReminder)
    {
        $playRingReminder and $this->playRingReminder = new xs:boolean($playRingReminder);
    }

    public function getPlayRingReminder()
    {
        return (!$this->playRingReminder) ?: $this->playRingReminder->value();
    }

    public function setCriteriaTable($criteriaTable)
    {
        $criteriaTable and $this->criteriaTable = new core:OCITable($criteriaTable);
    }

    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->value();
    }
}
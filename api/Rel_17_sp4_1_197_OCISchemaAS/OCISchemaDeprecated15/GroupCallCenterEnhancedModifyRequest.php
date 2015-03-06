<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterWrapUpSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the Call Center Enhanced configuration data for a Call
 *         Center.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterModifyInstanceRequest16
 */
class GroupCallCenterEnhancedModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $overrideAgentWrapUpTime=null,
             $wrapUpSeconds=null
    ) {
        $this->serviceUserId           = new UserId($serviceUserId);
        $this->overrideAgentWrapUpTime = $overrideAgentWrapUpTime;
        $this->wrapUpSeconds           = new CallCenterWrapUpSeconds($wrapUpSeconds);
        $this->args                    = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setOverrideAgentWrapUpTime($overrideAgentWrapUpTime)
    {
        $overrideAgentWrapUpTime and $this->overrideAgentWrapUpTime = new xs:boolean($overrideAgentWrapUpTime);
    }

    public function getOverrideAgentWrapUpTime()
    {
        return (!$this->overrideAgentWrapUpTime) ?: $this->overrideAgentWrapUpTime->value();
    }

    public function setWrapUpSeconds($wrapUpSeconds)
    {
        $wrapUpSeconds and $this->wrapUpSeconds = new CallCenterWrapUpSeconds($wrapUpSeconds);
    }

    public function getWrapUpSeconds()
    {
        return (!$this->wrapUpSeconds) ?: $this->wrapUpSeconds->value();
    }
}
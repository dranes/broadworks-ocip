<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get a sip device type.
 *             See Also: SystemDeviceTypeGetRequest
 *             The response is either SystemSIPDeviceTypeGetResponse15 or ErrorResponse.
 *             Replaced By : SystemSIPDeviceTypeGetRequest16
 */
class SystemSIPDeviceTypeGetRequest15 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceType
    ) {
        $this->deviceType = new AccessDeviceType($deviceType);
        $this->args       = func_get_args();
    }

    public function setDeviceType($deviceType)
    {
        $deviceType and $this->deviceType = new AccessDeviceType($deviceType);
    }

    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->value();
    }
}
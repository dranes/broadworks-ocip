<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNRange;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Adds DNs to a service provider. It is possible to add either: a single DN,
 *         or a list of DNs, or a range of DNs, or any combination thereof.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderDnAddListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $phoneNumber=null,
             DNRange $dnRange=null
    ) {
        $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
        $this->phoneNumber       = new DN($phoneNumber);
        $this->dnRange           = $dnRange;
        $this->args              = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setPhoneNumber($phoneNumber)
    {
        $phoneNumber and $this->phoneNumber = new DN($phoneNumber);
    }

    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->value();
    }

    public function setDnRange($dnRange)
    {
        $dnRange and $this->dnRange = new DNRange($dnRange);
    }

    public function getDnRange()
    {
        return (!$this->dnRange) ?: $this->dnRange->value();
    }
}
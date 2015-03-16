<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\BounceCallCenterCallOnHoldSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\AlertCallCenterCallOnHoldSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a call center's bounced call settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterBouncedCallModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterBouncedCallModifyRequest';
    protected $serviceUserId;
    protected $isActive;
    protected $numberOfRingsBeforeBouncingCall;
    protected $enableTransfer;
    protected $transferPhoneNumber;
    protected $bounceCallWhenAgentUnavailable;
    protected $alertCallCenterCallOnHold;
    protected $alertCallCenterCallOnHoldSeconds;
    protected $bounceCallCenterCallOnHold;
    protected $bounceCallCenterCallOnHoldSeconds;

    public function __construct(
         $serviceUserId = '',
         $isActive = null,
         $numberOfRingsBeforeBouncingCall = null,
         $enableTransfer = null,
         $transferPhoneNumber = null,
         $bounceCallWhenAgentUnavailable = null,
         $alertCallCenterCallOnHold = null,
         $alertCallCenterCallOnHoldSeconds = null,
         $bounceCallCenterCallOnHold = null,
         $bounceCallCenterCallOnHoldSeconds = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setIsActive($isActive);
        $this->setNumberOfRingsBeforeBouncingCall($numberOfRingsBeforeBouncingCall);
        $this->setEnableTransfer($enableTransfer);
        $this->setTransferPhoneNumber($transferPhoneNumber);
        $this->setBounceCallWhenAgentUnavailable($bounceCallWhenAgentUnavailable);
        $this->setAlertCallCenterCallOnHold($alertCallCenterCallOnHold);
        $this->setAlertCallCenterCallOnHoldSeconds($alertCallCenterCallOnHoldSeconds);
        $this->setBounceCallCenterCallOnHold($bounceCallCenterCallOnHold);
        $this->setBounceCallCenterCallOnHoldSeconds($bounceCallCenterCallOnHoldSeconds);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setNumberOfRingsBeforeBouncingCall($numberOfRingsBeforeBouncingCall = null)
    {
        $this->numberOfRingsBeforeBouncingCall = ($numberOfRingsBeforeBouncingCall InstanceOf HuntNoAnswerRings)
             ? $numberOfRingsBeforeBouncingCall
             : new HuntNoAnswerRings($numberOfRingsBeforeBouncingCall);
        $this->numberOfRingsBeforeBouncingCall->setName('numberOfRingsBeforeBouncingCall');
        return $this;
    }

    /**
     * 
     * @return HuntNoAnswerRings $numberOfRingsBeforeBouncingCall
     */
    public function getNumberOfRingsBeforeBouncingCall()
    {
        return ($this->numberOfRingsBeforeBouncingCall) ? $this->numberOfRingsBeforeBouncingCall->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableTransfer($enableTransfer = null)
    {
        $this->enableTransfer = new PrimitiveType($enableTransfer);
        $this->enableTransfer->setName('enableTransfer');
        return $this;
    }

    /**
     * 
     * @return boolean $enableTransfer
     */
    public function getEnableTransfer()
    {
        return ($this->enableTransfer) ? $this->enableTransfer->getValue() : null;
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $transferPhoneNumber
             : new OutgoingDNorSIPURI($transferPhoneNumber);
        $this->transferPhoneNumber->setName('transferPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $transferPhoneNumber
     */
    public function getTransferPhoneNumber()
    {
        return ($this->transferPhoneNumber) ? $this->transferPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setBounceCallWhenAgentUnavailable($bounceCallWhenAgentUnavailable = null)
    {
        $this->bounceCallWhenAgentUnavailable = new PrimitiveType($bounceCallWhenAgentUnavailable);
        $this->bounceCallWhenAgentUnavailable->setName('bounceCallWhenAgentUnavailable');
        return $this;
    }

    /**
     * 
     * @return boolean $bounceCallWhenAgentUnavailable
     */
    public function getBounceCallWhenAgentUnavailable()
    {
        return ($this->bounceCallWhenAgentUnavailable) ? $this->bounceCallWhenAgentUnavailable->getValue() : null;
    }

    /**
     * 
     */
    public function setAlertCallCenterCallOnHold($alertCallCenterCallOnHold = null)
    {
        $this->alertCallCenterCallOnHold = new PrimitiveType($alertCallCenterCallOnHold);
        $this->alertCallCenterCallOnHold->setName('alertCallCenterCallOnHold');
        return $this;
    }

    /**
     * 
     * @return boolean $alertCallCenterCallOnHold
     */
    public function getAlertCallCenterCallOnHold()
    {
        return ($this->alertCallCenterCallOnHold) ? $this->alertCallCenterCallOnHold->getValue() : null;
    }

    /**
     * 
     */
    public function setAlertCallCenterCallOnHoldSeconds($alertCallCenterCallOnHoldSeconds = null)
    {
        $this->alertCallCenterCallOnHoldSeconds = ($alertCallCenterCallOnHoldSeconds InstanceOf AlertCallCenterCallOnHoldSeconds)
             ? $alertCallCenterCallOnHoldSeconds
             : new AlertCallCenterCallOnHoldSeconds($alertCallCenterCallOnHoldSeconds);
        $this->alertCallCenterCallOnHoldSeconds->setName('alertCallCenterCallOnHoldSeconds');
        return $this;
    }

    /**
     * 
     * @return AlertCallCenterCallOnHoldSeconds $alertCallCenterCallOnHoldSeconds
     */
    public function getAlertCallCenterCallOnHoldSeconds()
    {
        return ($this->alertCallCenterCallOnHoldSeconds) ? $this->alertCallCenterCallOnHoldSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setBounceCallCenterCallOnHold($bounceCallCenterCallOnHold = null)
    {
        $this->bounceCallCenterCallOnHold = new PrimitiveType($bounceCallCenterCallOnHold);
        $this->bounceCallCenterCallOnHold->setName('bounceCallCenterCallOnHold');
        return $this;
    }

    /**
     * 
     * @return boolean $bounceCallCenterCallOnHold
     */
    public function getBounceCallCenterCallOnHold()
    {
        return ($this->bounceCallCenterCallOnHold) ? $this->bounceCallCenterCallOnHold->getValue() : null;
    }

    /**
     * 
     */
    public function setBounceCallCenterCallOnHoldSeconds($bounceCallCenterCallOnHoldSeconds = null)
    {
        $this->bounceCallCenterCallOnHoldSeconds = ($bounceCallCenterCallOnHoldSeconds InstanceOf BounceCallCenterCallOnHoldSeconds)
             ? $bounceCallCenterCallOnHoldSeconds
             : new BounceCallCenterCallOnHoldSeconds($bounceCallCenterCallOnHoldSeconds);
        $this->bounceCallCenterCallOnHoldSeconds->setName('bounceCallCenterCallOnHoldSeconds');
        return $this;
    }

    /**
     * 
     * @return BounceCallCenterCallOnHoldSeconds $bounceCallCenterCallOnHoldSeconds
     */
    public function getBounceCallCenterCallOnHoldSeconds()
    {
        return ($this->bounceCallCenterCallOnHoldSeconds) ? $this->bounceCallCenterCallOnHoldSeconds->getValue() : null;
    }
}

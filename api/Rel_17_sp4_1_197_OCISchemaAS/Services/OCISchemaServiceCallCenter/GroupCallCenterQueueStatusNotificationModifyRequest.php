<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterWaitingTimeNotificationThresholdSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterQueueDepthNotificationThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Set the status configuration for a given call center.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterQueueStatusNotificationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterQueueStatusNotificationModifyRequest';
    protected $serviceUserId;
    protected $enableQueueStatusNotification;
    protected $enableQueueDepthThreshold;
    protected $enableWaitingTimeThreshold;
    protected $numberOfCallsThreshold;
    protected $waitingTimeOfCallsThreshold;

    public function __construct(
         $serviceUserId = '',
         $enableQueueStatusNotification = null,
         $enableQueueDepthThreshold = null,
         $enableWaitingTimeThreshold = null,
         $numberOfCallsThreshold = null,
         $waitingTimeOfCallsThreshold = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setEnableQueueStatusNotification($enableQueueStatusNotification);
        $this->setEnableQueueDepthThreshold($enableQueueDepthThreshold);
        $this->setEnableWaitingTimeThreshold($enableWaitingTimeThreshold);
        $this->setNumberOfCallsThreshold($numberOfCallsThreshold);
        $this->setWaitingTimeOfCallsThreshold($waitingTimeOfCallsThreshold);
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
    public function setEnableQueueStatusNotification($enableQueueStatusNotification = null)
    {
        $this->enableQueueStatusNotification = new PrimitiveType($enableQueueStatusNotification);
        $this->enableQueueStatusNotification->setName('enableQueueStatusNotification');
        return $this;
    }

    /**
     * 
     * @return boolean $enableQueueStatusNotification
     */
    public function getEnableQueueStatusNotification()
    {
        return ($this->enableQueueStatusNotification) ? $this->enableQueueStatusNotification->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableQueueDepthThreshold($enableQueueDepthThreshold = null)
    {
        $this->enableQueueDepthThreshold = new PrimitiveType($enableQueueDepthThreshold);
        $this->enableQueueDepthThreshold->setName('enableQueueDepthThreshold');
        return $this;
    }

    /**
     * 
     * @return boolean $enableQueueDepthThreshold
     */
    public function getEnableQueueDepthThreshold()
    {
        return ($this->enableQueueDepthThreshold) ? $this->enableQueueDepthThreshold->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableWaitingTimeThreshold($enableWaitingTimeThreshold = null)
    {
        $this->enableWaitingTimeThreshold = new PrimitiveType($enableWaitingTimeThreshold);
        $this->enableWaitingTimeThreshold->setName('enableWaitingTimeThreshold');
        return $this;
    }

    /**
     * 
     * @return boolean $enableWaitingTimeThreshold
     */
    public function getEnableWaitingTimeThreshold()
    {
        return ($this->enableWaitingTimeThreshold) ? $this->enableWaitingTimeThreshold->getValue() : null;
    }

    /**
     * 
     */
    public function setNumberOfCallsThreshold($numberOfCallsThreshold = null)
    {
        $this->numberOfCallsThreshold = ($numberOfCallsThreshold InstanceOf CallCenterQueueDepthNotificationThreshold)
             ? $numberOfCallsThreshold
             : new CallCenterQueueDepthNotificationThreshold($numberOfCallsThreshold);
        $this->numberOfCallsThreshold->setName('numberOfCallsThreshold');
        return $this;
    }

    /**
     * 
     * @return CallCenterQueueDepthNotificationThreshold $numberOfCallsThreshold
     */
    public function getNumberOfCallsThreshold()
    {
        return ($this->numberOfCallsThreshold) ? $this->numberOfCallsThreshold->getValue() : null;
    }

    /**
     * 
     */
    public function setWaitingTimeOfCallsThreshold($waitingTimeOfCallsThreshold = null)
    {
        $this->waitingTimeOfCallsThreshold = ($waitingTimeOfCallsThreshold InstanceOf CallCenterWaitingTimeNotificationThresholdSeconds)
             ? $waitingTimeOfCallsThreshold
             : new CallCenterWaitingTimeNotificationThresholdSeconds($waitingTimeOfCallsThreshold);
        $this->waitingTimeOfCallsThreshold->setName('waitingTimeOfCallsThreshold');
        return $this;
    }

    /**
     * 
     * @return CallCenterWaitingTimeNotificationThresholdSeconds $waitingTimeOfCallsThreshold
     */
    public function getWaitingTimeOfCallsThreshold()
    {
        return ($this->waitingTimeOfCallsThreshold) ? $this->waitingTimeOfCallsThreshold->getValue() : null;
    }
}

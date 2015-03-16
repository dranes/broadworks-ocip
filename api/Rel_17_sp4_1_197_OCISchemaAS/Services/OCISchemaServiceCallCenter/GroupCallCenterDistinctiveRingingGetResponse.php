<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterDistinctiveRingingGetRequest.
 */
class GroupCallCenterDistinctiveRingingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterDistinctiveRingingGetResponse';
    protected $distinctiveRingingCallCenterCalls;
    protected $distinctiveRingingRingPatternForCallCenter;
    protected $distinctiveRingingForceDeliveryRingPattern;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterDistinctiveRingingGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDistinctiveRingingCallCenterCalls($distinctiveRingingCallCenterCalls = null)
    {
        $this->distinctiveRingingCallCenterCalls = new PrimitiveType($distinctiveRingingCallCenterCalls);
        $this->distinctiveRingingCallCenterCalls->setName('distinctiveRingingCallCenterCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $distinctiveRingingCallCenterCalls
     */
    public function getDistinctiveRingingCallCenterCalls()
    {
        return ($this->distinctiveRingingCallCenterCalls) ? $this->distinctiveRingingCallCenterCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setDistinctiveRingingRingPatternForCallCenter($distinctiveRingingRingPatternForCallCenter = null)
    {
        $this->distinctiveRingingRingPatternForCallCenter = ($distinctiveRingingRingPatternForCallCenter InstanceOf RingPattern)
             ? $distinctiveRingingRingPatternForCallCenter
             : new RingPattern($distinctiveRingingRingPatternForCallCenter);
        $this->distinctiveRingingRingPatternForCallCenter->setName('distinctiveRingingRingPatternForCallCenter');
        return $this;
    }

    /**
     * 
     * @return RingPattern $distinctiveRingingRingPatternForCallCenter
     */
    public function getDistinctiveRingingRingPatternForCallCenter()
    {
        return ($this->distinctiveRingingRingPatternForCallCenter) ? $this->distinctiveRingingRingPatternForCallCenter->getValue() : null;
    }

    /**
     * 
     */
    public function setDistinctiveRingingForceDeliveryRingPattern($distinctiveRingingForceDeliveryRingPattern = null)
    {
        $this->distinctiveRingingForceDeliveryRingPattern = ($distinctiveRingingForceDeliveryRingPattern InstanceOf RingPattern)
             ? $distinctiveRingingForceDeliveryRingPattern
             : new RingPattern($distinctiveRingingForceDeliveryRingPattern);
        $this->distinctiveRingingForceDeliveryRingPattern->setName('distinctiveRingingForceDeliveryRingPattern');
        return $this;
    }

    /**
     * 
     * @return RingPattern $distinctiveRingingForceDeliveryRingPattern
     */
    public function getDistinctiveRingingForceDeliveryRingPattern()
    {
        return ($this->distinctiveRingingForceDeliveryRingPattern) ? $this->distinctiveRingingForceDeliveryRingPattern->getValue() : null;
    }
}

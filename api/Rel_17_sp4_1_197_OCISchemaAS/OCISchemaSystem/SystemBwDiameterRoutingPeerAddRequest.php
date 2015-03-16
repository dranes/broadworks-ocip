<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterApplicationId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterPeerInstance;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterPriority;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterWeight;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a Diameter routing peer.  The realm must refer to a Diameter routing realm whose action is relay.  The destinationPeerIdentity must refer to an existing Diameter peer whose mode is active.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterRoutingPeerAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemBwDiameterRoutingPeerAddRequest';
    protected $instance;
    protected $realm;
    protected $applicationId;
    protected $identity;
    protected $priority;
    protected $weight;

    public function __construct(
         $instance = '',
         $realm = '',
         $applicationId = '',
         $identity = '',
         $priority = '',
         $weight = ''
    ) {
        $this->setInstance($instance);
        $this->setRealm($realm);
        $this->setApplicationId($applicationId);
        $this->setIdentity($identity);
        $this->setPriority($priority);
        $this->setWeight($weight);
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
    public function setInstance($instance = null)
    {
        $this->instance = ($instance InstanceOf BwDiameterPeerInstance)
             ? $instance
             : new BwDiameterPeerInstance($instance);
        $this->instance->setName('instance');
        return $this;
    }

    /**
     * 
     * @return BwDiameterPeerInstance $instance
     */
    public function getInstance()
    {
        return ($this->instance) ? $this->instance->getValue() : null;
    }

    /**
     * 
     */
    public function setRealm($realm = null)
    {
        $this->realm = ($realm InstanceOf DomainName)
             ? $realm
             : new DomainName($realm);
        $this->realm->setName('realm');
        return $this;
    }

    /**
     * 
     * @return DomainName $realm
     */
    public function getRealm()
    {
        return ($this->realm) ? $this->realm->getValue() : null;
    }

    /**
     * 
     */
    public function setApplicationId($applicationId = null)
    {
        $this->applicationId = ($applicationId InstanceOf BwDiameterApplicationId)
             ? $applicationId
             : new BwDiameterApplicationId($applicationId);
        $this->applicationId->setName('applicationId');
        return $this;
    }

    /**
     * 
     * @return BwDiameterApplicationId $applicationId
     */
    public function getApplicationId()
    {
        return ($this->applicationId) ? $this->applicationId->getValue() : null;
    }

    /**
     * 
     */
    public function setIdentity($identity = null)
    {
        $this->identity = ($identity InstanceOf DomainName)
             ? $identity
             : new DomainName($identity);
        $this->identity->setName('identity');
        return $this;
    }

    /**
     * 
     * @return DomainName $identity
     */
    public function getIdentity()
    {
        return ($this->identity) ? $this->identity->getValue() : null;
    }

    /**
     * 
     */
    public function setPriority($priority = null)
    {
        $this->priority = ($priority InstanceOf BwDiameterPriority)
             ? $priority
             : new BwDiameterPriority($priority);
        $this->priority->setName('priority');
        return $this;
    }

    /**
     * 
     * @return BwDiameterPriority $priority
     */
    public function getPriority()
    {
        return ($this->priority) ? $this->priority->getValue() : null;
    }

    /**
     * 
     */
    public function setWeight($weight = null)
    {
        $this->weight = ($weight InstanceOf BwDiameterWeight)
             ? $weight
             : new BwDiameterWeight($weight);
        $this->weight->setName('weight');
        return $this;
    }

    /**
     * 
     * @return BwDiameterWeight $weight
     */
    public function getWeight()
    {
        return ($this->weight) ? $this->weight->getValue() : null;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceCommunicationBarringProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkTranslationIndex;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a new Network Class of Service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemNetworkClassOfServiceAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemNetworkClassOfServiceAddRequest';
    protected $name;
    protected $description;
    protected $communicationBarringProfile0;
    protected $communicationBarringProfile1;
    protected $communicationBarringProfile2;
    protected $communicationBarringProfile3;
    protected $communicationBarringProfile4;
    protected $communicationBarringProfile5;
    protected $communicationBarringProfile6;
    protected $communicationBarringProfile7;
    protected $communicationBarringProfile8;
    protected $communicationBarringProfile9;
    protected $networkTranslationIndex;

    public function __construct(
         $name = '',
         $description = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile0 = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile1 = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile2 = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile3 = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile4 = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile5 = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile6 = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile7 = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile8 = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile9 = null,
         $networkTranslationIndex = null
    ) {
        $this->setName($name);
        $this->setDescription($description);
        $this->setCommunicationBarringProfile0($communicationBarringProfile0);
        $this->setCommunicationBarringProfile1($communicationBarringProfile1);
        $this->setCommunicationBarringProfile2($communicationBarringProfile2);
        $this->setCommunicationBarringProfile3($communicationBarringProfile3);
        $this->setCommunicationBarringProfile4($communicationBarringProfile4);
        $this->setCommunicationBarringProfile5($communicationBarringProfile5);
        $this->setCommunicationBarringProfile6($communicationBarringProfile6);
        $this->setCommunicationBarringProfile7($communicationBarringProfile7);
        $this->setCommunicationBarringProfile8($communicationBarringProfile8);
        $this->setCommunicationBarringProfile9($communicationBarringProfile9);
        $this->setNetworkTranslationIndex($networkTranslationIndex);
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
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf NetworkClassOfServiceName)
             ? $name
             : new NetworkClassOfServiceName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceName $name
     */
    public function getName()
    {
        return ($this->name) ? $this->name->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf NetworkClassOfServiceDescription)
             ? $description
             : new NetworkClassOfServiceDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile0(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile0 = null)
    {
        $this->communicationBarringProfile0 = ($communicationBarringProfile0 InstanceOf NetworkClassOfServiceCommunicationBarringProfile)
             ? $communicationBarringProfile0
             : new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile0);
        $this->communicationBarringProfile0->setName('communicationBarringProfile0');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile0
     */
    public function getCommunicationBarringProfile0()
    {
        return $this->communicationBarringProfile0;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile1(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile1 = null)
    {
        $this->communicationBarringProfile1 = ($communicationBarringProfile1 InstanceOf NetworkClassOfServiceCommunicationBarringProfile)
             ? $communicationBarringProfile1
             : new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile1);
        $this->communicationBarringProfile1->setName('communicationBarringProfile1');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile1
     */
    public function getCommunicationBarringProfile1()
    {
        return $this->communicationBarringProfile1;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile2(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile2 = null)
    {
        $this->communicationBarringProfile2 = ($communicationBarringProfile2 InstanceOf NetworkClassOfServiceCommunicationBarringProfile)
             ? $communicationBarringProfile2
             : new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile2);
        $this->communicationBarringProfile2->setName('communicationBarringProfile2');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile2
     */
    public function getCommunicationBarringProfile2()
    {
        return $this->communicationBarringProfile2;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile3(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile3 = null)
    {
        $this->communicationBarringProfile3 = ($communicationBarringProfile3 InstanceOf NetworkClassOfServiceCommunicationBarringProfile)
             ? $communicationBarringProfile3
             : new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile3);
        $this->communicationBarringProfile3->setName('communicationBarringProfile3');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile3
     */
    public function getCommunicationBarringProfile3()
    {
        return $this->communicationBarringProfile3;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile4(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile4 = null)
    {
        $this->communicationBarringProfile4 = ($communicationBarringProfile4 InstanceOf NetworkClassOfServiceCommunicationBarringProfile)
             ? $communicationBarringProfile4
             : new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile4);
        $this->communicationBarringProfile4->setName('communicationBarringProfile4');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile4
     */
    public function getCommunicationBarringProfile4()
    {
        return $this->communicationBarringProfile4;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile5(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile5 = null)
    {
        $this->communicationBarringProfile5 = ($communicationBarringProfile5 InstanceOf NetworkClassOfServiceCommunicationBarringProfile)
             ? $communicationBarringProfile5
             : new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile5);
        $this->communicationBarringProfile5->setName('communicationBarringProfile5');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile5
     */
    public function getCommunicationBarringProfile5()
    {
        return $this->communicationBarringProfile5;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile6(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile6 = null)
    {
        $this->communicationBarringProfile6 = ($communicationBarringProfile6 InstanceOf NetworkClassOfServiceCommunicationBarringProfile)
             ? $communicationBarringProfile6
             : new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile6);
        $this->communicationBarringProfile6->setName('communicationBarringProfile6');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile6
     */
    public function getCommunicationBarringProfile6()
    {
        return $this->communicationBarringProfile6;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile7(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile7 = null)
    {
        $this->communicationBarringProfile7 = ($communicationBarringProfile7 InstanceOf NetworkClassOfServiceCommunicationBarringProfile)
             ? $communicationBarringProfile7
             : new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile7);
        $this->communicationBarringProfile7->setName('communicationBarringProfile7');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile7
     */
    public function getCommunicationBarringProfile7()
    {
        return $this->communicationBarringProfile7;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile8(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile8 = null)
    {
        $this->communicationBarringProfile8 = ($communicationBarringProfile8 InstanceOf NetworkClassOfServiceCommunicationBarringProfile)
             ? $communicationBarringProfile8
             : new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile8);
        $this->communicationBarringProfile8->setName('communicationBarringProfile8');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile8
     */
    public function getCommunicationBarringProfile8()
    {
        return $this->communicationBarringProfile8;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile9(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile9 = null)
    {
        $this->communicationBarringProfile9 = ($communicationBarringProfile9 InstanceOf NetworkClassOfServiceCommunicationBarringProfile)
             ? $communicationBarringProfile9
             : new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile9);
        $this->communicationBarringProfile9->setName('communicationBarringProfile9');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile9
     */
    public function getCommunicationBarringProfile9()
    {
        return $this->communicationBarringProfile9;
    }

    /**
     * 
     */
    public function setNetworkTranslationIndex($networkTranslationIndex = null)
    {
        $this->networkTranslationIndex = ($networkTranslationIndex InstanceOf NetworkTranslationIndex)
             ? $networkTranslationIndex
             : new NetworkTranslationIndex($networkTranslationIndex);
        $this->networkTranslationIndex->setName('networkTranslationIndex');
        return $this;
    }

    /**
     * 
     * @return NetworkTranslationIndex $networkTranslationIndex
     */
    public function getNetworkTranslationIndex()
    {
        return ($this->networkTranslationIndex) ? $this->networkTranslationIndex->getValue() : null;
    }
}

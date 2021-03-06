<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRemoteOffice; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserRemoteOfficeGetRequest.
 */
class UserRemoteOfficeGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserRemoteOfficeGetResponse';
    protected $isActive;
    protected $remoteOfficePhoneNumber;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRemoteOffice\UserRemoteOfficeGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRemoteOfficePhoneNumber($remoteOfficePhoneNumber = null)
    {
        $this->remoteOfficePhoneNumber = ($remoteOfficePhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $remoteOfficePhoneNumber
             : new OutgoingDNorSIPURI($remoteOfficePhoneNumber);
        $this->remoteOfficePhoneNumber->setElementName('remoteOfficePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $remoteOfficePhoneNumber
     */
    public function getRemoteOfficePhoneNumber()
    {
        return ($this->remoteOfficePhoneNumber)
            ? $this->remoteOfficePhoneNumber->getElementValue()
            : null;
    }
}

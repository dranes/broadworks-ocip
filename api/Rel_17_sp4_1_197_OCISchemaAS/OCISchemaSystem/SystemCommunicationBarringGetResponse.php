<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCommunicationBarringGetRequest.
 */
class SystemCommunicationBarringGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemCommunicationBarringGetResponse';
    protected $directTransferScreening;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCommunicationBarringGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDirectTransferScreening($directTransferScreening = null)
    {
        $this->directTransferScreening = new PrimitiveType($directTransferScreening);
        $this->directTransferScreening->setName('directTransferScreening');
        return $this;
    }

    /**
     * 
     * @return boolean $directTransferScreening
     */
    public function getDirectTransferScreening()
    {
        return ($this->directTransferScreening) ? $this->directTransferScreening->getValue() : null;
    }
}

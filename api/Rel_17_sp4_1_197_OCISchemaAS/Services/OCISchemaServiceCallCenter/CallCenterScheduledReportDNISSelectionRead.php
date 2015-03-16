<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Either all DNIS under the specified Call Center or 2 lists of DNIS, one for current one for past (deleted).
 */
class CallCenterScheduledReportDNISSelectionRead extends ComplexType implements ComplexInterface
{
    public    $name = 'CallCenterScheduledReportDNISSelectionRead';
    protected $serviceUserId;
    protected $deleted;

    public function __construct(
         $serviceUserId = '',
         $deleted = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setDeleted($deleted);
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
        $this->serviceUserId = new SimpleContent($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setDeleted($deleted = null)
    {
        $this->deleted = new SimpleContent($deleted);
        $this->deleted->setName('deleted');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deleted
     */
    public function getDeleted()
    {
        return ($this->deleted) ? $this->deleted->getValue() : null;
    }
}

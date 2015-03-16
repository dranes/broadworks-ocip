<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserMeetMeConferencingGetBridgeListRequest.
 *         Contains a table with column headings: "Bridge Id", "Name", "Phone Number", "Extension", "Ports", and "Is Active"
 *         The column values for "Is Active" can either be true, or false.
 */
class UserMeetMeConferencingGetBridgeListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserMeetMeConferencingGetBridgeListResponse';
    protected $conferenceBridgeTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\UserMeetMeConferencingGetBridgeListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setConferenceBridgeTable(TableType $conferenceBridgeTable = null)
    {
        $this->conferenceBridgeTable = $conferenceBridgeTable;
        $this->conferenceBridgeTable->setName('conferenceBridgeTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getConferenceBridgeTable()
    {
        return $this->conferenceBridgeTable;
    }
}

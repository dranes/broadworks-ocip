<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotCallManager; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotCallManager\CommPilotCallManagerGroupDirectoryDisplaySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the group level data associated with CommPilot Call Manager.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCommPilotCallManagerModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCommPilotCallManagerModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $groupDirectory;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $groupDirectory = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setGroupDirectory($groupDirectory);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupDirectory($groupDirectory = null)
    {
        $this->groupDirectory = ($groupDirectory InstanceOf CommPilotCallManagerGroupDirectoryDisplaySelection)
             ? $groupDirectory
             : new CommPilotCallManagerGroupDirectoryDisplaySelection($groupDirectory);
        $this->groupDirectory->setName('groupDirectory');
        return $this;
    }

    /**
     * 
     * @return CommPilotCallManagerGroupDirectoryDisplaySelection $groupDirectory
     */
    public function getGroupDirectory()
    {
        return ($this->groupDirectory) ? $this->groupDirectory->getValue() : null;
    }
}

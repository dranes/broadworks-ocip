<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\GroupUserLicenseLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\LicenseStrictness;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ServerHostId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\LicenseName;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemLicensingGetRequest14sp3. The subscriber license table columns are: "Name", "Licensed", "Used" and "Available".
 *         The group service license table columns are: "Name", "Licensed", "Used" and "Available".
 *         The virtual service license table columns are: "Name", "Licensed", "Used" and "Available".
 *         The user service license table columns are: "Name", "Licensed", "Used", "Used By Hosted Users", "Used By Trunk Users", "Available" and "Expiration Date".
 *         The system param license table columns are: "Name", "Licensed", "Used", Available".
 */
class SystemLicensingGetResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemLicensingGetResponse14sp3';
    protected $licenseStrictness;
    protected $groupUserlimit;
    protected $expirationDate;
    protected $hostId;
    protected $licenseName;
    protected $numberOfTrunkUsers;
    protected $subscriberLicenseTable;
    protected $groupServiceLicenseTable;
    protected $virtualServiceLicenseTable;
    protected $userServiceLicenseTable;
    protected $systemParamLicenseTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemLicensingGetResponse14sp3 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLicenseStrictness($licenseStrictness = null)
    {
        $this->licenseStrictness = ($licenseStrictness InstanceOf LicenseStrictness)
             ? $licenseStrictness
             : new LicenseStrictness($licenseStrictness);
        $this->licenseStrictness->setName('licenseStrictness');
        return $this;
    }

    /**
     * 
     * @return LicenseStrictness $licenseStrictness
     */
    public function getLicenseStrictness()
    {
        return ($this->licenseStrictness) ? $this->licenseStrictness->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupUserlimit($groupUserlimit = null)
    {
        $this->groupUserlimit = ($groupUserlimit InstanceOf GroupUserLicenseLimit)
             ? $groupUserlimit
             : new GroupUserLicenseLimit($groupUserlimit);
        $this->groupUserlimit->setName('groupUserlimit');
        return $this;
    }

    /**
     * 
     * @return GroupUserLicenseLimit $groupUserlimit
     */
    public function getGroupUserlimit()
    {
        return ($this->groupUserlimit) ? $this->groupUserlimit->getValue() : null;
    }

    /**
     * 
     */
    public function setExpirationDate(xs:dateTime $expirationDate = null)
    {
        $this->expirationDate->setName('expirationDate');
        return $this;
    }

    /**
     * 
     * @return xs:dateTime $expirationDate
     */
    public function getExpirationDate()
    {
        return ($this->expirationDate) ? $this->expirationDate->getValue() : null;
    }

    /**
     * 
     */
    public function setHostId($hostId = null)
    {
        $this->hostId = ($hostId InstanceOf ServerHostId)
             ? $hostId
             : new ServerHostId($hostId);
        $this->hostId->setName('hostId');
        return $this;
    }

    /**
     * 
     * @return ServerHostId $hostId
     */
    public function getHostId()
    {
        return ($this->hostId) ? $this->hostId->getValue() : null;
    }

    /**
     * 
     */
    public function setLicenseName($licenseName = null)
    {
        $this->licenseName = ($licenseName InstanceOf LicenseName)
             ? $licenseName
             : new LicenseName($licenseName);
        $this->licenseName->setName('licenseName');
        return $this;
    }

    /**
     * 
     * @return LicenseName $licenseName
     */
    public function getLicenseName()
    {
        return ($this->licenseName) ? $this->licenseName->getValue() : null;
    }

    /**
     * 
     */
    public function setNumberOfTrunkUsers($numberOfTrunkUsers = null)
    {
        $this->numberOfTrunkUsers = new PrimitiveType($numberOfTrunkUsers);
        $this->numberOfTrunkUsers->setName('numberOfTrunkUsers');
        return $this;
    }

    /**
     * 
     * @return int $numberOfTrunkUsers
     */
    public function getNumberOfTrunkUsers()
    {
        return ($this->numberOfTrunkUsers) ? $this->numberOfTrunkUsers->getValue() : null;
    }

    /**
     * 
     */
    public function setSubscriberLicenseTable(TableType $subscriberLicenseTable = null)
    {
        $this->subscriberLicenseTable = $subscriberLicenseTable;
        $this->subscriberLicenseTable->setName('subscriberLicenseTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getSubscriberLicenseTable()
    {
        return $this->subscriberLicenseTable;
    }

    /**
     * 
     */
    public function setGroupServiceLicenseTable(TableType $groupServiceLicenseTable = null)
    {
        $this->groupServiceLicenseTable = $groupServiceLicenseTable;
        $this->groupServiceLicenseTable->setName('groupServiceLicenseTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getGroupServiceLicenseTable()
    {
        return $this->groupServiceLicenseTable;
    }

    /**
     * 
     */
    public function setVirtualServiceLicenseTable(TableType $virtualServiceLicenseTable = null)
    {
        $this->virtualServiceLicenseTable = $virtualServiceLicenseTable;
        $this->virtualServiceLicenseTable->setName('virtualServiceLicenseTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getVirtualServiceLicenseTable()
    {
        return $this->virtualServiceLicenseTable;
    }

    /**
     * 
     */
    public function setUserServiceLicenseTable(TableType $userServiceLicenseTable = null)
    {
        $this->userServiceLicenseTable = $userServiceLicenseTable;
        $this->userServiceLicenseTable->setName('userServiceLicenseTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getUserServiceLicenseTable()
    {
        return $this->userServiceLicenseTable;
    }

    /**
     * 
     */
    public function setSystemParamLicenseTable(TableType $systemParamLicenseTable = null)
    {
        $this->systemParamLicenseTable = $systemParamLicenseTable;
        $this->systemParamLicenseTable->setName('systemParamLicenseTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getSystemParamLicenseTable()
    {
        return $this->systemParamLicenseTable;
    }
}

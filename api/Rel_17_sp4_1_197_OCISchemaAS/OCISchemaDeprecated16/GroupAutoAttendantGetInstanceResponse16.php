<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantNameDialingEntry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantDialingScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantReadMenu16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupAutoAttendantGetInstanceRequest16.
 *         Contains the service profile information.
 */
class GroupAutoAttendantGetInstanceResponse16 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupAutoAttendantGetInstanceResponse16';
    protected $serviceInstanceProfile;
    protected $enableVideo;
    protected $businessHours;
    protected $holidayScheduleName;
    protected $extensionDialingScope;
    protected $nameDialingScope;
    protected $nameDialingEntries;
    protected $businessHoursMenu;
    protected $afterHoursMenu;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupAutoAttendantGetInstanceResponse16 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceReadProfile)
             ? $serviceInstanceProfile
             : new ServiceInstanceReadProfile($serviceInstanceProfile);
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceReadProfile $serviceInstanceProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setEnableVideo($enableVideo = null)
    {
        $this->enableVideo = new PrimitiveType($enableVideo);
        $this->enableVideo->setName('enableVideo');
        return $this;
    }

    /**
     * 
     * @return boolean $enableVideo
     */
    public function getEnableVideo()
    {
        return ($this->enableVideo) ? $this->enableVideo->getValue() : null;
    }

    /**
     * 
     */
    public function setBusinessHours($businessHours = null)
    {
        $this->businessHours = ($businessHours InstanceOf ScheduleName)
             ? $businessHours
             : new ScheduleName($businessHours);
        $this->businessHours->setName('businessHours');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $businessHours
     */
    public function getBusinessHours()
    {
        return ($this->businessHours) ? $this->businessHours->getValue() : null;
    }

    /**
     * 
     */
    public function setHolidayScheduleName($holidayScheduleName = null)
    {
        $this->holidayScheduleName = ($holidayScheduleName InstanceOf ScheduleName)
             ? $holidayScheduleName
             : new ScheduleName($holidayScheduleName);
        $this->holidayScheduleName->setName('holidayScheduleName');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $holidayScheduleName
     */
    public function getHolidayScheduleName()
    {
        return ($this->holidayScheduleName) ? $this->holidayScheduleName->getValue() : null;
    }

    /**
     * 
     */
    public function setExtensionDialingScope($extensionDialingScope = null)
    {
        $this->extensionDialingScope = ($extensionDialingScope InstanceOf AutoAttendantDialingScope)
             ? $extensionDialingScope
             : new AutoAttendantDialingScope($extensionDialingScope);
        $this->extensionDialingScope->setName('extensionDialingScope');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantDialingScope $extensionDialingScope
     */
    public function getExtensionDialingScope()
    {
        return ($this->extensionDialingScope) ? $this->extensionDialingScope->getValue() : null;
    }

    /**
     * 
     */
    public function setNameDialingScope($nameDialingScope = null)
    {
        $this->nameDialingScope = ($nameDialingScope InstanceOf AutoAttendantDialingScope)
             ? $nameDialingScope
             : new AutoAttendantDialingScope($nameDialingScope);
        $this->nameDialingScope->setName('nameDialingScope');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantDialingScope $nameDialingScope
     */
    public function getNameDialingScope()
    {
        return ($this->nameDialingScope) ? $this->nameDialingScope->getValue() : null;
    }

    /**
     * 
     */
    public function setNameDialingEntries($nameDialingEntries = null)
    {
        $this->nameDialingEntries = ($nameDialingEntries InstanceOf AutoAttendantNameDialingEntry)
             ? $nameDialingEntries
             : new AutoAttendantNameDialingEntry($nameDialingEntries);
        $this->nameDialingEntries->setName('nameDialingEntries');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantNameDialingEntry $nameDialingEntries
     */
    public function getNameDialingEntries()
    {
        return ($this->nameDialingEntries) ? $this->nameDialingEntries->getValue() : null;
    }

    /**
     * 
     */
    public function setBusinessHoursMenu(AutoAttendantReadMenu16 $businessHoursMenu = null)
    {
        $this->businessHoursMenu = ($businessHoursMenu InstanceOf AutoAttendantReadMenu16)
             ? $businessHoursMenu
             : new AutoAttendantReadMenu16($businessHoursMenu);
        $this->businessHoursMenu->setName('businessHoursMenu');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantReadMenu16 $businessHoursMenu
     */
    public function getBusinessHoursMenu()
    {
        return $this->businessHoursMenu;
    }

    /**
     * 
     */
    public function setAfterHoursMenu(AutoAttendantReadMenu16 $afterHoursMenu = null)
    {
        $this->afterHoursMenu = ($afterHoursMenu InstanceOf AutoAttendantReadMenu16)
             ? $afterHoursMenu
             : new AutoAttendantReadMenu16($afterHoursMenu);
        $this->afterHoursMenu->setName('afterHoursMenu');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantReadMenu16 $afterHoursMenu
     */
    public function getAfterHoursMenu()
    {
        return $this->afterHoursMenu;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Uniquely identifies Holiday and Time Schedules within a level(System, Service Provider, Group or User level).
 */
class ScheduleKey extends ComplexType implements ComplexInterface
{
    public    $name = 'ScheduleKey';
    protected $scheduleName;
    protected $scheduleType;

    public function __construct(
         $scheduleName = '',
         $scheduleType = ''
    ) {
        $this->setScheduleName($scheduleName);
        $this->setScheduleType($scheduleType);
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
    public function setScheduleName($scheduleName = null)
    {
        $this->scheduleName = new SimpleContent($scheduleName);
        $this->scheduleName->setName('scheduleName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $scheduleName
     */
    public function getScheduleName()
    {
        return ($this->scheduleName) ? $this->scheduleName->getValue() : null;
    }

    /**
     * 
     */
    public function setScheduleType($scheduleType = null)
    {
        $this->scheduleType = new SimpleContent($scheduleType);
        $this->scheduleType->setName('scheduleType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $scheduleType
     */
    public function getScheduleType()
    {
        return ($this->scheduleType) ? $this->scheduleType->getValue() : null;
    }
}

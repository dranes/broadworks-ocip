<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Recurrence;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EventName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify an event of a system schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemScheduleModifyEventRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemScheduleModifyEventRequest';
    protected $scheduleKey;
    protected $eventName;
    protected $newEventName;
    protected $startDate;
    protected $endDate;
    protected $recurrence;

    public function __construct(
         ScheduleKey $scheduleKey = '',
         $eventName = '',
         $newEventName = null,
         $startDate = null,
         $endDate = null,
         Recurrence $recurrence = null
    ) {
        $this->setScheduleKey($scheduleKey);
        $this->setEventName($eventName);
        $this->setNewEventName($newEventName);
        $this->setStartDate($startDate);
        $this->setEndDate($endDate);
        $this->setRecurrence($recurrence);
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
    public function setScheduleKey(ScheduleKey $scheduleKey = null)
    {
        $this->scheduleKey = ($scheduleKey InstanceOf ScheduleKey)
             ? $scheduleKey
             : new ScheduleKey($scheduleKey);
        $this->scheduleKey->setName('scheduleKey');
        return $this;
    }

    /**
     * 
     * @return ScheduleKey $scheduleKey
     */
    public function getScheduleKey()
    {
        return $this->scheduleKey;
    }

    /**
     * 
     */
    public function setEventName($eventName = null)
    {
        $this->eventName = ($eventName InstanceOf EventName)
             ? $eventName
             : new EventName($eventName);
        $this->eventName->setName('eventName');
        return $this;
    }

    /**
     * 
     * @return EventName $eventName
     */
    public function getEventName()
    {
        return ($this->eventName) ? $this->eventName->getValue() : null;
    }

    /**
     * 
     */
    public function setNewEventName($newEventName = null)
    {
        $this->newEventName = ($newEventName InstanceOf EventName)
             ? $newEventName
             : new EventName($newEventName);
        $this->newEventName->setName('newEventName');
        return $this;
    }

    /**
     * 
     * @return EventName $newEventName
     */
    public function getNewEventName()
    {
        return ($this->newEventName) ? $this->newEventName->getValue() : null;
    }

    /**
     * 
     */
    public function setStartDate(xs:date $startDate = null)
    {
        $this->startDate->setName('startDate');
        return $this;
    }

    /**
     * 
     * @return xs:date $startDate
     */
    public function getStartDate()
    {
        return ($this->startDate) ? $this->startDate->getValue() : null;
    }

    /**
     * 
     */
    public function setEndDate(xs:date $endDate = null)
    {
        $this->endDate->setName('endDate');
        return $this;
    }

    /**
     * 
     * @return xs:date $endDate
     */
    public function getEndDate()
    {
        return ($this->endDate) ? $this->endDate->getValue() : null;
    }

    /**
     * 
     */
    public function setRecurrence(Recurrence $recurrence = null)
    {
        $this->recurrence = ($recurrence InstanceOf Recurrence)
             ? $recurrence
             : new Recurrence($recurrence);
        $this->recurrence->setName('recurrence');
        return $this;
    }

    /**
     * 
     * @return Recurrence $recurrence
     */
    public function getRecurrence()
    {
        return $this->recurrence;
    }
}

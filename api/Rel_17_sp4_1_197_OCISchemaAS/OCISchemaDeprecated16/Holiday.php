<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Holiday entry.
 */
class Holiday extends ComplexType implements ComplexInterface
{
    public    $name = 'Holiday';
    protected $holidayName;
    protected $startDate;
    protected $endDate;

    public function __construct(
         $holidayName = '',
         $startDate = '',
         $endDate = null
    ) {
        $this->setHolidayName($holidayName);
        $this->setStartDate($startDate);
        $this->setEndDate($endDate);
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
    public function setHolidayName($holidayName = null)
    {
        $this->holidayName = new SimpleContent($holidayName);
        $this->holidayName->setName('holidayName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $holidayName
     */
    public function getHolidayName()
    {
        return ($this->holidayName) ? $this->holidayName->getValue() : null;
    }

    /**
     * 
     */
    public function setStartDate($startDate = null)
    {
        $this->startDate = new SimpleContent($startDate);
        $this->startDate->setName('startDate');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $startDate
     */
    public function getStartDate()
    {
        return ($this->startDate) ? $this->startDate->getValue() : null;
    }

    /**
     * 
     */
    public function setEndDate($endDate = null)
    {
        $this->endDate = new SimpleContent($endDate);
        $this->endDate->setName('endDate');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $endDate
     */
    public function getEndDate()
    {
        return ($this->endDate) ? $this->endDate->getValue() : null;
    }
}

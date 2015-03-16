<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSharedCallAppearance; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SharedCallAppearanceMaximumAppearances;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SharedCallAppearanceBridgeWarningTone;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserSharedCallAppearanceGetRequest16sp2.
 *         The endpointTable contains columns:
 *           "Device Level", "Device Name", "Device Type", "Line/Port", "SIP Contact".
 *         The "Device Level" column contains one of the AccessDeviceLevel enumerated constants.
 *         
 *         The following elements are only used in AS data mode:
 *          enableCallParkNotification
 */
class UserSharedCallAppearanceGetResponse16sp2 extends ComplexType implements ComplexInterface
{
    public    $name = 'UserSharedCallAppearanceGetResponse16sp2';
    protected $alertAllAppearancesForClickToDialCalls;
    protected $alertAllAppearancesForGroupPagingCalls;
    protected $maxAppearances;
    protected $allowSCACallRetrieve;
    protected $enableMultipleCallArrangement;
    protected $multipleCallArrangementIsActive;
    protected $endpointTable;
    protected $allowBridgingBetweenLocations;
    protected $bridgeWarningTone;
    protected $enableCallParkNotification;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSharedCallAppearance\UserSharedCallAppearanceGetResponse16sp2 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAlertAllAppearancesForClickToDialCalls($alertAllAppearancesForClickToDialCalls = null)
    {
        $this->alertAllAppearancesForClickToDialCalls = new PrimitiveType($alertAllAppearancesForClickToDialCalls);
        $this->alertAllAppearancesForClickToDialCalls->setName('alertAllAppearancesForClickToDialCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $alertAllAppearancesForClickToDialCalls
     */
    public function getAlertAllAppearancesForClickToDialCalls()
    {
        return ($this->alertAllAppearancesForClickToDialCalls) ? $this->alertAllAppearancesForClickToDialCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setAlertAllAppearancesForGroupPagingCalls($alertAllAppearancesForGroupPagingCalls = null)
    {
        $this->alertAllAppearancesForGroupPagingCalls = new PrimitiveType($alertAllAppearancesForGroupPagingCalls);
        $this->alertAllAppearancesForGroupPagingCalls->setName('alertAllAppearancesForGroupPagingCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $alertAllAppearancesForGroupPagingCalls
     */
    public function getAlertAllAppearancesForGroupPagingCalls()
    {
        return ($this->alertAllAppearancesForGroupPagingCalls) ? $this->alertAllAppearancesForGroupPagingCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxAppearances($maxAppearances = null)
    {
        $this->maxAppearances = ($maxAppearances InstanceOf SharedCallAppearanceMaximumAppearances)
             ? $maxAppearances
             : new SharedCallAppearanceMaximumAppearances($maxAppearances);
        $this->maxAppearances->setName('maxAppearances');
        return $this;
    }

    /**
     * 
     * @return SharedCallAppearanceMaximumAppearances $maxAppearances
     */
    public function getMaxAppearances()
    {
        return ($this->maxAppearances) ? $this->maxAppearances->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowSCACallRetrieve($allowSCACallRetrieve = null)
    {
        $this->allowSCACallRetrieve = new PrimitiveType($allowSCACallRetrieve);
        $this->allowSCACallRetrieve->setName('allowSCACallRetrieve');
        return $this;
    }

    /**
     * 
     * @return boolean $allowSCACallRetrieve
     */
    public function getAllowSCACallRetrieve()
    {
        return ($this->allowSCACallRetrieve) ? $this->allowSCACallRetrieve->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableMultipleCallArrangement($enableMultipleCallArrangement = null)
    {
        $this->enableMultipleCallArrangement = new PrimitiveType($enableMultipleCallArrangement);
        $this->enableMultipleCallArrangement->setName('enableMultipleCallArrangement');
        return $this;
    }

    /**
     * 
     * @return boolean $enableMultipleCallArrangement
     */
    public function getEnableMultipleCallArrangement()
    {
        return ($this->enableMultipleCallArrangement) ? $this->enableMultipleCallArrangement->getValue() : null;
    }

    /**
     * 
     */
    public function setMultipleCallArrangementIsActive($multipleCallArrangementIsActive = null)
    {
        $this->multipleCallArrangementIsActive = new PrimitiveType($multipleCallArrangementIsActive);
        $this->multipleCallArrangementIsActive->setName('multipleCallArrangementIsActive');
        return $this;
    }

    /**
     * 
     * @return boolean $multipleCallArrangementIsActive
     */
    public function getMultipleCallArrangementIsActive()
    {
        return ($this->multipleCallArrangementIsActive) ? $this->multipleCallArrangementIsActive->getValue() : null;
    }

    /**
     * 
     */
    public function setEndpointTable(TableType $endpointTable = null)
    {
        $this->endpointTable = $endpointTable;
        $this->endpointTable->setName('endpointTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getEndpointTable()
    {
        return $this->endpointTable;
    }

    /**
     * 
     */
    public function setAllowBridgingBetweenLocations($allowBridgingBetweenLocations = null)
    {
        $this->allowBridgingBetweenLocations = new PrimitiveType($allowBridgingBetweenLocations);
        $this->allowBridgingBetweenLocations->setName('allowBridgingBetweenLocations');
        return $this;
    }

    /**
     * 
     * @return boolean $allowBridgingBetweenLocations
     */
    public function getAllowBridgingBetweenLocations()
    {
        return ($this->allowBridgingBetweenLocations) ? $this->allowBridgingBetweenLocations->getValue() : null;
    }

    /**
     * 
     */
    public function setBridgeWarningTone($bridgeWarningTone = null)
    {
        $this->bridgeWarningTone = ($bridgeWarningTone InstanceOf SharedCallAppearanceBridgeWarningTone)
             ? $bridgeWarningTone
             : new SharedCallAppearanceBridgeWarningTone($bridgeWarningTone);
        $this->bridgeWarningTone->setName('bridgeWarningTone');
        return $this;
    }

    /**
     * 
     * @return SharedCallAppearanceBridgeWarningTone $bridgeWarningTone
     */
    public function getBridgeWarningTone()
    {
        return ($this->bridgeWarningTone) ? $this->bridgeWarningTone->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableCallParkNotification($enableCallParkNotification = null)
    {
        $this->enableCallParkNotification = new PrimitiveType($enableCallParkNotification);
        $this->enableCallParkNotification->setName('enableCallParkNotification');
        return $this;
    }

    /**
     * 
     * @return boolean $enableCallParkNotification
     */
    public function getEnableCallParkNotification()
    {
        return ($this->enableCallParkNotification) ? $this->enableCallParkNotification->getValue() : null;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStrandedCallProcessingAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementMediaFileTypeList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementDescriptionList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterStrandedCallGetRequest17.
 */
class GroupCallCenterStrandedCallGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterStrandedCallGetResponse17';
    protected $action;
    protected $transferPhoneNumber;
    protected $audioMessageSelection;
    protected $audioUrlList;
    protected $audioFileList;
    protected $audioMediaTypeList;
    protected $videoMessageSelection;
    protected $videoUrlList;
    protected $videoFileList;
    protected $videoMediaTypeList;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterStrandedCallGetResponse17 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAction($action = null)
    {
        $this->action = ($action InstanceOf CallCenterStrandedCallProcessingAction)
             ? $action
             : new CallCenterStrandedCallProcessingAction($action);
        $this->action->setName('action');
        return $this;
    }

    /**
     * 
     * @return CallCenterStrandedCallProcessingAction $action
     */
    public function getAction()
    {
        return ($this->action) ? $this->action->getValue() : null;
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $transferPhoneNumber
             : new OutgoingDNorSIPURI($transferPhoneNumber);
        $this->transferPhoneNumber->setName('transferPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $transferPhoneNumber
     */
    public function getTransferPhoneNumber()
    {
        return ($this->transferPhoneNumber) ? $this->transferPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setAudioMessageSelection($audioMessageSelection = null)
    {
        $this->audioMessageSelection = ($audioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $audioMessageSelection
             : new ExtendedFileResourceSelection($audioMessageSelection);
        $this->audioMessageSelection->setName('audioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $audioMessageSelection
     */
    public function getAudioMessageSelection()
    {
        return ($this->audioMessageSelection) ? $this->audioMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setAudioUrlList(CallCenterAnnouncementURLList $audioUrlList = null)
    {
        $this->audioUrlList = ($audioUrlList InstanceOf CallCenterAnnouncementURLList)
             ? $audioUrlList
             : new CallCenterAnnouncementURLList($audioUrlList);
        $this->audioUrlList->setName('audioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList $audioUrlList
     */
    public function getAudioUrlList()
    {
        return $this->audioUrlList;
    }

    /**
     * 
     */
    public function setAudioFileList(CallCenterAnnouncementDescriptionList $audioFileList = null)
    {
        $this->audioFileList = ($audioFileList InstanceOf CallCenterAnnouncementDescriptionList)
             ? $audioFileList
             : new CallCenterAnnouncementDescriptionList($audioFileList);
        $this->audioFileList->setName('audioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList $audioFileList
     */
    public function getAudioFileList()
    {
        return $this->audioFileList;
    }

    /**
     * 
     */
    public function setAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $audioMediaTypeList = null)
    {
        $this->audioMediaTypeList = ($audioMediaTypeList InstanceOf CallCenterAnnouncementMediaFileTypeList)
             ? $audioMediaTypeList
             : new CallCenterAnnouncementMediaFileTypeList($audioMediaTypeList);
        $this->audioMediaTypeList->setName('audioMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList $audioMediaTypeList
     */
    public function getAudioMediaTypeList()
    {
        return $this->audioMediaTypeList;
    }

    /**
     * 
     */
    public function setVideoMessageSelection($videoMessageSelection = null)
    {
        $this->videoMessageSelection = ($videoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $videoMessageSelection
             : new ExtendedFileResourceSelection($videoMessageSelection);
        $this->videoMessageSelection->setName('videoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $videoMessageSelection
     */
    public function getVideoMessageSelection()
    {
        return ($this->videoMessageSelection) ? $this->videoMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setVideoUrlList(CallCenterAnnouncementURLList $videoUrlList = null)
    {
        $this->videoUrlList = ($videoUrlList InstanceOf CallCenterAnnouncementURLList)
             ? $videoUrlList
             : new CallCenterAnnouncementURLList($videoUrlList);
        $this->videoUrlList->setName('videoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList $videoUrlList
     */
    public function getVideoUrlList()
    {
        return $this->videoUrlList;
    }

    /**
     * 
     */
    public function setVideoFileList(CallCenterAnnouncementDescriptionList $videoFileList = null)
    {
        $this->videoFileList = ($videoFileList InstanceOf CallCenterAnnouncementDescriptionList)
             ? $videoFileList
             : new CallCenterAnnouncementDescriptionList($videoFileList);
        $this->videoFileList->setName('videoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList $videoFileList
     */
    public function getVideoFileList()
    {
        return $this->videoFileList;
    }

    /**
     * 
     */
    public function setVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $videoMediaTypeList = null)
    {
        $this->videoMediaTypeList = ($videoMediaTypeList InstanceOf CallCenterAnnouncementMediaFileTypeList)
             ? $videoMediaTypeList
             : new CallCenterAnnouncementMediaFileTypeList($videoMediaTypeList);
        $this->videoMediaTypeList->setName('videoMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList $videoMediaTypeList
     */
    public function getVideoMediaTypeList()
    {
        return $this->videoMediaTypeList;
    }
}

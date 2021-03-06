<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\CallingPartyCategoryName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete a Calling Party Category from system. The category cannot be deleted if it is the default or is in use by any users.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallingPartyCategoryDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallingPartyCategoryDeleteRequest';
    protected $category;

    public function __construct(
         $category = ''
    ) {
        $this->setCategory($category);
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
    public function setCategory($category = null)
    {
        $this->category = ($category InstanceOf CallingPartyCategoryName)
             ? $category
             : new CallingPartyCategoryName($category);
        $this->category->setElementName('category');
        return $this;
    }

    /**
     * 
     * @return CallingPartyCategoryName $category
     */
    public function getCategory()
    {
        return ($this->category)
            ? $this->category->getElementValue()
            : null;
    }
}

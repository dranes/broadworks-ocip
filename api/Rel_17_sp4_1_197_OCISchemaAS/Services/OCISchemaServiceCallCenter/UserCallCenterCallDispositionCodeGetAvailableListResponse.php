<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserCallCenterCallDispositionCodeGetAvailableListRequest.
 *         This list may include Group/Enterprise level codes in addition to the Call Center level codes, 
 *         depending on the call center disposition codes settings.
 *         Only active codes are included in the list.
 *         Contains a table with column headings: "Code", "Description" and "Level".
 *         Level column can be any of the values in the data type CallDispositionCodeLevel.
 */
class UserCallCenterCallDispositionCodeGetAvailableListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $dispositionCodesTable
    ) {
        $this->dispositionCodesTable = $dispositionCodesTable;
        $this->args                  = func_get_args();
    }

    public function setDispositionCodesTable($dispositionCodesTable)
    {
        $dispositionCodesTable and $this->dispositionCodesTable = new core:OCITable($dispositionCodesTable);
    }

    public function getDispositionCodesTable()
    {
        return (!$this->dispositionCodesTable) ?: $this->dispositionCodesTable->value();
    }
}
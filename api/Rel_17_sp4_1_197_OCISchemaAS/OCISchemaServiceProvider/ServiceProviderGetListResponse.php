<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderGetListRequest.
 *         Contains a 3 column table with column headings 'Service Provider Id', 'Service Provider Name'
 *         and 'Is Enterprise' and a row for each service provider or enterprise.
 */
class ServiceProviderGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderTable
    ) {
        $this->serviceProviderTable = $serviceProviderTable;
        $this->args                 = func_get_args();
    }

    public function setServiceProviderTable($serviceProviderTable)
    {
        $serviceProviderTable and $this->serviceProviderTable = new core:OCITable($serviceProviderTable);
    }

    public function getServiceProviderTable()
    {
        return (!$this->serviceProviderTable) ?: $this->serviceProviderTable->value();
    }
}
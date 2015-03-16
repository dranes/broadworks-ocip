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
 * A list of SIP aliases that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 */
class ReplacementSIPAliasList extends ComplexType implements ComplexInterface
{
    public    $name = 'ReplacementSIPAliasList';
    protected $sipAlias;

    public function __construct(
         $sipAlias = null
    ) {
        $this->setSipAlias($sipAlias);
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
    public function setSipAlias($sipAlias = null)
    {
        $this->sipAlias = new SimpleContent($sipAlias);
        $this->sipAlias->setName('sipAlias');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $sipAlias
     */
    public function getSipAlias()
    {
        return ($this->sipAlias) ? $this->sipAlias->getValue() : null;
    }
}

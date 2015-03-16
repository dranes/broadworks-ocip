<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Redirected call selection.
 *       When " redirectedCall " is set to true, all call logs with redirected call are returned. When it
 *       set to false, all call logs without redirected call are returned.
 *       The redirected call can be defined by including a subset of Service Invocation Disposition here. 
 *       If none included, any call has a ServiceInvocationDisposition  value defined in ServiceInvocationDisposition
 *       is considered as a redirected call.
 */
class EnhancedCallLogsRedirectedCallSelection extends ComplexType implements ComplexInterface
{
    public    $name = 'EnhancedCallLogsRedirectedCallSelection';
    protected $redirectedCall;
    protected $redirectType;

    public function __construct(
         $redirectedCall = '',
         $redirectType = null
    ) {
        $this->setRedirectedCall($redirectedCall);
        $this->setRedirectType($redirectType);
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
    public function setRedirectedCall($redirectedCall = null)
    {
        $this->redirectedCall = new SimpleContent($redirectedCall);
        $this->redirectedCall->setName('redirectedCall');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $redirectedCall
     */
    public function getRedirectedCall()
    {
        return ($this->redirectedCall) ? $this->redirectedCall->getValue() : null;
    }

    /**
     * 
     */
    public function setRedirectType($redirectType = null)
    {
        $this->redirectType = new SimpleContent($redirectType);
        $this->redirectType->setName('redirectType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $redirectType
     */
    public function getRedirectType()
    {
        return ($this->redirectType) ? $this->redirectType->getValue() : null;
    }
}

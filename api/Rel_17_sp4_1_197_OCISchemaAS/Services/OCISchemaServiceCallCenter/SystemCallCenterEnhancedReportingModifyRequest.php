<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system settings for call center enhanced reporting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallCenterEnhancedReportingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemCallCenterEnhancedReportingModifyRequest';
    protected $archiveReports;
    protected $reportApplicationURL;
    protected $repositoryApplicationURL;

    public function __construct(
         $archiveReports = null,
         $reportApplicationURL = null,
         $repositoryApplicationURL = null
    ) {
        $this->setArchiveReports($archiveReports);
        $this->setReportApplicationURL($reportApplicationURL);
        $this->setRepositoryApplicationURL($repositoryApplicationURL);
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
    public function setArchiveReports($archiveReports = null)
    {
        $this->archiveReports = new PrimitiveType($archiveReports);
        $this->archiveReports->setName('archiveReports');
        return $this;
    }

    /**
     * 
     * @return boolean $archiveReports
     */
    public function getArchiveReports()
    {
        return ($this->archiveReports) ? $this->archiveReports->getValue() : null;
    }

    /**
     * 
     */
    public function setReportApplicationURL($reportApplicationURL = null)
    {
        $this->reportApplicationURL = ($reportApplicationURL InstanceOf URL)
             ? $reportApplicationURL
             : new URL($reportApplicationURL);
        $this->reportApplicationURL->setName('reportApplicationURL');
        return $this;
    }

    /**
     * 
     * @return URL $reportApplicationURL
     */
    public function getReportApplicationURL()
    {
        return ($this->reportApplicationURL) ? $this->reportApplicationURL->getValue() : null;
    }

    /**
     * 
     */
    public function setRepositoryApplicationURL($repositoryApplicationURL = null)
    {
        $this->repositoryApplicationURL = ($repositoryApplicationURL InstanceOf URL)
             ? $repositoryApplicationURL
             : new URL($repositoryApplicationURL);
        $this->repositoryApplicationURL->setName('repositoryApplicationURL');
        return $this;
    }

    /**
     * 
     * @return URL $repositoryApplicationURL
     */
    public function getRepositoryApplicationURL()
    {
        return ($this->repositoryApplicationURL) ? $this->repositoryApplicationURL->getValue() : null;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminTrunkGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserGroupDirectoryAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserAuthenticationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupLDAPIntegrationAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupVoiceMessagingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserCallLogAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingPlanAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupExtensionAccess;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupPolicyGetRequest17.
 *           Contains the policy settings for the group.
 */
class GroupPolicyGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupPolicyGetResponse17';
    protected $callingPlanAccess;
    protected $extensionAccess;
    protected $ldapIntegrationAccess;
    protected $voiceMessagingAccess;
    protected $departmentAdminUserAccess;
    protected $departmentAdminTrunkGroupAccess;
    protected $departmentAdminPhoneNumberExtensionAccess;
    protected $departmentAdminCallingLineIdNumberAccess;
    protected $userAuthenticationAccess;
    protected $userGroupDirectoryAccess;
    protected $userProfileAccess;
    protected $userEnhancedCallLogAccess;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupPolicyGetResponse17 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCallingPlanAccess($callingPlanAccess = null)
    {
        $this->callingPlanAccess = ($callingPlanAccess InstanceOf GroupCallingPlanAccess)
             ? $callingPlanAccess
             : new GroupCallingPlanAccess($callingPlanAccess);
        $this->callingPlanAccess->setName('callingPlanAccess');
        return $this;
    }

    /**
     * 
     * @return GroupCallingPlanAccess $callingPlanAccess
     */
    public function getCallingPlanAccess()
    {
        return ($this->callingPlanAccess) ? $this->callingPlanAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setExtensionAccess($extensionAccess = null)
    {
        $this->extensionAccess = ($extensionAccess InstanceOf GroupExtensionAccess)
             ? $extensionAccess
             : new GroupExtensionAccess($extensionAccess);
        $this->extensionAccess->setName('extensionAccess');
        return $this;
    }

    /**
     * 
     * @return GroupExtensionAccess $extensionAccess
     */
    public function getExtensionAccess()
    {
        return ($this->extensionAccess) ? $this->extensionAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setLdapIntegrationAccess($ldapIntegrationAccess = null)
    {
        $this->ldapIntegrationAccess = ($ldapIntegrationAccess InstanceOf GroupLDAPIntegrationAccess)
             ? $ldapIntegrationAccess
             : new GroupLDAPIntegrationAccess($ldapIntegrationAccess);
        $this->ldapIntegrationAccess->setName('ldapIntegrationAccess');
        return $this;
    }

    /**
     * 
     * @return GroupLDAPIntegrationAccess $ldapIntegrationAccess
     */
    public function getLdapIntegrationAccess()
    {
        return ($this->ldapIntegrationAccess) ? $this->ldapIntegrationAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setVoiceMessagingAccess($voiceMessagingAccess = null)
    {
        $this->voiceMessagingAccess = ($voiceMessagingAccess InstanceOf GroupVoiceMessagingAccess)
             ? $voiceMessagingAccess
             : new GroupVoiceMessagingAccess($voiceMessagingAccess);
        $this->voiceMessagingAccess->setName('voiceMessagingAccess');
        return $this;
    }

    /**
     * 
     * @return GroupVoiceMessagingAccess $voiceMessagingAccess
     */
    public function getVoiceMessagingAccess()
    {
        return ($this->voiceMessagingAccess) ? $this->voiceMessagingAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setDepartmentAdminUserAccess($departmentAdminUserAccess = null)
    {
        $this->departmentAdminUserAccess = ($departmentAdminUserAccess InstanceOf GroupDepartmentAdminUserAccess)
             ? $departmentAdminUserAccess
             : new GroupDepartmentAdminUserAccess($departmentAdminUserAccess);
        $this->departmentAdminUserAccess->setName('departmentAdminUserAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminUserAccess $departmentAdminUserAccess
     */
    public function getDepartmentAdminUserAccess()
    {
        return ($this->departmentAdminUserAccess) ? $this->departmentAdminUserAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setDepartmentAdminTrunkGroupAccess($departmentAdminTrunkGroupAccess = null)
    {
        $this->departmentAdminTrunkGroupAccess = ($departmentAdminTrunkGroupAccess InstanceOf GroupDepartmentAdminTrunkGroupAccess)
             ? $departmentAdminTrunkGroupAccess
             : new GroupDepartmentAdminTrunkGroupAccess($departmentAdminTrunkGroupAccess);
        $this->departmentAdminTrunkGroupAccess->setName('departmentAdminTrunkGroupAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminTrunkGroupAccess $departmentAdminTrunkGroupAccess
     */
    public function getDepartmentAdminTrunkGroupAccess()
    {
        return ($this->departmentAdminTrunkGroupAccess) ? $this->departmentAdminTrunkGroupAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setDepartmentAdminPhoneNumberExtensionAccess($departmentAdminPhoneNumberExtensionAccess = null)
    {
        $this->departmentAdminPhoneNumberExtensionAccess = ($departmentAdminPhoneNumberExtensionAccess InstanceOf GroupDepartmentAdminPhoneNumberExtensionAccess)
             ? $departmentAdminPhoneNumberExtensionAccess
             : new GroupDepartmentAdminPhoneNumberExtensionAccess($departmentAdminPhoneNumberExtensionAccess);
        $this->departmentAdminPhoneNumberExtensionAccess->setName('departmentAdminPhoneNumberExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminPhoneNumberExtensionAccess $departmentAdminPhoneNumberExtensionAccess
     */
    public function getDepartmentAdminPhoneNumberExtensionAccess()
    {
        return ($this->departmentAdminPhoneNumberExtensionAccess) ? $this->departmentAdminPhoneNumberExtensionAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setDepartmentAdminCallingLineIdNumberAccess($departmentAdminCallingLineIdNumberAccess = null)
    {
        $this->departmentAdminCallingLineIdNumberAccess = ($departmentAdminCallingLineIdNumberAccess InstanceOf GroupDepartmentAdminCallingLineIdNumberAccess)
             ? $departmentAdminCallingLineIdNumberAccess
             : new GroupDepartmentAdminCallingLineIdNumberAccess($departmentAdminCallingLineIdNumberAccess);
        $this->departmentAdminCallingLineIdNumberAccess->setName('departmentAdminCallingLineIdNumberAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminCallingLineIdNumberAccess $departmentAdminCallingLineIdNumberAccess
     */
    public function getDepartmentAdminCallingLineIdNumberAccess()
    {
        return ($this->departmentAdminCallingLineIdNumberAccess) ? $this->departmentAdminCallingLineIdNumberAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setUserAuthenticationAccess($userAuthenticationAccess = null)
    {
        $this->userAuthenticationAccess = ($userAuthenticationAccess InstanceOf GroupUserAuthenticationAccess)
             ? $userAuthenticationAccess
             : new GroupUserAuthenticationAccess($userAuthenticationAccess);
        $this->userAuthenticationAccess->setName('userAuthenticationAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserAuthenticationAccess $userAuthenticationAccess
     */
    public function getUserAuthenticationAccess()
    {
        return ($this->userAuthenticationAccess) ? $this->userAuthenticationAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setUserGroupDirectoryAccess($userGroupDirectoryAccess = null)
    {
        $this->userGroupDirectoryAccess = ($userGroupDirectoryAccess InstanceOf GroupUserGroupDirectoryAccess)
             ? $userGroupDirectoryAccess
             : new GroupUserGroupDirectoryAccess($userGroupDirectoryAccess);
        $this->userGroupDirectoryAccess->setName('userGroupDirectoryAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserGroupDirectoryAccess $userGroupDirectoryAccess
     */
    public function getUserGroupDirectoryAccess()
    {
        return ($this->userGroupDirectoryAccess) ? $this->userGroupDirectoryAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setUserProfileAccess($userProfileAccess = null)
    {
        $this->userProfileAccess = ($userProfileAccess InstanceOf GroupUserProfileAccess)
             ? $userProfileAccess
             : new GroupUserProfileAccess($userProfileAccess);
        $this->userProfileAccess->setName('userProfileAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserProfileAccess $userProfileAccess
     */
    public function getUserProfileAccess()
    {
        return ($this->userProfileAccess) ? $this->userProfileAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setUserEnhancedCallLogAccess($userEnhancedCallLogAccess = null)
    {
        $this->userEnhancedCallLogAccess = ($userEnhancedCallLogAccess InstanceOf GroupUserCallLogAccess)
             ? $userEnhancedCallLogAccess
             : new GroupUserCallLogAccess($userEnhancedCallLogAccess);
        $this->userEnhancedCallLogAccess->setName('userEnhancedCallLogAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserCallLogAccess $userEnhancedCallLogAccess
     */
    public function getUserEnhancedCallLogAccess()
    {
        return ($this->userEnhancedCallLogAccess) ? $this->userEnhancedCallLogAccess->getValue() : null;
    }
}

<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Group level services.
 */
class GroupService extends SimpleType
{
    public $elementName = "GroupService";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Account/Authorization Codes',
            'Auto Attendant',
            'Auto Attendant - Video',
            'Call Capacity Management',
            'Call Park',
            'Call Pickup',
            'City-Wide Centrex',
            'Custom Ringback Group',
            'Custom Ringback Group - Video',
            'Emergency Zones',
            'Enhanced Outgoing Calling Plan',
            'Group Paging',
            'Hunt Group',
            'Incoming Calling Plan',
            'Instant Conferencing',
            'Instant Group Call',
            'Intercept Group',
            'Inventory Report',
            'LDAP Integration',
            'Meet-Me Conferencing',
            'Music On Hold',
            'Music On Hold - Video',
            'Outgoing Calling Plan',
            'Preferred Carrier Group',
            'Route Point',
            'Series Completion',
            'Service Scripts Group',
            'Trunk Group',
            'Voice Messaging Group'
        ]));
    }
}

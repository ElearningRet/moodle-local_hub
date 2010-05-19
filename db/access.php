<?php
//
// Capability definitions for Moodle hub.
//
// The capabilities are loaded into the database table when the module is
// installed or updated. Whenever the capability definitions are updated,
// the module version number should be bumped up.
//
// The system has four possible values for a capability:
// CAP_ALLOW, CAP_PREVENT, CAP_PROHIBIT, and inherit (not set).
//
//
// CAPABILITY NAMING CONVENTION
//
// It is important that capability names are unique. The naming convention
// for capabilities that are specific to modules and blocks is as follows:
//   [mod/block]/<plugin_name>:<capabilityname>
//
// component_name should be the same as the directory name of the mod or block.
//
// Core moodle capabilities are defined thus:
//    moodle/<capabilityclass>:<capabilityname>
//
// Examples: mod/forum:viewpost
//           block/recent_activity:view
//           moodle/site:deleteuser
//
// The variable name for the capability definitions array is $capabilities

/**
 * Hub capabilities
 * @package   localhub
 * @copyright 2010 Moodle Pty Ltd (http://moodle.com)
 * @author    Jerome Mouneyrac
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


$capabilities = array(
        'moodle/hub:viewinfo' => array(
                'captype' => 'read',
                'contextlevel' => CONTEXT_SYSTEM,
        ),
        'moodle/hub:registerinfo' => array(
                'captype' => 'read',
                'contextlevel' => CONTEXT_SYSTEM,
        ),
        'moodle/hub:updateinfo' => array(
                'captype' => 'write',
                'contextlevel' => CONTEXT_SYSTEM,
        ),
        'moodle/hub:registercourse' => array(
                'riskbitmask' => RISK_SPAM | RISK_PERSONAL,
                'captype' => 'write',
                'contextlevel' => CONTEXT_SYSTEM
        ),
        'moodle/hub:view' => array(
                'captype' => 'read',
                'contextlevel' => CONTEXT_SYSTEM
        ),
        'moodle/hub:unregistercourse' => array(
                'captype' => 'write',
                'contextlevel' => CONTEXT_SYSTEM
        ),


);

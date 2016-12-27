<?php
/**
 * Contact Display Module
 * 
 * @Package	   Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       https://github.com/liamhanks/mod_contact_display
 * mod_contact_display is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

 // No direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

//$params comes from mod_contact_display.xml (module admin configuration)
$contacts = modContact_displayHelper::getContactDetails($params);

require JModuleHelper::getLayoutPath('mod_contact_display');
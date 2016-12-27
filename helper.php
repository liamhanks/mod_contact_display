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
 
class ModContact_displayHelper
{
    /**
     * Retrieves the contact(s) to display
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function getContactDetails($params)
    {
		/*
		*	$params		Array of parameters
		*	@contact	string: contact ID to display
		*
		*/
		
        // Obtain a database connection
		$db = JFactory::getDbo();
		// Retrieve the contacts' information
			$query = $db->getQuery(true)
						->select($db->quoteName($params->get('Options')))
						->from($db->quoteName('#__contact_details'))
						->where('id = ' . $db->Quote($params->get('name')));
			// Prepare the query
			$db->setQuery($query);
			// Load the row.
			$result = $db->loadObject();			
		// Return the Contact Details
		return $result;
    }
}
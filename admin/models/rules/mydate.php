<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * Form Rule class for the Joomla Framework.
 */
class JFormRuleMyDate extends JFormRule
{

	public function test(SimpleXMLElement $element, $value, $group = null, JRegistry $input = null, JForm $form = null)
	{
		if (is_null($value))
		{
			return true;
		}
		$dt = DateTime::createFromFormat("Y-m-d", $value);
		if (!($dt instanceof DateTime)) {
			$element->attributes()->message = 'Invalid date - please specify in the form YYYY-MM-DD';
			return false;
		}
		$today = date("Y-m-d");
		if ($dt->format("Y-m-d") < $today) {
			$element['message'] = 'Invalid date - please specify a date in the future';
			return false;
		}
		if ($dt->format("d-M") == '29-Feb') {
			$element['message'] = 'Invalid date - please avoid the 29th February';
			return false;
		}
		return true;
		
	}
		
}
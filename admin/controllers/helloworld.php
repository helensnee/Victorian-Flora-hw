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
 * HelloWorld Controller
 *
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 * @since       0.0.9
 */
class HelloWorldControllerHelloWorld extends JControllerForm
{
}
/**

class HelloWorldControllerHelloWorld extends JControllerLegacy
{
	public function add()
	{
		$msg = "redirecting from add";
		$this->setRedirect(JRoute::_('index.php?option=com_helloworld&view=helloworld&layout=edit&id=0', false), $msg);
	}
	public function edit()
	{
		$input = JFactory::getApplication()->input;
		$id = $input->get('id', 0, 'int');
		if ($id == 0)
		{
			$ids = $input->get('cid', array(), 'array');
			$id = $ids[0];
		}
		$msg = "redirecting from edit";
		$this->setRedirect(JRoute::_("index.php?option=com_helloworld&view=helloworld&layout=edit&id=$id", false), $msg);
	}
	
	public function save()
	{
		$input = JFactory::getApplication()->input;
		$data = $input->get('jform', array(), 'array');
		$model = $this->getModel();
		$model->save($data);
		$this->setRedirect(JRoute::_("index.php?option=com_helloworld",false), "Record saved");
		
	}
	public function cancel()
	{
		$this->setRedirect(JRoute::_("index.php?option=com_helloworld",false), "Operation cancelled");
	}
		
}
**/

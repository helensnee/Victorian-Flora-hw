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
 * HelloWorld Model
 *
 * @since  0.0.1
 */
class HelloWorldModelHelloWorld extends JModelForm
{
	
	public function delete($recs)
	{
		$table = $this->getTable('helloworld', 'helloworldTable');
		foreach ($recs as $id)
		{
			$table->delete($id);
		}
	}
	
	public function getItem()
	{
		$input = JFactory::getApplication()->input;
		$id = $input->get('id', 0, 'int');
		
		$table = $this->getTable('HelloWorld', 'HelloWorldTable');
		$table->load($id);
		return $table;		/*$table->id, $table->greeting*/
	}
	/*
	public function getTable($type = 'HelloWorld', $prefix = 'HelloWorldTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	*/
	public function getForm($data = array(), $loadData = true)
	{
		// Get the form.
		$form = $this->loadForm(
			'com_helloworld.helloworld',
			'helloworld',
			array(
				'control' => 'jform',
				'load_data' => true
			)
		);

		if (empty($form))
		{
			return false;
		}

		return $form;
	}
	
	protected function loadFormData()
	{
		// Check the session for previously entered form data.
		$data = JFactory::getApplication()->getUserState(
			'com_helloworld.edit.helloworld.data',
			array()
		);

		if (empty($data))
		{
			$data = $this->getItem();
		}

		return $data;
	}
	public function save($data) 
	{
		$table = $this->getTable('HelloWorld', 'HelloWorldTable');
		$table->bind($data);
		$table->store();
	}
}



	/*
	public function getForm($data = array(), $loadData = true)
	{}
	*/
	
		


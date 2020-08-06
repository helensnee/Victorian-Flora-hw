<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class HelloWorldControllerHelloWorlds extends JControllerAdmin
{
	/*
	public function delete()
	{
		$input = JFactory::getApplication()->input;
		$recs = $input->get('cid', array(), 'array');
		$nrecs = $input->get('boxchecked', 0, 'int');
		$model = $this->getModel('helloworld', 'helloworldmodel');
		$model->delete($recs);
		$msg = "$nrecs record(s) deleted";
		JFactory::getApplication()->enqueueMessage($msg);
		$this->setRedirect(JRoute::_('index.php?option=com_helloworld&view=helloworlds', $msg));		
	}
	*/
	
	public function getModel($name = 'HelloWorld', $prefix = 'HelloWorldModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
	
}
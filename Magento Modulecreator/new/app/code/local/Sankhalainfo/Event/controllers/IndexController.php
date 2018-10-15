<?php
class Sankhalainfo_Event_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/event?id=15 
    	 *  or
    	 * http://site.com/event/id/15 	
    	 */
    	/* 
		$event_id = $this->getRequest()->getParam('id');

  		if($event_id != null && $event_id != '')	{
			$event = Mage::getModel('event/event')->load($event_id)->getData();
		} else {
			$event = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($event == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$eventTable = $resource->getTableName('event');
			
			$select = $read->select()
			   ->from($eventTable,array('event_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$event = $read->fetchRow($select);
		}
		Mage::register('event', $event);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}
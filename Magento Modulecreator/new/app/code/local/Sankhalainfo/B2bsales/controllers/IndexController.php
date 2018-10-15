<?php
class Sankhalainfo_B2bsales_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/b2bsales?id=15 
    	 *  or
    	 * http://site.com/b2bsales/id/15 	
    	 */
    	/* 
		$b2bsales_id = $this->getRequest()->getParam('id');

  		if($b2bsales_id != null && $b2bsales_id != '')	{
			$b2bsales = Mage::getModel('b2bsales/b2bsales')->load($b2bsales_id)->getData();
		} else {
			$b2bsales = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($b2bsales == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$b2bsalesTable = $resource->getTableName('b2bsales');
			
			$select = $read->select()
			   ->from($b2bsalesTable,array('b2bsales_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$b2bsales = $read->fetchRow($select);
		}
		Mage::register('b2bsales', $b2bsales);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}
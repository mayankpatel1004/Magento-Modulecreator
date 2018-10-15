<?php
class Sankhalainfo_Requestproduct_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/requestproduct?id=15 
    	 *  or
    	 * http://site.com/requestproduct/id/15 	
    	 */
    	/* 
		$requestproduct_id = $this->getRequest()->getParam('id');

  		if($requestproduct_id != null && $requestproduct_id != '')	{
			$requestproduct = Mage::getModel('requestproduct/requestproduct')->load($requestproduct_id)->getData();
		} else {
			$requestproduct = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($requestproduct == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$requestproductTable = $resource->getTableName('requestproduct');
			
			$select = $read->select()
			   ->from($requestproductTable,array('requestproduct_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$requestproduct = $read->fetchRow($select);
		}
		Mage::register('requestproduct', $requestproduct);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}
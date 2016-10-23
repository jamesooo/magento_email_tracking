<?php
class Jamesooo_EmailTracking_Model_Emailtracking extends Mage_Reports_Model_Mysql4_Order_Collection{
    function __construct() {
        parent::__construct();
        $this->setMainTable('email_tracking');
    }

   public function insertData($templateId){
        $emailId = is_numeric($templateId)?$templateId:null;
        $emailName = is_numeric($templateId)?null:$templateId;
        $write = Mage::getSingleton('core/resource')->getConnection('core_write');
        $write->insert("email_tracking",
        array('entity_id' => '',
            'sent_date' => NOW(),
            'template_id' => $emailId,
            'template_name' => $emailName
        ));
        return true;
    }
}

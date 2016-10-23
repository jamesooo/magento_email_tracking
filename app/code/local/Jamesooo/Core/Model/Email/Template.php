<?php
class Jamesooo_Core_Model_Email_Template extends Mage_Core_Model_Email_Template{
    /**
     * Send transactional email to recipient
     *
     * @param   int $templateId
     * @param   string|array $sender sender information, can be declared as part of config path
     * @param   string $email recipient email
     * @param   string $name recipient name
     * @param   array $vars variables which can be used in template
     * @param   int|null $storeId
     *
     * @throws Mage_Core_Exception
     *
     * @return  Mage_Core_Model_Email_Template
     */
    public function sendTransactional($templateId, $sender, $email, $name, $vars=array(), $storeId=null){
        Mage::getModel('emailtracking/emailtracking')->insertData($templateId);
        parent::sendTransactional($templateId, $sender, $email, $name, $vars, $storeId);
    }
}

<?php

$installer = $this;
$installer->startSetup();
$installer->run("CREATE TABLE `email_tracking` ("
  ."`entity_id` INT NOT NULL AUTO_INCREMENT,"
  ."`sent_date` DATE NOT NULL,"
  ."`template_id` INT,"
  ."`template_name` VARCHAR(500),"
  ."PRIMARY KEY (`entity_id`));");
$installer->endSetup();

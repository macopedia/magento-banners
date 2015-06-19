<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
create table {$this->getTable('responsivebannerslider')} (id int not null auto_increment, title varchar(255),image varchar(255),description varchar(255),clicks int(12) DEFAULT '0',url varchar(255),imageorder int(12),status int(12), primary key(id));

SQLTEXT;

$installer->run($sql);
$installer->endSetup();
	 

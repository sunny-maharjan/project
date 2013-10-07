<?php

class m131006_052931_create_table extends CDbMigration
{
	public function up()
	{

$this->createTable('user', array(
'id' => 'pk',
'username' => 'string NOT NULL',
'email' => 'string NOT NULL',
'password' => 'string NOT NULL',
'status'=> 'INTEGER (1) NOT NULL DEFAULT \'0\' ',
'photo'=>'string NULL',
 'UNIQUE KEY `username` (`username`)',
   'UNIQUE KEY `email` (`email`)',

), 'ENGINE=InnoDB');
	}
	

	public function down()
	{
		 $this->dropTable('user');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
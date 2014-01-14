<?php

class m140110_152201_testtable extends CDbMigration
{
	public function up()
	{
		$this->createTable('testtable', array(
			'id' => 'pk',
			'name' => 'string NOT NULL',
			),'ENGINE=InnoDB');
	}

	public function down()
	{
		$this->dropTable('testtable');
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

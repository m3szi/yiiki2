<?php

class m140511_090056_tests_table_letrehoz extends CDbMigration
{
	public function up()
	{
	
		$this->createTable(
				'tests',
				array(
						'id'            => 'pk',
						'title'         => 'varchar(125)',
						'body'          => 'text',
						'revision'      => 'int',
						'created'       => 'int'
				)
		);
	
	}

	public function down()
	{
		$this->dropTable( 'tests' );
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
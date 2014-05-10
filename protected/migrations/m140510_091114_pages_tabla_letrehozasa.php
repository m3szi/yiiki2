<?php

class m140510_091114_pages_tabla_letrehozasa extends CDbMigration
{
	public function up()
	{
	
		$this->createTable(
				'pages',
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
		 $this->dropTable( 'pages' );
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
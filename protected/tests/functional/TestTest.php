<?php

class TestTest extends WebTestCase
{
	public $fixtures=array(
		'tests'=>'Test',
	);

	public function testShow()
	{
		$this->open('?r=test/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=test/create');
	}

	public function testUpdate()
	{
		$this->open('?r=test/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=test/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=test/index');
	}

	public function testAdmin()
	{
		$this->open('?r=test/admin');
	}
}

<?php

class MessageTest extends WebTestCase
{
	public $fixtures=array(
		'messages'=>'Message',
	);

	public function testShow()
	{
		$this->open('?r=message/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=message/create');
	}

	public function testUpdate()
	{
		$this->open('?r=message/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=message/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=message/index');
	}

	public function testAdmin()
	{
		$this->open('?r=message/admin');
	}
}

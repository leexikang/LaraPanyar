<?php


class UserTest extends TestCase {
	
	public function testLogin()
	{
		$this->call("GET", "/login");
		$this->assertResponseOk();
	}


}
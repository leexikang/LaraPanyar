<?php

use Mockery as m;
use Panyar\Repositories\UserRepositoryInterface;
class RegistrationControllerTest extends TestCase{

    public function setUp() {

        parent::setUp();
        $this->mock = $this->mock('Panyar\Repositories\UserRepositoryInterface');
        $this->validator = $this->mock('Panyar\Services\Validation\UserValidator');
    }

    public function mock($class){

        $mock = m::mock($class);
        $this->app->instance($class, $mock);
        return $mock;
    }

    public function tearDown(){

        m::close();
    }
   public function testIndex(){

    $this->call("GET", "/signup" );
    $this->assertResponseOk();

    }

    public function test_create_user_if_user_is_valid(){

        $this->validator
            ->shouldReceive("validate")
            ->once()
            ->andReturn(false);


        $this->mock->shouldReceive("create")->once();

        $this->validator
            ->shouldReceive("errors")
            ->never();

        $this->call('POST', '/signup');
    }
    public function test_redirect_if_user_info_is_invalid(){

        $this->validator
            ->shouldReceive("validate")
            ->once()
            ->andReturn(true);

        $this->validator
            ->shouldReceive("errors")
            ->once()
            ->andReturn(array('errors'));

        $this->mock->shouldReceive("create")->never();
        $this->call('POST', '/signup');
    }
}

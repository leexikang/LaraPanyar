<?php
use Mockery as m;
use Panyar\Services\Validation\CourseValidator;
class CourseControllerTest extends TestCase{

    public function setUp() {

        parent::setUp();
        $this->mock = $this->mock('Panyar\Repositories\CoursesRepositoryInterface');
        $this->validator = $this->mock("Panyar\Services\Validation\CourseValidator");
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

    }

    public function test_if_validation_fial_redirect_back(){


    }

    public function test_if_creation_complete(){

        $input['user_id'] = '';
        $input['description'] ='';
        $input['note'] = '';
        $input['name'] = '';
        $input['startTime'] = '';
        $input['endTime'] = '';
        $input['startDate'] = '';
        $input['endDate'] = '';
        $input['fee'] = '';

        $this->validator
            ->shouldReceive('validate')
            ->once()
            ->andReturn(true);
        $this->mock->shouldReceive('create')->never();

        $this->validator
            ->shouldReceive('errors')
            ->once()
            ->andReturn(array());

        $response = $this->call('POST', 'courses');

    }
}

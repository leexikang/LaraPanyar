<?php

class CourseTest extends TestCase{

    public function testDateConversation() {

        $course = new Course();
        $course->startDate = "02/03/2014";
        $this->assertEquals("2014-02-03", $course->startDate);

    }

    public function testTimeConversation(){

        $course = new Course();
        $course->endTime = "01:15 am";
        $this->assertEquals("01:15 am", $course->endTime);
    }


}

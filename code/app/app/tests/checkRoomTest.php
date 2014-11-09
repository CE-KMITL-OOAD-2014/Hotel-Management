<?php 

class checkRoomStatusTest extends TestCase { 

    public function checkRoomStatus()
    {
        $recept = new Receptionist();
        
        $allRoom=array();
        for($i=0;$i<10;$i++){
	        $room = Mockery::mock('Room');
	        if($i<5){
	        	$room->shouldReceive('getStatus')->andReturn(true);
	        }
	        else {
	        	$room->shouldReceive('getStatus')->andReturn(false);
	        }
	        $allRoom[$i]=$room;
        }
        for($i=0;$i<5;$i++){
        	$this->assertEqual($recept->getStatus($i,$allRoom),true);
        }
        for($i=5;$i<10;$i++){
        	$this->assertEqual($recept->getStatus($i,$allRoom),false);
        }
    }

}
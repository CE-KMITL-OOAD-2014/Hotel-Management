<?php
	class RoomTest extends TestCase{
		public static function mockEditRoom($id, $roomNumber, $roomType, $bed, $price, $available){
			$room = new Room();
			$room->setId($id);
			$room->setRoomType($roomType);
			$room->setRoomNumber($roomNumber);
			$room->setBed($bed);
			$room->setPrice($price);
			$room->setAvailable($available);
			return $room;
		}

		public function testBasicExample()
		{
			$id = '5';
			$roomNumber = '101';
			$roomType = '2';
			$bed = '101';
			$price = '16';
			$available = 'true';



			$roomObj = RoomTest::mockEditRoom($id, $roomNumber, $roomType, $bed, $price, $available);

			$this->assertEquals($id,$roomObj->getId());
			$this->assertEquals($roomNumber,$roomObj->getRoomNumber());
			$this->assertEquals($roomType,$roomObj->getRoomType());
			$this->assertEquals($bed,$roomObj->getBed());
			$this->assertEquals($available,$roomObj->getAvailable());
		}
	}
?>
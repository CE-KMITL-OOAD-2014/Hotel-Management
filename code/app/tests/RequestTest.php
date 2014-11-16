<?php
	class RequestTest extends TestCase{
		public function testBasicExample()
		{
			$id = '5';
			$type = '2';
			$room = '101';
			$billNumber = '16';
			$customerServiceID = '5';
			$state = '1';
			$mealID = '0';
			$date = '141110';

			//$test = TestRequests::mockRequest($id, $type, $room, $billNumber ,$customerServiceID, $state, $mealID, $date);

			$req = new Requests();
			$req->setId($id);
			$req->setType($type);
			$req->setRoom($room);
			$req->setBillNumber($billNumber);
			$req->setCustomerServiceID($customerServiceID);
			$req->setState($state);
			$req->setMealID($mealID);
			$req->setDate($date);

			$this->assertEquals($id,$req->getId());
			$this->assertEquals($type,$req->getType());
			$this->assertEquals($room,$req->getRoom());
			$this->assertEquals($billNumber,$req->getBillNumber());
			$this->assertEquals($customerServiceID,$req->getCustomerServiceID());
			$this->assertEquals($state,$req->getState());
			$this->assertEquals($mealID,$req->getMealID());
			$this->assertEquals($date,$req->getDate());
		}
	}
?>
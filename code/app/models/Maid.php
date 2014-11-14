<?php 
class Maid extends Staff
{
	//private $requestID;
	public function __construct()
	{
		parent::__construct();
	//	$requestID = 0;
	}


	//public function getRequestID(){
	//	return $this->requestID;
	//}

	//public function setRequestID($data){
	//	$this->requestID = $data;
	//}
//-----------------------------------------

	public function saveToDB(){
		parent::saveToDB();
	//	$reqIdDB=StaffRequestRepository::getID($this->getID());
	//	StaffRequestRepository::setRequestID($reqIdDB,$this->getRequestID());
	}

//-----------------------------------------
// Get Maid

	public function getMaid($id){
		if(UserRepository::isExist($id)){		
			$this->getStaff($id);
		}
		else{
			
		}
	}
//-----------------------------------------

	public function acceptClean($cleanID){
		$reqTmp = new Requests();
		$reqTmp->getRequest($cleanID);
		$reqTmp->setState(1);
		$reqTmp->saveToDB();

		//$this->setRequestID($cleanID);
		//$this->saveToDB();
	}
//-----------------------------------------

	public function checkRoomComplete($data){
		$reqTmp = new Requests();
		$reqTmp->getRequest($data['reqID']);
		$reqTmp->setState(1);
		$reqTmp->saveToDB();

		$billid = BillRepository::newBill();
		$bill = new Bill();
		$bill->setId($billid);
		$bill->setBillNumber($data['billNumber']);
		$bill->setType(2);
		$bill->setDetail("Consumer Goods : ".$data['consume-detail']);
		$bill->setState(0);
		$bill->setValue($data['consume']);
		$bill->saveToDB();


		$billid = BillRepository::newBill();
		$bill = new Bill();
		$bill->setId($billid);
		$bill->setBillNumber($data['billNumber']);
		$bill->setType(3);
		$bill->setDetail("Room damages : ".$data['damage-detail']);
		$bill->setState(0);
		$bill->setValue($data['damage']);
		$bill->saveToDB();
		//$this->setRequestID($cleanID);
		//$this->saveToDB();
	}
//-----------------------------------------

	public function completeCheckReq($reqId){
		$reqTmp = new Requests();
		$reqTmp->getRequest($reqId);
		$reqTmp->setState(2);
		$reqTmp->saveToDB();
	}

}
 ?>
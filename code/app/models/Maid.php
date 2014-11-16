<?php 
class Maid extends Staff
{
	public function __construct()
	{
		parent::__construct();
	}

//-----------------------------------------

	public function saveToDB(){
		parent::saveToDB();
	}

//-----------------------------------------
// Get Maid

	public function getMaid($id){
		$userRepository = new UserRepository();
		if($userRepository->isExist($id)){		
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

		$billRepository = new BillRepository();
		$globalRepository = new GlobalRepository();
		$billid = $billRepository->newBill();
		$bill = new Bill();
		$bill->setId($billid);
		$bill->setBillNumber($reqTmp->getBillNumber());
		$bill->setType(0);
		$bill->setDetail("Cleaning Request Charge");
		$bill->setState(0);
		$bill->setValue($globalRepository->getCleanCharge());
		$bill->saveToDB();
	}
//-----------------------------------------

	public function checkRoomComplete($data){
		$reqTmp = new Requests();
		$reqTmp->getRequest($data['reqID']);
		$reqTmp->setState(1);
		$reqTmp->saveToDB();

		$billRepository = new BillRepository();

		$billid = $billRepository->newBill();
		$bill = new Bill();
		$bill->setId($billid);
		$bill->setBillNumber($data['billNumber']);
		$bill->setType(2);
		$bill->setDetail("Consumer Goods : ".$data['consume-detail']);
		$bill->setState(0);
		$bill->setValue($data['consume']);
		$bill->saveToDB();


		$billid = $billRepository->newBill();
		$bill = new Bill();
		$bill->setId($billid);
		$bill->setBillNumber($data['billNumber']);
		$bill->setType(3);
		$bill->setDetail("Room damages : ".$data['damage-detail']);
		$bill->setState(0);
		$bill->setValue($data['damage']);
		$bill->saveToDB();
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
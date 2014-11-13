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

}
 ?>
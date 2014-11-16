<?php 
class Kitchen extends Staff
{
	private $mealId;
	function __construct()
	{
		parent::__construct();
		$mealId = NULL;
	}

	public function getMealId(){
		return $this->$mealId;
	}

	public function setMealId($data){
		$this->mealId = $data;
	}
//-----------------------------------------
// Get Kitchen
	public function getKitchen($id){
		$userRepository = new UserRepository();
		if($userRepository->isExist($id)){
			$this->getStaff($id);
			$staffRequestRepository = new StaffRequestRepository();
			$idTmp = $staffRequestRepository->getID($id);
			$this->setMealId($staffRequestRepository->getRequestID($idTmp));
		}
		else{
			
		}
	}
//-----------------------------------------
// Add Meal
	public function addMeal($data){
		$mealRepository = new MealRepository();
		$mealId = $mealRepository->newMeal();
		$mealRepository->setName($mealId,$data['name']);
		$mealRepository->setPrice($mealId,$data['price']);
		$mealRepository->setDesc($mealId,$data['desc']);
	}
//-----------------------------------------


	public function acceptOrder($orderID){
		$reqTmp = new Requests();
		$reqTmp->getRequest($orderID);
		$reqTmp->setState(1);
		$reqTmp->saveToDB();

		$meal = new Meal();
		$meal->getMeal($reqTmp->getMealID());

		$billRepository = new BillRepository();
		$billid = $billRepository->newBill();
		$bill = new Bill();
		$bill->setId($billid);
		$bill->setBillNumber($reqTmp->getBillNumber());
		$bill->setType(1);
		$bill->setDetail("Food Request Charge : ".$meal->getName());
		$bill->setState(0);
		$bill->setValue($meal->getPrice());
		$bill->saveToDB();
	}

//-----------------------------------------

	public function editMeal($data){
		$meal =new Meal();
		$meal->getMeal($data['mealID']);
		$meal->setName($data['name']);
		$meal->setPrice($data['price']);
		$meal->setDesc($data['desc']);
		$meal->saveToDB();
	}

//-----------------------------------------
 
	public function deleteMeal($id){
		$user =new Meal();
		$user->getMeal($id);
		$user->delFromDB();
	}
//-----------------------------------------

}
 ?>
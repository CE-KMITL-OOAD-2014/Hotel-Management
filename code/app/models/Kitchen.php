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
		if(UserRepository::isExist($id)){
			$this->getStaff($id);

			$idTmp = StaffRequestRepository::getID($id);
			$this->setMealId(StaffRequestRepository::getRequestID($idTmp));
		}
		else{
			
		}
	}
//-----------------------------------------
// Add Meal
	public function addMeal($data){

		$mealId = MealRepository::newMeal();
		MealRepository::setName($mealId,$data['name']);
		MealRepository::setPrice($mealId,$data['price']);
		MealRepository::setDesc($mealId,$data['desc']);
	}
//-----------------------------------------


	public function acceptOrder($orderID){
		$reqTmp = new Requests();
		$reqTmp->getRequest($orderID);
		$reqTmp->setState(1);
		$reqTmp->saveToDB();

		//$this->setMealId($orderID);
		//$this->saveToDB();
	}

//-----------------------------------------
// Add new User 
	public function editMeal($data){
		$meal =new Meal();
		$meal->getMeal($data['mealID']);
		$meal->setName($data['name']);
		$meal->setPrice($data['price']);
		$meal->setDesc($data['desc']);
		$meal->saveToDB();
	}

//-----------------------------------------
// Add new User 
	public function deleteMeal($id){
		$user =new Meal();
		$user->getMeal($id);
		$user->delFromDB();
	}
//-----------------------------------------

}
 ?>
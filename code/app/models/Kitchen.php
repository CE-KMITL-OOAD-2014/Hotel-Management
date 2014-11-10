<?php 
/**
* 
*/
class Kitchen extends Staff
{
	function __construct()
	{
		parent::__construct();
	}

//-----------------------------------------
// Get Kitchen
	public static function getKitchen($id){
		if(UserRepository::isExist($id)){
			$kitchenObj = new Kitchen();
			$kitchenObj->setId($id);
			$kitchenObj->setUsername(UserRepository::getUsername($id));
			$kitchenObj->setPassword(UserRepository::getPassword($id));
			$kitchenObj->setRole(UserRepository::getRole($id));
			return $kitchenObj;
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
}
 ?>
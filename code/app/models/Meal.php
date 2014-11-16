<?php 
class Meal {
	private $id;
	private $name;
	private $pic;
	private $price;
	private $desc;

	public function __construct(){
	 	$id=NULL;
	 	$name=NULL;
	 	$pic=NULL;
	 	$price=NULL;
	 	$desc=NULL;
	}

//-----------------------------------------
// Get

	public function getMeal($id){
		$mealRepository = new MealRepository();
		if($mealRepository->isExist($id)){
			$this->setId($id);
			$this->setName($mealRepository->getName($id));
			$this->setPic($mealRepository->getPic($id));
			$this->setPrice($mealRepository->getPrice($id));
			$this->setDesc($mealRepository->getDesc($id));
		}
		else{
			
		}
	}

//-----------------------------------------
// save
	public function saveToDB(){
		$mealRepository = new MealRepository();
		$mealRepository->setName($this->getID(), $this->getName());
		$mealRepository->setPic($this->getID(), $this->getPic());
		$mealRepository->setPrice($this->getID(), $this->getPrice());
		$mealRepository->setDesc($this->getID(), $this->getDesc());
	}
//-----------------------------------------

	public function getId(){
		return $this->id;
	}
	public function getName(){
		return $this->name;
	}
	public function getPic(){
		return $this->pic;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getDesc(){
		return $this->desc;
	}

	public function setId($data){
		$this->id=$data;
	}
	public function setName($data){
		$this->name=$data;
	}
	public function setPic($data){
		$this->pic=$data;
	}
	public function setPrice($data){
		$this->price=$data;
	}
	public function setDesc($data){
		$this->desc=$data;
	}

//-----------------------------------------

		public function delFromDB(){
			$mealRepository = new MealRepository();
			if($mealRepository->isExist($this->getId())){
				$mealRepository->del($this->getId());
			}
			else {
			}
		}
//-----------------------------------------


}
 ?>
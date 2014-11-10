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

	public static function getMeal($id){
		if(MealRepository::isExist($id)){
			$obj = new Meal();
			$obj->setId($id);
			$obj->setName(MealRepository::getName($id));
			$obj->setPic(MealRepository::getPic($id));
			$obj->setPrice(MealRepository::getPrice($id));
			$obj->setDesc(MealRepository::getDesc($id));

			return $obj;
		}
		else{
			
		}
	}

//-----------------------------------------
// save
	public function saveToDB(){
		//parent::saveToDB();
		MealRepository::setName($this->getID(), $this->getName());
		MealRepository::setPic($this->getID(), $this->getPic());
		MealRepository::setPrice($this->getID(), $this->getPrice());
		MealRepository::setDesc($this->getID(), $this->getDesc());
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


}
 ?>
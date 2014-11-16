<?php 
class Customer {
	private $id;
	private $billNumber;
	private $name;
	private $surname;
	private $nationalID;
	private $detail;
	private $state;

//-----------------------------------------
//Constructor

	public function __construct(){
	 	$id = NULL;
	 	$billNumber = NULL;
	 	$checkin = NULL;
	 	$checkout = NULL;
	 	$name = NULL;
	 	$surname = NULL;
	 	$nationalID = NULL;
	 	$detail = NULL;
	 	$state = NULL;
	}

//-----------------------------------------
// get set function

	public function getId(){
		return $this->id;
	}
	public function getBillNumber(){
		return $this->billNumber;
	}
	public function getName(){
		return $this->name;
	}
	public function getSurname(){
		return $this->surname;
	}
	public function getNationalID(){
		return $this->nationalID;
	}
	public function getDetail(){
		return $this->detail;
	}
	public function getState(){
		return $this->state;
	}


	//- - - - - - - - - - - - - - - - - -

	public function setId($data){
		$this->id=$data;
	}
	public function setBillNumber($data){
		$this->billNumber=$data;
	}
	public function setName($data){
		$this->name=$data;
	}
	public function setSurname($data){
		$this->surname=$data;
	}
	public function setNationalID($data){
		$this->nationalID=$data;
	}
	public function setDetail($data){
		$this->detail=$data;
	}
	public function setState($data){
		$this->state=$data;
	}

//-----------------------------------------
// get customer

	public function getCustomer($id){
		$customerRepository = new CustomerRepository();
		if($customerRepository->isExist($id)){
			$this->setId($id);
	 		$this->setbillNumber($customerRepository->getBillNumber($id));
	 		$this->setName($customerRepository->getName($id));
	 		$this->setSurname($customerRepository->getSurname($id));
	 		$this->setNationalID($customerRepository->getNationalID($id));
	 		$this->setDetail($customerRepository->getDetail($id));
	 		$this->setState($customerRepository->getState($id));
		}
		else {
			return NULL;
		}
	}

//-----------------------------------------
// save Customer
	public function setCustomer(){
		$customerRepository = new CustomerRepository();
		if($customerRepository->isExist($this->getId())){
 			$customerRepository->setBillNumber($this->getBillNumber());
 			$customerRepository->setName($this->getName());
 			$customerRepository->setSurname($this->getSurname());
 			$customerRepository->setNationalID($this->getNationalID());
 			$customerRepository->setDetail($this->getDetail());
 			$customerRepository->setState($this->getState());
		}
		else {
		}
	}

}
?>
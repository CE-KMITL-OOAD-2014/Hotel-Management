<?php 
class Customer {
	private $id;
	private $customerBillingID;
	private $name;
	private $surename;
	private $nationalID;
	private $detail;
	private $state;

//-----------------------------------------
//Constructor

	public function __construct(){
	 	$id = NULL;
	 	$customerBillingID = NULL;
	 	$checkin = NULL;
	 	$checkout = NULL;
	 	$name = NULL;
	 	$surename = NULL;
	 	$nationalID = NULL;
	 	$detail = NULL;
	 	$state = NULL;
	}

//-----------------------------------------
// get set function

	public function getId(){
		return $this->id;
	}
	public function getCustomerBillingID(){
		return $this->customerBillingID;
	}
	public function getName(){
		return $this->name;
	}
	public function getSurename(){
		return $this->surename;
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
	public function setCustomerBillingID($data){
		$this->customerBillingID=$data;
	}
	public function setName($data){
		$this->name=$data;
	}
	public function setSurename($data){
		$this->surename=$data;
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

	public static function getCustomer($id){
		if(CustomerRepository::isExist($id)){
			$obj = new Customer();
			$obj->setId($id);
	 		$obj->setCustomerBillingID(CustomerRepository::getCustomerBillingID());
	 		$obj->setName(CustomerRepository::getName());
	 		$obj->setSurename(CustomerRepository::getSurename());
	 		$obj->setNationalID(CustomerRepository::getNationalID());
	 		$obj->setDetail(CustomerRepository::getDetail());
	 		$obj->setState(CustomerRepository::getState());
			return $obj;
		}
		else {
			return NULL;
		}
	}

//-----------------------------------------
// save Customer
		public function setCustomer(){
			if(CustomerRepository::isExist($this->getId())){
	 			customerRepository::setCustomerBillingID($this->customerBillingID);
	 			customerRepository::setName($this->name);
	 			customerRepository::setSurename($this->surename);
	 			customerRepository::setNationalID($this->nationalID);
	 			customerRepository::setDetail($this->detail);
	 			customerRepository::setState($this->state);
			}
			else {
			}
		}

}
?>
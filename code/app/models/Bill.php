<?php 
class Bill{
	private $id;
	private $billNumber;
	private $type;
	private $detail;
	private $value;
	private $state;

	public function __construct(){
		$id = NULL;
		$billNumber = NULL;
		$type = NULL;
		$detail = NULL;
		$value = NULL;
		$state = NULL;
	}

	//-----------------------------------------------------
	/*
	Bill structure :
		type : 
			0 : Clean req bill
			1 : Food req bill
			2 : Consumed bill
			3 : Room damaged bill
		state :
			0 : not pay
			1 : paid

	*/
	public function getId(){
		return $this->id;
	}
	public function getBillNumber(){
		return $this->billNumber;
	}
	public function getType(){
		return $this->type;
	}
	public function getDetail(){
		return $this->detail;
	}
	public function getValue(){
		return $this->value;
	}
	public function getState(){
		return $this->state;
	}

	public function setId($data){
		$this->id = $data;
	}
	public function setBillNumber($data){
		$this->billNumber = $data;
	}
	public function setType($data){
		$this->type = $data;
	}
	public function setDetail($data){
		$this->detail = $data;
	}
	public function setValue($data){
		$this->value = $data;
	}
	public function setState($data){
		$this->state = $data;
	}

	//-----------------------------------------------------

	public function getBill($id){
		if(BillRepository::isExist($id)){
			$this->setId($id);
			$this->setBillNumber(BillRepository::getBillNumber());
			$this->setType(BillRepository::getType());
			$this->setDetail(BillRepository::getDetail());
			$this->setValue(BillRepository::getValue());
			$this->setState(BillRepository::getState());			
		}
	}

	//-----------------------------------------------------

	public function saveToDB(){
	 	BillRepository::setBillNumber($this->getId(), $this->getBillNumber());
	 	BillRepository::setType($this->getId(), $this->getType());
	 	BillRepository::setDetail($this->getId(), $this->getDetail());
	 	BillRepository::setValue($this->getId(), $this->getValue());
	 	BillRepository::setState($this->getId(), $this->getState());
	}
}
 ?>
<?php 
// user only for count customer to add to database
class CheckinTool
{
	private $billNumber;
	private $person;
	private $count;
	public function __construct()
	{
		$this->billNumber=NULL;
		$this->person=NULL;
		$this->count=0;
	}

	public function getBillNumber(){
		return $this->billNumber;
	}
	public function getPerson(){
		return $this->person;
	}
	public function getCount(){
		return $this->count;
	}


	public function setBillNumber($data){
		$this->billNumber=$data;
	}
	public function setPerson($data){
		$this->person=$data;
	}
	public function setCount($data){
		$this->count=$data;
	}
}
 ?>
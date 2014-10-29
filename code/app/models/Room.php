<?php 
/**
* 
*/
class Room extends Staff
{
	private $id;
	private $roomNumber;
	private $price;
	private $bed;
	private $roomType;
	private $avaialable;
	private $maintainancing;
	private $clean;

	function __construct()
	{
		parent::__construct();
		$this->id=NULL;
		$this->roomNumber=NULL;
		$this->price=NULL;
		$this->bed=NULL;
		$this->roomType=NULL;
		$this->avaialable=NULL;
		$this->maintainancing=NULL;
		$this->clean=NULL;
	}

//-----------------------------------------
//get set method
	 public function getId(){
	 	return $this->id;
	 }
	 public function getRoomNumber(){
	 	return $this->roomNumber;
	 }
	 public function getPrice(){
	 	return $this->price;
	 }
	 public function getBed(){
	 	return $this->bed;
	 }
	 public function getRoomType(){
	 	return $this->roomType;
	 }
	 public function getAvaialable(){
	 	return $this->avaialable;
	 }
	 public function getMaintainancing(){
	 	return $this->maintainancing;
	 }
	 public function getClean(){
	 	return $this->clean;
	 }


	 public function setId($tmp){
	 	$this->id=$tmp;
	 }
	 public function setRoomNumber($tmp){
	 	$this->roomNumber=$tmp;
	 }
	 public function setPrice($tmp){
	 	$this->price=$tmp;
	 }
	 public function setBed($tmp){
	 	$this->bed=$tmp;
	 }
	 public function setRoomType($tmp){
	 	$this->roomType=$tmp;
	 }
	 public function setAvaialable($tmp){
	 	$this->avaialable=$tmp;
	 }
	 public function setMaintainancing($tmp){
	 	$this->maintainancing=$tmp;
	 }
	 public function setClean($tmp){
	 	$this->clean=$tmp;
	 }

//-----------------------------------------
}
 ?>
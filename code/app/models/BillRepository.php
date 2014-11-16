<?php 
class BillRepository{
	public function isExist($id){
		$tmp = BillDB::find($id);
		if($tmp!=NULL){
			return true;
		}
		else {
			return false;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	// this will return as array of id of all bills which have the given billNumber(and it in unpaid state(0))

	public function getID($billNumber){
		$tmp = BillDB::where('billNumber','=',$billNumber)->get();
		if(count($tmp)!=0){
			for($i=0;$i<count($tmp);$i++){
				$idSet[$i] = $tmp[$i]->id;
			}
			return $idSet;
		}
		else {
			return NULL;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

	public function newBill(){
		$tmp = new BillDB();
		$tmp->save();
		return $tmp->id;
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	public function getTime($id){
		$tmp = BillDB::find($id);
		if($tmp!=NULL){
			return $tmp->update_at;
		}
		else {
			return NULL;
		}
	}

	public function getBillNumber($id){
		$tmp = BillDB::find($id);
		if($tmp!=NULL){
			return $tmp->billNumber;
		}
		else {
			return NULL;
		}
	}
	public function getType($id){
		$tmp = BillDB::find($id);
		if($tmp!=NULL){
			return $tmp->type;
		}
		else {
			return NULL;
		}
	}
	public function getDetail($id){
		$tmp = BillDB::find($id);
		if($tmp!=NULL){
			return $tmp->detail;
		}
		else {
			return NULL;
		}
	}
	public function getValue($id){
		$tmp = BillDB::find($id);
		if($tmp!=NULL){
			return $tmp->value;
		}
		else {
			return NULL;
		}
	}
	public function getState($id){
		$tmp = BillDB::find($id);
		if($tmp!=NULL){
			return $tmp->state;
		}
		else {
			return NULL;
		}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

	public function setBillNumber($id, $data){
		$tmp = BillDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->billNumber=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setType($id, $data){
		$tmp = BillDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->type=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setDetail($id, $data){
		$tmp = BillDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->detail=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setValue($id, $data){
		$tmp = BillDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->value=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}
	public function setState($id, $data){
		$tmp = BillDB::find($id);
	 	if($tmp!=NULL){
		 	$tmp->state=$data;
		 	$tmp->save();
	 	}
	 	else{}
	}

	//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -
} 
 ?>
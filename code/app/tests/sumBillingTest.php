<?php 

class sumBillingTest extends TestCase { 

    public function checkRoomStatus()
    {
        $recept = new Receptionist();
        
        $allBill=array();
        for($i=0;$i<10;$i++){
	        $bill = Mockery::mock('Billing');
	        if($i<7){
	        	$bill->shouldReceive('getBillOwnerRoom')->andReturn(101);
	        }
	        else {
	        	$bill->shouldReceive('getBillOwnerRoom')->andReturn(0);
	        }
            $bill->shouldReceive('getBillValue')->andReturn(90);
            $bill->shouldReceive('isExpired')->andReturn(false);
	        $allBill[$i]=$Bill;
        }
        $this->assertEqual($recept->sumbill(101,$allBill),7*90);
    }
}
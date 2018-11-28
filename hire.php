<?php
    require_once "phpscripts/connection.php";

include "templates/header.php";
include "templates/testnav.php";
/*
* hire schedule
*/
if(isset($_GET['schedule_id'])){
	
	
	$schId = $_GET['schedule_id'];
	$status = 'awaiting'; // vs confirmed vs completed vs cancelled
	
	try {
		$sqlinsert = 'INSERT INTO hiring (id, schedule_id, hirestatus) 
					VALUES ('$id','$schedule_id','$hirestatus')';
		$stm = $db->prepare($sqlinsert);
		$stm->execute(array(':user'=>$_SESSION['id'], ':schedule'=>$schId, ':status'=>$status));
			
		if($stm->rowCount()==1){
			echo "<script type=\"text/javascript\">
						swal({
							title: \"Congratulations $username!\",
							text: \"Hiring Completed Successfully\",
							type: 'success',
							timer: 3000,
							showConfirmButton: false
						});
						setTimeout(function(){
							window.location.href = 'manageschedules.php';
						 }, 2000);
					</script>";
		}			
	} catch (PDOException $ex) {
		echo "An error occured: ".$ex->getMessage();
	}
} else {
	//can't get id of schedule
	echo "<script type=\"text/javascript\">
				swal({
				title: \"No Schedule Selected!\",
				text: \"Please Select a schedule and continue...\",
				type: 'error',
				timer: 3000,
				showConfirmButton: false
			 });
			 setTimeout(function(){
				window.location.href = 'booking.php';
			 }, 2000);
		 </script>";
}

?>
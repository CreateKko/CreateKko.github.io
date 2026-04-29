<? php
	//Input data
	$age = 20;
	$is_student = true;
	
	//Determine the base price based on age
	if($age >= 18){
		$base_price = 100;
	} elseif ($age >= 13){
		$base_price = 50;
	} else {
		$base_price = 0;
	}
	
	//Apply student discount if applicable
	if($is_student){
		$discount = $base_price *0.20;
		$final_price = $base_price - $discount;
	} else {
		$final_price = $base_price;
	}
	
	//Display
	echo "The registration fee for the attendee: $" .number_format($final_price, 2);
	
?> 
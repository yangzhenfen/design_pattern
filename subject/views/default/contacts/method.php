<?php
	echo ' <div class="row"><label> Info: </label>
			<select name="type['.$view['counter'].'][methodtype][]">';
			
	$options = array(
		'' =>'-Choose One-',
		'organization'=>'Organization',
		'title'=>'Title',
		'email'=>'Email',
		'website'=>'Website',
		'address'=>'Compete Address',
		'telephone'=>'Telephone',
		'mobilephone'=>'Mobile Phone',
		'socialnetwork'=>'Social Network URL',
		'im'=>'IM Name'
	);
	
	foreach ($options as $value=>$description) {
		echo ' <option value="'.$value.'" ';
		if (is_object($view['method']) && $view['method']->type == $value) echo 'selected=selected';
		echo '>'. $description . '</option>';
	}
	
	echo ' </select>';
	
	echo ' <span class="methodboxvaluebox ';
	
	$method_value = isset($view['method'])?$view['method']->value:'';
	if ($method_value) {
		echo 'hasvalue';
	}
	
	echo '"> <input name="type[' . $view['counter'] . '][methodvalue][]" value="' . $method_value . '" />';
	
	if ($method_value) {
		echo ' <a href="#" class="deletecontactmethod"> Delete this Info </a>';
	} else {
		echo ' <a href="#" class="addcontactmethod"> Add More Info </a>';
	}
	
	echo ' </span> </div>';
			
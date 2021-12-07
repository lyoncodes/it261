<?php
function makeFormLabels($form){
	foreach ($form as $field => $val) {
		$val = new FormEl();
		$val->value = str_replace('_', ' ', $field);
		
		if ($field == 'email'){
			$val->type = 'email';
		} elseif ($field == 'password_pre' || $field == 'password_confirm') {
			$val->type = 'password';
		} else { $val->type = 'text'; }
		
		$outStr = '<label for="'.$field.'">'.$val->value.'</label> <input type="'.$val->type.'" name="'.$field.'"';
		if(isset($_POST[$field])) {
			$outStr .= ' value="'.htmlspecialchars($_POST[$field]).'">';
		} else {
			$outStr .= ' value="">';
		}
		echo $outStr;
	}
}
?>

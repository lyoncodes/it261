<?php

function makeDropDown($select_data, $list){
	$outStr = '<select name="dropdown">';
	foreach ($list as $items => $select) {
		$outStr .= '
			<option value="'.$select.'">'.$select.'</option>
		';
	}
	$outStr .= '</select>';
	echo $outStr;
}

function makeList($type, $list){
	$outStr = '<ul>';
	foreach ($list as $items => $li) {
		$outStr .= '
			<li>
				<input type="'.$type.'" name="'.$type.'_list[]" value="'.$li.'">
				'.$li.'
			</li>
		';
	};
	$outStr .= '</ul>';
	echo $outStr;
}

function makeFormLabels($form) {
	foreach ($form as $field => $val) {
		$el = new FormEl();
		$el->value = str_replace('_', ' ', $field);
		$el->type = $val;

		if ($field == 'checkbox_list') {
			$el->options = [
				"Vending",
				"Distribution",
				"Licensing"
			];
			makeList($el->type, $el->options);
		}

		if ($field == 'select_list') {
			$el->options = [
				"Enterprise",
				"Small Business",
				"Personal / Creative"
			];
			makeDropDown($el->type, $el->options);
		}

		if (strpos($field, '_list') != true) {
			$outStr = '<label for="'.$field.'">'.$el->value.'</label> <input type="'.$el->type.'" name='.$field.'';
			
			if(isset($_POST[$field])) {
				$outStr .= ' value="'.htmlspecialchars($_POST[$field]).'">';
			} else {
				$outStr .= ' value="">';
			}
			echo $outStr;
		} 
	}
}
?>

<?php function class_formatMoney2($value)
{
	setlocale(LC_MONETARY, 'en_US');
	$results = '<div class="w-100 p-3" style="text-align: left;">';
	$results .= money_format('%i', $value);
	$results .= '</div>';
	return $results;
}
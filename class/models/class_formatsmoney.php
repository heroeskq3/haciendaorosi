<?php function class_formatMoney($value)
{
	setlocale(LC_MONETARY, 'en_US');
	$results = '<div class="w-100 p-3" style="text-align: right;">';
	$results .= money_format('%i', $value);
	$results .= '</div>';
	return $results;
}
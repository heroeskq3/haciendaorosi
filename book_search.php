<?php
//Qty
$array_adults = array();
for ($i = 1; $i < 6; ++$i) {
    $array_adults[] = array('label' => $i, 'value' => $i, 'selected' => $Adults);
}

//Qty
$array_childs = array();
for ($i = 0; $i < 6; ++$i) {
    $array_childs[] = array('label' => $i, 'value' => $i, 'selected' => $Childs);
}

$formFields = array(
    'Date'       => array('inputType' => 'date', 'required' => true, 'position' => 5, 'name' => 'Date', 'value' => $Date),
    'Adults'     => array('inputType' => 'select', 'required' => true, 'position' => 5, 'name' => 'Adults', 'value' => $array_adults),
    'Childs'     => array('inputType' => 'select', 'required' => true, 'position' => 5, 'name' => 'Childs', 'value' => $array_childs),
    'Promo Code' => array('inputType' => 'text', 'required' => false, 'position' => 5, 'name' => 'PromoCode', 'value' => $PromoCode),
    'Search'     => array('inputType' => 'submit', 'required' => true, 'position' => 5, 'name' => 'Search', 'value' => null),
);

// define buttons for form
$formButtons = null;

//set params for form
$formParams = array(
    'name'    => 'Check Availability',
    'action'  => '',
    'method'  => 'post',
    'enctype' => null,
);

class_formGenerator2($formParams, $formFields, $formButtons);

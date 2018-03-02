<?php

$bookpackageinfo     = class_bookPackagesInfo($PackageId);
$row_bookpackageinfo = $bookpackageinfo['response'][0];

if ($PromoCode) {
    $PromoCode = "Promo Code: " . $PromoCode;
} else {
    $PromoCode = null;
}

$formFields = array(
    'Check-in Date'  => array('inputType' => 'field', 'required' => false, 'position' => 0, 'name' => 'DateStart', 'value' => $Date . " 08:00"),
    'Check-out Date' => array('inputType' => 'field', 'required' => false, 'position' => 0, 'name' => 'DateEnd', 'value' => $Date . " 19:00"),
    'Days'           => array('inputType' => 'field', 'required' => false, 'position' => 0, 'name' => 'Days', 'value' => "1"),
    'Details'        => array('inputType' => 'field', 'required' => false, 'position' => 0, 'name' => 'Details', 'value' => $row_bookpackageinfo['Details'] . $PromoCode),
    'Rate'           => array('inputType' => 'field', 'required' => false, 'position' => 0, 'name' => 'Rate', 'value' => "Non Refundable Rate"),

    'Guests'         => array('inputType' => 'field', 'required' => false, 'position' => 1, 'name' => 'Guest', 'value' => "Adults: $Adults Childs: $Childs"),
    'Package'        => array('inputType' => 'field', 'required' => false, 'position' => 1, 'name' => 'Room', 'value' => $row_bookpackageinfo['Name']),    
    'SubTotal'       => array('inputType' => 'field', 'required' => false, 'position' => 1, 'name' => 'SubTotal', 'value' => class_formatMoney2($row_bookpackageinfo['Price'])),
    'Discount'       => array('inputType' => 'field', 'required' => false, 'position' => 1, 'name' => 'Discount', 'value' => class_formatMoney2(0)),
    'Sales Taxes'    => array('inputType' => 'field', 'required' => false, 'position' => 1, 'name' => 'Taxes', 'value' => class_formatMoney2(0)),
    'Servies Taxes'  => array('inputType' => 'field', 'required' => false, 'position' => 1, 'name' => 'Taxes', 'value' => class_formatMoney2(0)),
    'Total'          => array('inputType' => 'field', 'required' => false, 'position' => 1, 'name' => 'Total', 'value' => class_formatMoney2($row_bookpackageinfo['Price'])),
);

// define buttons for form
$formButtons = null;

//set params for form
$formParams = array(
    'name'    => '',
    'action'  => null,
    'method'  => null,
    'enctype' => null,
);
?>
<h2>Reservation Summary</h2>
<div class="well well-lg">
<p><?php echo class_formGenerator2($formParams, $formFields, $formButtons); ?></p>
</div>

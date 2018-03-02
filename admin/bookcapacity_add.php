<?php
if ($form_add) {
    class_bookPackagesAdd($SectorId, $Value, $StartDate, $EndDate, $Status);
    header('Location: bookpackages_list.php');
    die();
}

//Status list
$array_status   = array();
$array_status[] = array('label' => 'Active', 'value' => '1', 'selected' => $Status);
$array_status[] = array('label' => 'Inactive', 'value' => '0', 'selected' => $Status);

//Rows per Page list
$array_rowsperpage = array();
for ($i = 1; $i < 51; ++$i) {
    $array_rowsperpage[] = array('label' => $i, 'value' => $i, 'selected' => $Order);
}

//SI / NO
$array_taxsales   = array();
$array_taxsales[] = array('label' => 'Si', 'value' => '1', 'selected' => null);
$array_taxsales[] = array('label' => 'No', 'value' => '0', 'selected' => null);

//SI / NO
$array_taxservices   = array();
$array_taxservices[] = array('label' => 'Si', 'value' => '1', 'selected' => null);
$array_taxservices[] = array('label' => 'No', 'value' => '0', 'selected' => null);


//sector
$array_sector = array();
for ($i = 1; $i < 51; ++$i) {
    $array_sector[] = array('label' => 'Sector ' . $i, 'value' => $i, 'selected' => $Order);
}

//Form Generator
$formFields = array(
    'form_add'    => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'form_add', 'value' => 1),
    'PackCode'    => array('inputType' => 'text', 'required' => true, 'position' => 1, 'name' => 'PackCode', 'value' => $PackCode),
    'Name'        => array('inputType' => 'text', 'required' => true, 'position' => 1, 'name' => 'Name', 'value' => $Name),
    'Price'       => array('inputType' => 'text', 'required' => true, 'position' => 1, 'name' => 'Price', 'value' => $Details),
    'Tax Sales'          => array('inputType' => 'select', 'required' => false, 'position' => 1, 'name' => 'TaxSales', 'value' => $array_taxsales),
    'Tax Services'          => array('inputType' => 'select', 'required' => false, 'position' => 1, 'name' => 'TaxServices', 'value' => $array_taxservices),
    'StartDate' => array('inputType' => 'date', 'required' => false, 'position' => 1, 'name' => 'StartDate', 'value' => $StartDate),
    'EndDate'  => array('inputType' => 'date', 'required' => false, 'position' => 1, 'name' => 'EndDate', 'value' => $EndDate),
    'Sector'      => array('inputType' => 'select', 'required' => false, 'position' => 1, 'name' => 'SectorId', 'value' => $array_sector),
    'Status'      => array('inputType' => 'select', 'required' => true, 'position' => 1, 'name' => 'Status', 'value' => $array_status),
);

// define buttons for form
$formButtons = array(
    'Submit' => array('buttonType' => 'submit', 'class' => null, 'name' => null, 'value' => null, 'action' => null),
    'Back'   => array('buttonType' => 'cancel', 'class' => null, 'name' => null, 'value' => null, 'action' => null),
);

//set params for form
$formParams = array(
    'name'    => 'Add New',
    'action'  => '',
    'method'  => 'post',
    'enctype' => '',
);

class_formGenerator($formParams, $formFields, $formButtons);
?>

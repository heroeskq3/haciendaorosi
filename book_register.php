<?php
if ($form_add) {
    class_bookCustomersAdd($Prefix, $FirstName, $LastName, $Email, $Phone, $Country, $MiddleName, $CreditTime, $CreditLimit, $Balance, $LastVisit, $LastBook, $TypeId, $Status);
    class_bookReservationsAdd($SectorsId, $CustomersId, $PackagesId, $PromosId, $Adults, $Childs, $PaymentAuth, $TaxServices, $TaxSales, $SubTotal, $Total, $BillId, $Status);
    header('Location: book_confirmation.php');
    die();
}

//Prefix
$array_prefix   = array();
$array_prefix[] = array('label' => 'Mr.', 'value' => 'Mr', 'selected' => $Prefix);
$array_prefix[] = array('label' => 'Ms.', 'value' => 'Ms.', 'selected' => $Prefix);
$array_prefix[] = array('label' => 'Mrs.', 'value' => 'Mrs.', 'selected' => $Prefix);
$array_prefix[] = array('label' => 'Miss.', 'value' => 'Miss.', 'selected' => $Prefix);

//Country list
$countrylist       = class_countryList();
$array_countrylist = array();
foreach ($countrylist['response'] as $row_countrylist) {
    $array_countrylist[] = array('label' => $row_countrylist['Name'], 'value' => $row_countrylist['Prefix'], 'selected' => $Country);
}

$formFields = array(
    'form_add'    => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'form_add', 'value' => 1),

    //fields
    'First Name'  => array('inputType' => 'text', 'required' => true, 'position' => 2, 'name' => 'FirstName', 'value' => $FirstName),
    'Last Name'   => array('inputType' => 'text', 'required' => true, 'position' => 2, 'name' => 'LastName', 'value' => $LastName),
    'E-mail'      => array('inputType' => 'email', 'required' => true, 'position' => 1, 'name' => 'Email', 'value' => $Email),

    'Prefix'      => array('inputType' => 'select', 'required' => true, 'position' => 3, 'name' => 'Prefix', 'value' => $array_prefix),
    'Phone'       => array('inputType' => 'tel', 'required' => true, 'position' => 3, 'name' => 'Phone', 'value' => $Phone),
    'Country'     => array('inputType' => 'select', 'required' => true, 'position' => 3, 'name' => 'Country', 'value' => $array_countrylist),

    //inactive
    'MiddleName'  => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'MiddleName', 'value' => $MiddleName),
    'CreditTime'  => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'CreditTime', 'value' => $CreditTime),
    'CreditLimit' => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'CreditLimit', 'value' => $CreditLimit),
    'Balance'     => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'Balance', 'value' => $Balance),
    'LastVisit'   => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'LastVisit', 'value' => $LastVisit),
    'LastBook'    => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'LastBook', 'value' => $LastBook),
    'TypeId'      => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'TypeId', 'value' => $TypeId),
    'Status'      => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'Status', 'value' => 1),

    'PackageId'   => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'PackageId', 'value' => $PackageId),
    'Date'        => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'Date', 'value' => $Date),
    'Adults'      => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'Adults', 'value' => $Adults),
    'Childs'      => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'Childs', 'value' => $Childs),
    'PromoCode'   => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'PromoCode', 'value' => $PromoCode),
);

// define buttons for form
$formButtons = array(
    'Back'     => array('buttonType' => 'link', 'class' => 'btn btn-submit', 'name' => 'button', 'value' => 'back', 'action' => 'book_availability.php'),
    'Book Now' => array('buttonType' => 'submit', 'class' => 'btn btn-submit', 'name' => 'button', 'value' => 'next', 'action' => null),
);

//set params for form
$formParams = array(
    'name'    => 'Guest Information',
    'action'  => '',
    'method'  => 'post',
    'enctype' => null,
);

class_formGenerator2($formParams, $formFields, $formButtons);

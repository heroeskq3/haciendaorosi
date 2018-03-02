<?php
//Section Parameters
$section_tittle      = "Booking";
$section_description = null;
$section_restrict    = 1;
$section_navbar      = 1;
$section_sidebar     = 1;
$section_searchbar   = 0;
$section_style       = 1;
$section_homedir     = '../';
?>
<?php require_once 'header.php';?>
<?php
if ($form_update) {
    class_bookReservesUpdate($Id, $SectorsId, $CustomersId, $PackagesId, $PromosId, $Adults, $Childs, $PaymentAuth, $TaxServices, $TaxSales, $SubTotal, $Total, $BillId, $Status);
    header('Location: book_reserves.php');
    die();
}

//Packages Info
$bookreservesinfo     = class_bookReservesInfo($Id);
$row_bookreservesinfo = $bookreservesinfo['response'][0];

    //echo "<pre>";
    //print_r($array);

//sector
$array_sector = array();
for ($i = 1; $i < 51; ++$i) {
    $array_sector[] = array('label' => 'Sector ' . $i, 'value' => $i, 'selected' => $row_bookreservesinfo['SectorsId']);
}

//SI / NO
$array_IV   = array();
$array_IV[] = array('label' => 'Si', 'value' => '1', 'selected' => $row_bookreservesinfo['TaxSales']);
$array_IV[] = array('label' => 'No', 'value' => '0', 'selected' => $row_bookreservesinfo['TaxSales']);

//SI / NO
$array_IS   = array();
$array_IS[] = array('label' => 'Si', 'value' => '1', 'selected' => $row_bookreservesinfo['TaxServices']);
$array_IS[] = array('label' => 'No', 'value' => '0', 'selected' => $row_bookreservesinfo['TaxServices']);

//Status list
$array_status   = array();
$array_status[] = array('label' => 'Active', 'value' => '1', 'selected' => $row_bookreservesinfo['Status']);
$array_status[] = array('label' => 'Inactive', 'value' => '0', 'selected' => $row_bookreservesinfo['Status']);

//customers list
$bookcustomerslist     = class_bookCustomersList();
$array_customers   = array();
if($bookcustomerslist['rows']){
    foreach ($bookcustomerslist['response'] as $row_bookcustomerslist) {
        $array_customers[] = array('label' => $row_bookcustomerslist['Id'], 'value' => $row_bookcustomerslist['Id'], 'selected' => $row_bookreservesinfo['CustomersId']);
    }
}

//packages list
$bookpackageslist     = class_bookPackagesList();
$array_packages   = array();
if($bookpackageslist['rows']){
    foreach ($bookpackageslist['response'] as $row_bookpackageslist) {
        $array_packages[] = array('label' => $row_bookpackageslist['Id'], 'value' => $row_bookpackageslist['Id'], 'selected' => $row_bookreservesinfo['PackagesId']);
    }
}

//promos list
$bookpromoslist     = class_bookPromosList();
$array_promos   = array();
if($bookpromoslist['rows']){
    foreach ($bookpromoslist['response'] as $row_bookpromoslist) {
        $array_promos[] = array('label' => $row_bookpromoslist['Id'], 'value' => $row_bookpromoslist['Id'], 'selected' => $row_bookreservesinfo['PromosId']);
    }
}

//Qty
$array_adults = array();
for ($i = 1; $i < 6; ++$i) {
    $array_adults[] = array('label' => $i, 'value' => $i, 'selected' => $row_bookreservesinfo['Adults']);
}

//Qty
$array_childs = array();
for ($i = 0; $i < 6; ++$i) {
    $array_childs[] = array('label' => $i, 'value' => $i, 'selected' => $row_bookreservesinfo['Childs']);
}

$formFields = array(
    'form_update' => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'form_update', 'value' => 1),

    'Sector'      => array('inputType' => 'select', 'required' => false, 'position' => 1, 'name' => 'SectorsId', 'value' => $array_sector),
    'CustomersId' => array('inputType' => 'select', 'required' => false, 'position' => 1, 'name' => 'CustomersId', 'value' => $array_customers),
    'PackagesId'  => array('inputType' => 'select', 'required' => false, 'position' => 1, 'name' => 'PackagesId', 'value' => $array_packages),
    'PromosId'    => array('inputType' => 'select', 'required' => false, 'position' => 1, 'name' => 'PromosId', 'value' => $array_promos),
    'Adults'      => array('inputType' => 'select', 'required' => false, 'position' => 1, 'name' => 'Adults', 'value' => $array_adults),
    'Childs'      => array('inputType' => 'select', 'required' => false, 'position' => 1, 'name' => 'Childs', 'value' => $array_childs),
    'PaymentAuth' => array('inputType' => 'text', 'required' => false, 'position' => 1, 'name' => 'PaymentAuth', 'value' => $row_bookreservesinfo['PaymentAuth']),
    'SubTotal'    => array('inputType' => 'text', 'required' => false, 'position' => 1, 'name' => 'SubTotal', 'value' => $row_bookreservesinfo['SubTotal']),
    'TaxServices' => array('inputType' => 'select', 'required' => false, 'position' => 1, 'name' => 'TaxServices', 'value' => $array_IS),
    'TaxSales'    => array('inputType' => 'select', 'required' => false, 'position' => 1, 'name' => 'TaxSales', 'value' => $array_IV),
    'Total'       => array('inputType' => 'text', 'required' => false, 'position' => 1, 'name' => 'Total', 'value' => $row_bookreservesinfo['Total']),
    'BillId'      => array('inputType' => 'text', 'required' => false, 'position' => 1, 'name' => 'BillId', 'value' => $row_bookreservesinfo['BillId']),
    'Status'      => array('inputType' => 'select', 'required' => false, 'position' => 1, 'name' => 'Status', 'value' => $array_status),
);

// define buttons for form
$formButtons = array(
    'Submit' => array('buttonType' => 'submit', 'class' => null, 'name' => null, 'value' => null, 'action' => null),
    'Back'   => array('buttonType' => 'link', 'class' => null, 'name' => null, 'value' => null, 'action' => 'book_reserves.php'),
);

//set params for form
$formParams = array(
    'name'    => 'Update',
    'action'  => '',
    'method'  => 'post',
    'enctype' => 'multipart/form-data',
);

class_formGenerator($formParams, $formFields, $formButtons);
?>
<?php require_once 'footer.php';

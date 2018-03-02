<?php
//book packages list
$bookpackageslist = class_bookPackagesList();

$results = array();
if ($bookpackageslist['rows']) {
    foreach ($bookpackageslist['response'] as $row_array) {

        //childs
        $array_childs = null;

        $results[] = array(
            //Define custom Patern Table Alias Keys => Values
            'Name'      => $row_array['Name'],
            'Price'     => class_formatMoney($row_array['Price']),
            'Select'    => class_formButtonsType('submit', 'btn btn-submit', 'PackageId', $row_array['Id'], null, 'Select'),

            //Define Index, Status, Childs
            'index'     => $row_array['Id'],
            'status'    => $row_array['Status'], //use = 1 or 0
            'childs'    => $array_childs, //define array
        );
    }
}

$table_array = $results;

$formFields = array(
    'Date'      => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'Date', 'value' => $Date),
    'Adults'    => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'Adults', 'value' => $Adults),
    'Childs'    => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'Childs', 'value' => $Childs),
    'PromoCode' => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'PromoCode', 'value' => $PromoCode),
);

//Table params
$table_params = array(
    'name'        => 'Showing results',
    'searchbar'   => null,
    'rowsbypage'  => 10, //0 = when childs
    'showactions' => false,
    'showmore'    => true,
    'checkbox'    => 0,
    'addnew'      => 0,
);

//set params for form
$formParams = array(
    'name'    => null,
    'action'  => 'book_summary.php',
    'method'  => 'post',
    'enctype' => null,
);

// define buttons for form
$formButtons = null;

//generate table list
class_tableGenerator($table_array, $table_params, $formParams, $formButtons, $formFields);

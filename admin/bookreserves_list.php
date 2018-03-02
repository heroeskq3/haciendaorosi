<?php
//Update users details item
if ($action == "add") {
    header('Location: book_reserves.php');
    die();
}

//Update users details item
if ($action == "update") {
    header('Location: bookreserves_update.php?Id=' . $Id);
    die();
}

//Delete users details item
if ($action == "delete") {
    class_bookReservesDelete($Id);
    header('Location: book_reserves.php');
    die();
}

function class_tableMainList()
{
    $array = class_bookReservesList();

    //echo "<pre>";
    //print_r($array);

    $results = array();
    if ($array['rows']) {
        foreach ($array['response'] as $row_array) {

            $results[] = array(
                //Define custom Patern Table Alias Keys => Values

                'DateAdd'        => $row_array['DateAdd'],
                //'SectorsId'   => $row_array['SectorsId'],
                //'CustomersId' => $row_array['CustomersId'],
                //'PackagesId'  => $row_array['PackagesId'],
                //'PromosId'    => $row_array['PromosId'],
                'Adults'      => $row_array['Adults'],
                'Childs'      => $row_array['Childs'],
                //'PaymentAuth' => $row_array['PaymentAuth'],
                //'SubTotal'    => $row_array['SubTotal'],
                'TaxServices' => class_infoSiNo($row_array['TaxSales']),
                'TaxSales'    => class_infoSiNo($row_array['TaxServices']),
                'Total'       => $row_array['Total'],
                //'BillId'      => $row_array['BillId'],
                'Status'      => class_statusInfo($row_array['Status']),

                //Define Index, Status, Childs
                'index'       => $row_array['Id'],
                'status'      => $row_array['Status'], //use = 1 or 0
                'childs'      => null, //define child array
            );
        }
    }

    return $results;
}

$table_array = class_tableMainList();

$table_params = array(
    'name'        => "List",
    'searchbar'   => true,
    'maxcols'     => 5,
    'rowsbypage'  => 10,
    'showactions' => true,
    'showmore'    => false,
    'checkbox'    => false,
    'addnew'      => 'book_reserves.php',
);

//set params for form
$formParams = null;

// define buttons for form
$formButtons = null;

$formFields = null;

//generate table list
class_tableGenerator($table_array, $table_params, $formParams, $formButtons, $formFields);

<?php
//Update users details item
if ($action == "add") {
    header('Location: bookpackages_add.php');
    die();
}

//Update users details item
if ($action == "update") {
    header('Location: bookpackages_update.php?Id=' . $Id);
    die();
}

//Delete users details item
if ($action == "delete") {
    class_bookPackagesDelete($Id);
    header('Location: bookpackages_list.php');
    die();
}

function class_tableMainList()
{
    $array = class_bookPackagesList();

    $results = array();
    if ($array['rows']) {
        foreach ($array['response'] as $row_array) {

            $results[] = array(
                //Define custom Patern Table Alias Keys => Values

                'Pack Code'    => $row_array['PackCode'],
                'Name'         => $row_array['Name'],
                'Price'        => $row_array['Price'],
                'Tax Sales'    => class_infoSiNo($row_array['TaxSales']),
                'Tax Services' => class_infoSiNo($row_array['TaxServices']),
                'Start Date'   => $row_array['StartDate'],
                'End Date'     => $row_array['EndDate'],
                'Sector'       => $row_array['SectorId'],
                'Status'       => class_statusInfo($row_array['Status']),

                //Define Index, Status, Childs
                'index'        => $row_array['Id'],
                'status'       => $row_array['Status'], //use = 1 or 0
                'childs'       => null, //define child array
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
    'addnew'      => 'bookpackages_add.php',
);

//set params for form
$formParams = null;

// define buttons for form
$formButtons = null;

$formFields = null;

//generate table list
class_tableGenerator($table_array, $table_params, $formParams, $formButtons, $formFields);

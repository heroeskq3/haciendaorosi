<?php
//Section Parameters
$section_tittle      = "Menu Manager";
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
    $menuupdate = class_menuUpdate($Id, $Name, $Description, $Url, $Icon, $MenuId, $Order, $Status);

    if ($MenuId) {
        header('Location: menulevel2.php?Id=' . $MenuId);
    } else {
        header('Location: menu_list.php');
    }

    die();
}
//Menu Info
$menuinfo     = class_menuInfo($Id);
$row_menuinfo = $menuinfo['response'][0]; //poner los info

//Menu Info 2
if ($row_menuinfo['MenuId']) {
    $menuinfo2    = class_menuInfo($row_menuinfo['MenuId']);
    $row_menuinfo2 = $menuinfo2['response'][0]; //poner los info
    $MenuId = $row_menuinfo2['MenuId'];
}else{
   $MenuId = null;
}

//Menu List
$menulist       = class_menuList($MenuId);
$array_menulist = array();
foreach ($menulist['response'] as $row_menulist) {
    $array_menulist[] = array('label' => $row_menulist['Name'], 'value' => $row_menulist['Id'], 'selected' => $row_menuinfo['MenuId']);
}

//Icon List
$iconslist       = class_iconsList();
$array_iconslist = array();
foreach ($iconslist['response'] as $row_iconslist) {
    $array_iconslist[] = array('label' => $row_iconslist, 'value' => $row_iconslist, 'selected' => $row_menuinfo['Icon']);
}

//Status list
$array_status   = array();
$array_status[] = array('label' => 'Active', 'value' => 1, 'selected' => $row_menuinfo['Status']);
$array_status[] = array('label' => 'Inactive', 'value' => 0, 'selected' => $row_menuinfo['Status']);

//Order List
$menu_order  = $menulist;
$array_order = array();
foreach ($menu_order['response'] as $row_order) {
    $array_order[] = array('label' => '[Up] - ' . $row_order['Name'], 'value' => $row_order['Order'] - 1, 'selected' => $row_menuinfo['Order']);
    $array_order[] = array('label' => '[Down] - ' . $row_order['Name'], 'value' => $row_order['Order'] + 1, 'selected' => $row_menuinfo['Order']);
}

$formFields = array(
    'form_update' => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'form_update', 'value' => 1),
    'Id'          => array('inputType' => 'hidden', 'required' => false, 'position' => 0, 'name' => 'Id', 'value' => $row_menuinfo['Id']),
    'Name'        => array('inputType' => 'text', 'required' => true, 'position' => 1, 'name' => 'Name', 'value' => $row_menuinfo['Name']),
    'Description' => array('inputType' => 'textarea', 'required' => false, 'position' => 1, 'name' => 'Description', 'value' => $row_menuinfo['Description']),
    'Url'         => array('inputType' => 'text', 'required' => false, 'position' => 2, 'name' => 'Url', 'value' => $row_menuinfo['Url']),
    'Patern Menu' => array('inputType' => 'select', 'required' => false, 'position' => 2, 'name' => 'MenuId', 'value' => $array_menulist),
    'Icon'        => array('inputType' => 'select', 'required' => false, 'position' => 3, 'name' => 'Icon', 'value' => $array_iconslist),
    'Order'       => array('inputType' => 'select', 'required' => false, 'position' => 3, 'name' => 'Order', 'value' => $array_order),
    'Status'      => array('inputType' => 'select', 'required' => true, 'position' => 3, 'name' => 'Status', 'value' => $array_status),
);

// define buttons for form
$formButtons = array(
    'Submit' => array('buttonType' => 'submit', 'class' => null, 'name' => null, 'value' => null, 'action' => null),
    'Back'   => array('buttonType' => 'cancel', 'class' => null, 'name' => null, 'value' => null, 'action' => null),
);

//set params for form
$formParams = array(
    'name'    => 'Update',
    'action'  => '',
    'method'  => 'post',
    'enctype' => '',
);

class_formGenerator($formParams, $formFields, $formButtons);
?>
<?php require_once 'footer.php';

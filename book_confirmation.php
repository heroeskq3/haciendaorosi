<?php
//Section Parameters
$section_tittle      = 'Survey';
$section_description = null;
$section_restrict    = 1;
$section_navbar      = 1;
$section_sidebar     = 1;
$section_searchbar   = 0;
$section_style       = 1;
$section_homedir     = null;
$step                = 3;
?>
<?php require_once 'header.php';?>
<?php
if ('home' == $button) {
    $_SESSION = array();
    header('Location: index.php');
    die();
}

?>
<h3>Very thanks</h3>
<hr>
<?php
//buttons
$formButtons = array(
    'Home' => array('buttonType' => 'submit', 'class' => 'btn btn-submit', 'name' => 'button', 'value' => 'home', 'action' => 'index.php'),
);
echo class_formButtons($formButtons);
?>
<?php require_once 'footer.php';?>
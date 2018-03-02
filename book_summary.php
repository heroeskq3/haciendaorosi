<?php
//Section Parameters
$section_tittle      = "Book - Summary";
$section_description = null;
$section_restrict    = 1;
$section_navbar      = 1;
$section_sidebar     = 1;
$section_searchbar   = 0;
$section_style       = 1;
$section_homedir     = null;
$step                = 2;
require_once 'header.php';
if(!$PackageId){
    header('Location: book_availability.php');
    die();
}
?>

<div class="col-xs-6 col-sm-6">
    <?php require_once 'book_register.php'; ?>
</div>

<div class="col-xs-6 col-sm-6 col-sm-5 col-md-offset-1">
		<?php require_once 'book_invoice.php'; ?>
</div>
<?php
require_once 'footer.php';

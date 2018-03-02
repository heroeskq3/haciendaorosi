<?php
//Section Parameters
$section_tittle      = "Survey";
$section_description = null;
$section_restrict    = 1;
$section_navbar      = 1;
$section_sidebar     = 1;
$section_searchbar   = 0;
$section_style       = 1;
$section_homedir     = null;
$step                = 6;
?>
    <?php require_once 'header.php';?>
    <div class="form-group input-group">
        <span class="input-group-addon"><p class="fa fa-calendar"></p></span>
        <input type="date" class="form-control" min="'.date(" Y-m-d ").'" name="' . $name . '" value="' . $value . '" '.$required.'>
    </div>
    <?php require_once 'footer.php';?>
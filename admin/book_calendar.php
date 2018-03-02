<?php
//Section Parameters
$section_tittle      = "Booking - Calendar Test";
$section_description = null;
$section_restrict    = 1;
$section_navbar      = 1;
$section_sidebar     = 1;
$section_searchbar   = 0;
$section_style       = 1;
$section_homedir     = '../';
?>
<?php require_once 'header.php';?>
<style>
	iframe {
    max-width: 100%;
    height: 410px;
}
</style>
<div class="col-xs-12 col-sm-12 col-md-6">
<div class="well well-lg" style="background-color:#fff">
	<iframe width="100%" height="auto" src="../fullcalendar/demos/background-events.html" frameborder="0" allowfullscreen></iframe>
</div>
</div>
<div class="col-xs-12">

</div>
<?php require_once 'footer.php';?>

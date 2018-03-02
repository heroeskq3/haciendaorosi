<?php
//Section Parameters
$section_tittle      = "Book - Availability";
$section_description = null;
$section_restrict    = 1;
$section_navbar      = 1;
$section_sidebar     = 1;
$section_searchbar   = 0;
$section_style       = 1;
$section_homedir     = null;
$step                = 1;
require_once 'header.php';

//Search Availability
require_once 'book_search.php';

//Package Availability
require_once 'book_packages.php';

require_once 'footer.php';

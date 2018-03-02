<?php
//class library

//SYSTEM
require_once PATH_MODELS . 'class_conn.php';
require_once PATH_MODELS . 'class_login.php';
require_once PATH_MODELS . 'class_token.php';

require_once PATH_MODELS . 'class_sumavalor.php';

//HEADER
require_once PATH_MODELS . 'class_headersteps.php';

//SCRIPTS
require_once PATH_MODELS . 'class_scripts.php';

//FORMATS
require_once PATH_MODELS . 'class_formatsmoney.php';
require_once PATH_MODELS . 'class_formatsmoney2.php';

//TEMPLATE
require_once PATH_MODELS . 'class_contentarea.php';
require_once PATH_MODELS . 'class_modals.php';

require_once PATH_MODELS . 'class_api.php';
require_once PATH_MODELS . 'class_mysql.php';
require_once PATH_MODELS . 'class_array.php';

//CONFIG
require_once PATH_MODELS . 'class_lang.php';
//require_once PATH_MODELS . 'class_config.php'; //en este habiria que tarbajar ahora define basic config VARS

//USERS
require_once PATH_MODELS . 'class_usersinfo.php';
require_once PATH_MODELS . 'class_userslist.php';
require_once PATH_MODELS . 'class_usersadd.php';
require_once PATH_MODELS . 'class_usersdelete.php';
require_once PATH_MODELS . 'class_usersupdate.php';
require_once PATH_MODELS . 'class_userspasswordupdate.php';

//USERS TYPE
require_once PATH_MODELS . 'class_userstypeinfo.php';
require_once PATH_MODELS . 'class_userstypeadd.php';
require_once PATH_MODELS . 'class_userstypeupdate.php';
require_once PATH_MODELS . 'class_userstypedelete.php';
require_once PATH_MODELS . 'class_userstypelist.php';

//USERS DETAILS
require_once PATH_MODELS . 'class_usersdetailsadd.php';
require_once PATH_MODELS . 'class_usersdetailsupdate.php';
require_once PATH_MODELS . 'class_usersdetailsdelete.php';
require_once PATH_MODELS . 'class_usersdetailsinfo.php';
require_once PATH_MODELS . 'class_usersdetailslist.php';

//COUNTRY
require_once PATH_MODELS . 'class_countrylist.php';

//STATE
require_once PATH_MODELS . 'class_statelist.php';

//MENU ASSIDE
require_once PATH_MODELS . 'class_assidemenulist.php';
require_once PATH_MODELS . 'class_assidesubmenulist.php';
require_once PATH_MODELS . 'class_assideprivilegeslist.php';

//DEBUGGER
require_once PATH_MODELS . 'class_debug.php';
require_once PATH_MODELS . 'class_phperror.php';

//UPLOAD FILES
require_once PATH_MODELS . 'class_filesupload.php';

//FORMS
require_once PATH_MODELS . 'class_formgenerator.php';
require_once PATH_MODELS . 'class_formgenerator2.php';
require_once PATH_MODELS . 'class_forminput.php';
require_once PATH_MODELS . 'class_formscripts.php';

//forms buttons
require_once PATH_MODELS . 'class_formbuttons.php';
require_once PATH_MODELS . 'class_formbuttonstype.php';

//TABLES
require_once PATH_MODELS . 'class_tablegenerator.php';
require_once PATH_MODELS . 'class_tablepager.php';
require_once PATH_MODELS . 'class_tablemain.php';
require_once PATH_MODELS . 'class_tablechilds.php';
require_once PATH_MODELS . 'class_tablescripts.php';
require_once PATH_MODELS . 'class_datatable.php';

//TABLES - MENU
require_once PATH_MODELS . 'class_tablemenulist.php';
require_once PATH_MODELS . 'class_tablesubmenulist.php';

//TABLES - USERS
require_once PATH_MODELS . 'class_tableuserslist.php';

//TABLES - USERS TYPE
require_once PATH_MODELS . 'class_tableuserstypelist.php';

//STATUS
require_once PATH_MODELS . 'class_statusInfo.php';
require_once PATH_MODELS . 'class_infosino.php';
require_once PATH_MODELS . 'class_statusIcon.php';

//MENU
require_once PATH_MODELS . 'class_menulist.php';
require_once PATH_MODELS . 'class_menuinfo.php';
require_once PATH_MODELS . 'class_menuadd.php';
require_once PATH_MODELS . 'class_menudelete.php';
require_once PATH_MODELS . 'class_menuupdate.php';
require_once PATH_MODELS . 'class_submenulist.php';

//Survey - Services
require_once PATH_MODELS . 'class_surveylist.php';
require_once PATH_MODELS . 'class_surveyinfo.php';
require_once PATH_MODELS . 'class_surveyadd.php';
require_once PATH_MODELS . 'class_surveydelete.php';
require_once PATH_MODELS . 'class_surveyupdate.php';
require_once PATH_MODELS . 'class_surveyserviceslist.php';

//Survey - Questions
require_once PATH_MODELS . 'class_surveyquestionslist.php';
require_once PATH_MODELS . 'class_surveyquestionsinfo.php';
require_once PATH_MODELS . 'class_surveyquestionsadd.php';
require_once PATH_MODELS . 'class_surveyquestionsdelete.php';
require_once PATH_MODELS . 'class_surveyquestionsupdate.php';

//Survey - Answers
require_once PATH_MODELS . 'class_surveyanswerslist.php';
require_once PATH_MODELS . 'class_surveyanswersinfo.php';
require_once PATH_MODELS . 'class_surveyanswersadd.php';
require_once PATH_MODELS . 'class_surveyanswersdelete.php';
require_once PATH_MODELS . 'class_surveyanswersupdate.php';

//booking - Packages
require_once PATH_MODELS . 'class_bookpackagesadd.php';
require_once PATH_MODELS . 'class_bookpackagesupdate.php';
require_once PATH_MODELS . 'class_bookpackagesdelete.php';
require_once PATH_MODELS . 'class_bookpackageslist.php';
require_once PATH_MODELS . 'class_bookpackagesinfo.php';

//booking - capacity
require_once PATH_MODELS . 'class_bookcapacityadd.php';
require_once PATH_MODELS . 'class_bookcapacityupdate.php';
require_once PATH_MODELS . 'class_bookcapacitydelete.php';
require_once PATH_MODELS . 'class_bookcapacitylist.php';
require_once PATH_MODELS . 'class_bookcapacityinfo.php';

//booking - customers
require_once PATH_MODELS . 'class_bookcustomersadd.php';
require_once PATH_MODELS . 'class_bookcustomersupdate.php';
require_once PATH_MODELS . 'class_bookcustomersdelete.php';
require_once PATH_MODELS . 'class_bookcustomerslist.php';
require_once PATH_MODELS . 'class_bookcustomersinfo.php';

//booking - cxc
require_once PATH_MODELS . 'class_bookcxcadd.php';
require_once PATH_MODELS . 'class_bookcxcupdate.php';
require_once PATH_MODELS . 'class_bookcxcdelete.php';
require_once PATH_MODELS . 'class_bookcxclist.php';
require_once PATH_MODELS . 'class_bookcxcinfo.php';

//booking - dealers
require_once PATH_MODELS . 'class_bookdealersadd.php';
require_once PATH_MODELS . 'class_bookdealersupdate.php';
require_once PATH_MODELS . 'class_bookdealersdelete.php';
require_once PATH_MODELS . 'class_bookdealerslist.php';
require_once PATH_MODELS . 'class_bookdealersinfo.php';

//booking - limits
require_once PATH_MODELS . 'class_booklimitsadd.php';
require_once PATH_MODELS . 'class_booklimitsupdate.php';
require_once PATH_MODELS . 'class_booklimitsdelete.php';
require_once PATH_MODELS . 'class_booklimitslist.php';
require_once PATH_MODELS . 'class_booklimitsinfo.php';

//booking - params
require_once PATH_MODELS . 'class_bookparamsadd.php';
require_once PATH_MODELS . 'class_bookparamsupdate.php';
require_once PATH_MODELS . 'class_bookparamsdelete.php';
require_once PATH_MODELS . 'class_bookparamslist.php';
require_once PATH_MODELS . 'class_bookparamsinfo.php';

//booking - promos
require_once PATH_MODELS . 'class_bookpromosadd.php';
require_once PATH_MODELS . 'class_bookpromosupdate.php';
require_once PATH_MODELS . 'class_bookpromosdelete.php';
require_once PATH_MODELS . 'class_bookpromoslist.php';
require_once PATH_MODELS . 'class_bookpromosinfo.php';

//booking - reserves
require_once PATH_MODELS . 'class_bookreservesadd.php';
require_once PATH_MODELS . 'class_bookreservesupdate.php';
require_once PATH_MODELS . 'class_bookreservesdelete.php';
require_once PATH_MODELS . 'class_bookreserveslist.php';
require_once PATH_MODELS . 'class_bookreservesinfo.php';

//booking - sectors
require_once PATH_MODELS . 'class_booksectorsadd.php';
require_once PATH_MODELS . 'class_booksectorsupdate.php';
require_once PATH_MODELS . 'class_booksectorsdelete.php';
require_once PATH_MODELS . 'class_booksectorslist.php';
require_once PATH_MODELS . 'class_booksectorsinfo.php';

//booking - summary
require_once PATH_MODELS . 'class_booksummaryadd.php';
require_once PATH_MODELS . 'class_booksummaryupdate.php';
require_once PATH_MODELS . 'class_booksummarydelete.php';
require_once PATH_MODELS . 'class_booksummarylist.php';
require_once PATH_MODELS . 'class_booksummaryinfo.php';

//booking - type
require_once PATH_MODELS . 'class_booktypeadd.php';
require_once PATH_MODELS . 'class_booktypeupdate.php';
require_once PATH_MODELS . 'class_booktypedelete.php';
require_once PATH_MODELS . 'class_booktypelist.php';
require_once PATH_MODELS . 'class_booktypeinfo.php';

//booking - Customers
require_once PATH_MODELS . 'class_bookreservationsadd.php';

//PRIVILEGES
require_once PATH_MODELS . 'class_privilegesinfo.php';
require_once PATH_MODELS . 'class_privilegeslist.php';
require_once PATH_MODELS . 'class_privilegesadd.php';
require_once PATH_MODELS . 'class_privilegesupdate.php';
require_once PATH_MODELS . 'class_privilegesdelete.php';

//CUSTOMERS
require_once PATH_MODELS . 'class_customersinfo.php';
require_once PATH_MODELS . 'class_customerslist.php';
require_once PATH_MODELS . 'class_customersadd.php';
require_once PATH_MODELS . 'class_customersupdate.php';
require_once PATH_MODELS . 'class_customersdelete.php';

//ICONS
require_once PATH_MODELS . 'class_iconslist.php';

//SECTIONS
require_once PATH_MODELS . 'class_sectioninfo.php';
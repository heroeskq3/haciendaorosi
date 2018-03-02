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
$step                = 3;
?>
<?php require_once 'header.php';?>
<div id="toolbar" class="btn-group">
    <button type="button" class="btn btn-default">
        <i class="glyphicon glyphicon-plus"></i>
    </button>
    <button type="button" class="btn btn-default">
        <i class="glyphicon glyphicon-heart"></i>
    </button>
    <button type="button" class="btn btn-default">
        <i class="glyphicon glyphicon-trash"></i>
    </button>
</div>
<table data-toggle="table"
       data-url="/gh/get/response.json/wenzhixin/bootstrap-table/tree/master/docs/data/data1/"
       data-search="true"
       data-show-refresh="true"
       data-show-toggle="true"
       data-show-columns="true"
       data-toolbar="#toolbar">
    <thead>
    <tr>
        <th data-field="name">Name</th>
        <th data-field="stargazers_count">Stars</th>
        <th data-field="forks_count">Forks</th>
        <th data-field="description">Description</th>
    </tr>
    </thead>
</table>
    <?php require_once 'footer.php';?>
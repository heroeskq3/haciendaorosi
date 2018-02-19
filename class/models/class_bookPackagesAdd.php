<?php
function class_bookPackagesAdd($Name, $Price, $IV, $IS, $VigenciaDel, $VigenciaAl, $SectorId, $Status)
{
    $mysql_query    = "INSERT INTO book_packages (Name, Price, IV, `IS`, VigenciaDel, VigenciaAl, SectorId, Status) VALUES('$Name', '$Price', '$IV', '$IS', '$VigenciaDel', '$VigenciaAl', '$SectorId', '$Status')";
    $mysql_database = CONFIG_MYSQLDB;
    $mysql_conn     = conn_mysql();
    $mysql_debug    = 0;
    $mysql_results  = class_mysql($mysql_query, $mysql_database, $mysql_conn, $mysql_debug);

    $results = $mysql_results;

    return $results;
}

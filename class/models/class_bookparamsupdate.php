<?php
function class_bookParamsUpdate($Id, $PackCode, $Name, $Price, $TaxSales, $TaxSales, $StartDate, $EndDate, $SectorId, $Status)
{
    $mysql_query    = "UPDATE book_params SET PackCode = '$PackCode', Name = '$Name', Price = '$Price', IV = '$TaxSales', `IS` = '$TaxSales', StartDate = '$StartDate', EndDate = '$EndDate', SectorId = '$SectorId', Status = '$Status' WHERE Id = $Id";
    $mysql_database = CONFIG_MYSQLDB;
    $mysql_conn     = conn_mysql();
    $mysql_debug    = 0;
    $mysql_result   = class_mysql($mysql_query, $mysql_database, $mysql_conn, $mysql_debug);

    $results = $mysql_result;

    return $results;
}
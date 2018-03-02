<?php
function class_bookSummaryAdd($PackCode, $Name, $Price, $TaxSales, $TaxSales, $StartDate, $EndDate, $SectorId, $Status)
{
    $mysql_query    = "INSERT INTO book_summary (PackCode, Name, Price, IV, `IS`, StartDate, EndDate, SectorId, Status) VALUES('$PackCode', '$Name', '$Price', '$TaxSales', '$TaxSales', '$StartDate', '$EndDate', '$SectorId', '$Status')";
    $mysql_database = CONFIG_MYSQLDB;
    $mysql_conn     = conn_mysql();
    $mysql_debug    = 0;
    $mysql_results  = class_mysql($mysql_query, $mysql_database, $mysql_conn, $mysql_debug);

    $results = $mysql_results;

    return $results;
}

<?php
function class_bookReservationsAdd($SectorsId, $CustomersId, $PackagesId, $PromosId, $Adults, $Childs, $PaymentAuth, $TaxServices, $TaxSales, $SubTotal, $Total, $BillId, $Status)
{
    $mysql_query    = "INSERT INTO book_reservations (SectorsId, CustomersId, PackagesId, PromosId, Adults, Childs, PaymentAuth, TaxServices, TaxSales, SubTotal, Total, BillId, `Status`) VALUES('$SectorsId', '$CustomersId', '$PackagesId', '$PromosId', '$Adults', '$Childs', '$PaymentAuth', '$TaxServices', '$TaxSales', '$SubTotal', '$Total', '$BillId', '$Status')";
    $mysql_database = CONFIG_MYSQLDB;
    $mysql_conn     = conn_mysql();
    $mysql_debug    = 0;
    $mysql_results  = class_mysql($mysql_query, $mysql_database, $mysql_conn, $mysql_debug);

    $results = $mysql_results;

    return $results;
}

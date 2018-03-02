<?php
function class_bookReservesUpdate($Id, $SectorsId, $CustomersId, $PackagesId, $PromosId, $Adults, $Childs, $PaymentAuth, $TaxServices, $TaxSales, $SubTotal, $Total, $BillId, $Status)
{
    $mysql_query    = "UPDATE book_reservations SET SectorsId = '$SectorsId', CustomersId = '$CustomersId', PackagesId = '$PackagesId', PromosId = '$PromosId', Adults = '$Adults', Childs = '$Childs', PaymentAuth = '$PaymentAuth', TaxServices = '$TaxServices', TaxSales = '$TaxSales', SubTotal = '$SubTotal', Total = '$Total', BillId = '$BillId', Status = '$Status' WHERE Id = $Id";
    $mysql_database = CONFIG_MYSQLDB;
    $mysql_conn     = conn_mysql();
    $mysql_debug    = 0;
    $mysql_result   = class_mysql($mysql_query, $mysql_database, $mysql_conn, $mysql_debug);

    $results = $mysql_result;

    return $results;
}
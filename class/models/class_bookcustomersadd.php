<?php
function class_bookCustomersAdd($Prefix, $FirstName, $LastName, $Email, $Phone, $Country, $MiddleName, $CreditTime, $CreditLimit, $Balance, $LastVisit, $LastBook, $TypeId, $Status)
{
    $mysql_query    = "INSERT INTO book_customers (Prefix, FirstName, LastName, Email, Phone, Country, MiddleName, CreditTime, CreditLimit, Balance, LastVisit, LastBook, TypeId, `Status`) VALUES('$Prefix', '$FirstName', '$LastName', '$Email', '$Phone', '$Country', '$MiddleName', '$CreditTime', '$CreditLimit', '$Balance', '$LastVisit', '$LastBook', '$TypeId', '$Status')";
    $mysql_database = CONFIG_MYSQLDB;
    $mysql_conn     = conn_mysql();
    $mysql_debug    = 0;
    $mysql_results  = class_mysql($mysql_query, $mysql_database, $mysql_conn, $mysql_debug);

    $results = $mysql_results;

    return $results;
}

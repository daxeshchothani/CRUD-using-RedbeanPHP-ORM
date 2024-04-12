<?php
include './rb.php';
R::setup(
    'mysql:host=localhost;dbname=employeedb',
    'root',
    ''
); //for both mysql or mariaDB

$isConn = R::testConnection();
if (!$isConn) {
    print 'conection is faild';
}
?>
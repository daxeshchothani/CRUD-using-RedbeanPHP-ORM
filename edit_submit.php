<?php
include './connectDB.php';
// print 'Fullname :' . $_POST['Fullname'];
// print 'Salary :' . $_POST['Salary'];
// print 'Phone :' . $_POST['Phone'];

$id= $_POST['id'];
$fullname = $_POST['Fullname'];
$salary = $_POST['Salary'];
$phone = $_POST['Phone'];

$employee = R::load('tblempolyee', $id);
$employee->fullname = $fullname;
$employee->salary = $salary;
$employee->phone = $phone;
$idResult = R::store($employee);

if ($idResult > 0) {
    header('Location:http://localhost/redbeamPHP/index.php');
    die();
} else {
    header('Location :http://localhost/redbeamPHP/edit.php?id='.$id);
    die();
}
?>
<?php
include './components/header.php';
?>
<!-- content -->
<?php
$id = $_GET['id'];
$employee = R::load('tblempolyee', $id);

// Check if the employee exists
if ($employee) {
    // If the employee exists, delete it
    R::trash($employee);
    echo "<div class='alert alert-success'>Employee deleted successfully.</div>";
    // Redirect to the index page after a short delay
    header("refresh:2;url=index.php");
} else {
    // If the employee doesn't exist, display an error message
    echo "<div class='alert alert-danger'>Employee not found.</div>";
}
?>


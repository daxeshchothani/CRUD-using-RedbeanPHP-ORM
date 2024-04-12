<?php
include './components/header.php';
?>
<!-- content -->
<?php
$id= $_GET['id'];
$employee=R::load('tblempolyee', $id)
?>

<div class="col-lg-12 ">
    <form action='./edit_submit.php' method='POST'>
        <div class="col-lg-offset-4 col-lg-4 ">
            <div class="from-group">
                <div class="col-lg-12">
                    <lable>Fullname</lable>
                    <input type="text" class="form-control" value="<?php print $employee->fullname?>"name="Fullname">
                    <input type="hidden" class="form-control" value='<?php print $employee->id?>' name="id">
                </div>
                <div class="col-lg-12">
                    <lable>Salary</lable>
                    <input type="text" class="form-control"value="<?php print $employee->salary?>"name="Salary">
                </div>
                <div class="col-lg-12">
                    <lable>Phone</lable>
                    <input type="text" class="form-control"value="<?php print $employee->phone?>"name="Phone">
                </div><br />
                <div class="col-lg-12">
                    <button tupe="Submit" class='btn btn-info btn-sm'>Update</button>

                </div>

            </div>
        </div>
    </form>
</div>


<?php
include './components/footer.php';
?>
<?php
include './components/header.php';
?>
<h3>This is second page</h3>
<br />
<a class="btn btn-info btn-sm" href="./index.php">Go to te index page</a>

<div class="col-lg-12 ">
    <form action="./add_submit.php" method='POST'>
        <div class="col-lg-offset-4 col-lg-4 ">
            <div class="from-group">
                <div class="col-lg-12">
                    <lable>Fullname</lable>
                    <input type="text" class="form-control"name="Fullname">
                </div>
                <div class="col-lg-12">
                    <lable>Salary</lable>
                    <input type="text" class="form-control"name="Salary">
                </div>
                <div class="col-lg-12">
                    <lable>Phone</lable>
                    <input type="text" class="form-control"name="Phone">
                </div><br />
                <div class="col-lg-12">
                    <button tupe="Submit" class='btn btn-info btn-sm'>Submit</button>

                </div>

            </div>
        </div>
    </form>
</div>


<?php
include './components/footer.php';
?>
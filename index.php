<?php
include './components/header.php';
?>


<!-- <h3>This is index page</h3>
<br /> -->
<!-- <a class="btn btn-info btn-sm" href="./second.php">Go to te second page</a> -->

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Index</th>
            <th>ID</th>
            <th>Fullname</th>
            <th>Salary</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $employees = R::getAll("SELECT * FROM tblempolyee"); // <-- Add semicolon here
        
        foreach ($employees as $index => $em) {
            ?>
            <tr>
                <td><?php print ($index + 1) ?></td>
                <td><?php print $em['id'] ?></td>
                <td><?php print $em['fullname'] ?></td>
                <td><?php print $em['salary'] ?></td>
                <td><?php print $em['phone'] ?></td>
                <td>
                    <a href="http://localhost/redbeamPHP/edit.php?id=<?php print $em['id'];?>" class="btn btn-primary btn=xs">Edit</a>
                    <a href="http://localhost/redbeamPHP/delete.php?id=<?php print $em['id'];?>" class="btn btn-danger btn=xs">Delete</a> <!-- Added delete button -->
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

<?php
include './components/footer.php';
?>

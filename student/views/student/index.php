<?php require_once 'templates/header.php'; ?>

<h2>Student List</h2>
<a href="index.php?action=add" class="btn btn-primary mb-3">Add Student</a>
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>ID</th>
            <th>Grade</th>
            <th>Major</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student) : ?>
            <tr>
                <td><?php echo $student->name; ?></td>
                <td><?php echo $student->age; ?></td>
                <td><?php echo $student->student_id; ?></td>
                <td><?php echo $student->grade; ?></td>
                <td><?php echo $student->major; ?></td>
                <td>
                    <a href="index.php?action=delete&id=<?php echo $student->id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this student?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once 'templates/footer.php'; ?>
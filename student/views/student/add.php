<?php require_once 'templates/header.php'; ?>

<h2>Add Student</h2>
<form method="POST" action="index.php?action=add">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="age">Age:</label>
        <input type="number" class="form-control" id="age" name="age" required>
    </div>
    <div class="form-group">
        <label for="student_id">Student ID:</label>
        <input type="text" class="form-control" id="student_id" name="student_id" required>
    </div>
    <div class="form-group">
        <label for="grade">Grade:</label>
        <input type="text" class="form-control" id="grade" name="grade" required>
    </div>
    <div class="form-group">
        <label for="major">Major:</label>
        <input type="text" class="form-control" id="major" name="major" required>
    </div>
    <button type="submit" class="btn btn-success">Add Student</button>
    <a href="index.php" class="btn btn-secondary">Back to Home</a>
</form>

<?php require_once 'templates/footer.php'; ?>
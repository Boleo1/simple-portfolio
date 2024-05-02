<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Project</title>
</head>
<body>
    <h1>Add New Project</h1>
    <form action="<?php echo BASE_URL. 'projects/store'?>"method="post">
    <div class="form-group">
        <label>Title:</label>
        <input type="text" id="title" name="title" required>
    </div>

    <div class="form-group">
        <label>Short description:</label>
        <textarea id="description" name="description" required></textarea>
    </div>

    <div class="form-group">
        <label>Detailed Description:</label>
        <textarea id="description" name="description" required></textarea>
    </div>

    <div class="form-group">
        <label>Challenges:</label>
        <textarea id="description" name="description" required></textarea>
    </div>

    <div class="form-group">
        <label>Lessons and improvements:</label>
        <textarea id="description" name="description" required></textarea>
    </div>

    <div class="form-group">
        <label>GitHub Link:</label>
        <input type="url" id="github_link" name="github_link">
    </div>

    <div class="form-group">
        <label>Live Project Link:</label>
        <input type="url" id="weblink" name="weblink">
    </div>

        <button type="submit">Add Project</button>
    </form>
    <a href="<?php echo BASE_URL. 'admin'?>">Back to Dashboard</a>
</body>
</html>

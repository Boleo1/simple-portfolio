<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/style.css">
  <title><?php echo $pageTitle?></title>
</head>
    <h2 class="addFormHead">Add New Project</h2>
    <form class="addForm" action="<?php echo BASE_URL. 'projects/store'?>"method="post">
    <div class="form-group">
        <label>Title:</label>
        <input class ="add-edit-title" type="text" id="title" name="title" required>
    </div>

    <div class="form-group">
        <label>Short description:</label>
        <textarea class="add-edit-shortdesc" id="description" name="description" required></textarea>
    </div>

    <div class="form-group">
        <label>Detailed Description:</label>
        <textarea class="add-edit-textarea" id="description" name="detailed_desc" required></textarea>
    </div>

    <div class="form-group">
        <label>Challenges:</label>
        <textarea class="add-edit-textarea" id="description" name="challenges" required></textarea>
    </div>

    <div class="form-group">
        <label>Lessons and improvements:</label>
        <textarea class="add-edit-textarea"id="description" name="lessons_improvements" required></textarea>
    </div>

    <div class="form-group">
        <label>GitHub Link:</label>
        <input class="add-edit-link" type="url" id="github_link" name="github_link">
    </div>

    <div class="form-group">
        <label>Live Project Link:</label>
        <input class="add-edit-link" type="url" id="weblink" name="weblink">
    </div>

        <button type="submit">Add Project</button>
    </form>
    <a href="<?php echo BASE_URL. 'admin'?>">Back to Dashboard</a>
</body>
</html>

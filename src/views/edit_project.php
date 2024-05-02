<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/style.css">
  <title><?php echo $pageTitle?></title>
</head>
<div>
  <h2 class="editFormh2>Edit post:</h2>
</div>
<form class ="editForm" action="<?= BASE_URL ?>projects/update/<?= $project['_id']; ?>" method="post">
    <div class="form-group">
        <label>Title:</label>
        <input class="add-edit-shortdesc" type="text" id="title" name="title" value="<?= htmlspecialchars($project['title']); ?>" required>
    </div>

    <div class="form-group">
        <label>Short description:</label>
        <textarea class="add-edit-shortdesc" id="description" name="description"><?= htmlspecialchars($project['description']); ?></textarea>
    </div>

    <div class="form-group">
        <label>Detailed Description:</label>
        <textarea class="add-edit-textarea" id="detailed_descr" name="detailed_desc"><?= htmlspecialchars($project['detailed_desc']); ?></textarea>
    </div>

    <div class="form-group">
        <label>Challenges:</label>
        <textarea class="add-edit-textarea" id="challenges" name="challenges"><?= htmlspecialchars($project['challenges']); ?></textarea>
    </div>

    <div class="form-group">
        <label>Lessons and improvements:</label>
        <textarea class="add-edit-textarea" id="lessons_improvements" name="lessons_improvements"><?= htmlspecialchars($project['lessons_improvements']); ?></textarea>
    </div>

    <div class="form-group">
        <label>GitHub Link:</label>
        <input class="add-edit-link" id="github_link" name="github_link" value="<?= htmlspecialchars($project['github_link']); ?>">
    </div>

    <div class="form-group">
        <label>Live Project Link:</label>
        <input class="add-edit-link" id="weblink" name="weblink" value="<?= htmlspecialchars($project['weblink']); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Update Project</button>
</form>

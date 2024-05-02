<div>
  <h2>Edit post:</h2>
</div>
<form action="<?= BASE_URL ?>projects/update/<?= $project['_id']; ?>" method="post">
    <div class="form-group">
        <label>Title:</label>
        <input type="text" id="title" name="title" value="<?= htmlspecialchars($project['title']); ?>" required>
    </div>

    <div class="form-group">
        <label>Short description:</label>
        <textarea id="description" name="description"><?= htmlspecialchars($project['description']); ?></textarea>
    </div>

    <div class="form-group">
        <label>Detailed Description:</label>
        <textarea id="description" name="detailed_desc"><?= htmlspecialchars($project['detailed_desc']); ?></textarea>
    </div>

    <div class="form-group">
        <label>Challenges:</label>
        <textarea id="description" name="challenges"><?= htmlspecialchars($project['challenges']); ?></textarea>
    </div>

    <div class="form-group">
        <label>Lessons and improvements:</label>
        <textarea id="description" name="lessons_improvements"><?= htmlspecialchars($project['lessons_improvements']); ?></textarea>
    </div>

    <div class="form-group">
        <label>GitHub Link:</label>
        <input type="url" id="github_link" name="github_link" value="<?= htmlspecialchars($project['github_link']); ?>">
    </div>

    <div class="form-group">
        <label>Live Project Link:</label>
        <input type="url" id="weblink" name="weblink" value="<?= htmlspecialchars($project['weblink']); ?>">
    </div>

    <!-- Additional fields as needed -->
    <button type="submit" class="btn btn-primary">Update Project</button>
</form>

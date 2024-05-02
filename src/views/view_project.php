<div class="project-details">
    <h2>Project Details: <?= htmlspecialchars($project['title']); ?></h2>
    <p><strong>Description:</strong> <?= nl2br(htmlspecialchars($project['detailed_desc'])); ?></p>
    <p><strong>Challenges I faced:</strong> <?= nl2br(htmlspecialchars($project['challenges'])); ?></p>
    <p><strong>Lessons I learned and improvements:</strong> <?= nl2br(htmlspecialchars($project['lessons_improvements'])); ?></p>
    <p><strong>GitHub Link:</strong> <a href="<?= htmlspecialchars($project['github_link']); ?>"><?= htmlspecialchars($project['github_link']); ?></a></p>
    <p><strong>Live Project Link:</strong> <a href="<?= htmlspecialchars($project['weblink']); ?>"><?= htmlspecialchars($project['weblink']); ?></a></p>
</div>

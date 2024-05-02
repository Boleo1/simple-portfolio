<?php 
$pageTitle = "Projects";
include_once 'src/controllers/ProjectsController.php';
include_once 'templates/head-template.php';

$projectModel = new ProjectModel();
$projects = $projectModel->getProjects();
?>

<main class="container">
  <div class="banner">
    <h2>Projects Page</h2>
  </div>
  <?php foreach ($projects as $project): ?>
            <div class="project-card">
                <h2><?= htmlspecialchars($project['title']); ?></h2>
                <p><?= substr(htmlspecialchars($project['description']), 0, 150); ?>...</p>
                <a href="<?= BASE_URL ?>projects/view/<?= $project['_id'] ?>" class="readMoreBtn">Read more</a>
            </div>
        <?php endforeach; ?>
</main>

<?php include_once __DIR__.'/templates/footer-template.php'?>
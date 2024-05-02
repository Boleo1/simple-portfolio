<?php if (isset($projects) && is_array($projects)): ?>
  <table class="projectsTable">
    <thead class="projectsHead">
      <tr class="contactTableRow">
        <th>Title</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody class="projectsTableBody">
      <tr>
        <td colspan="2" class="projectsAddBtn"><a href="<?php echo BASE_URL; ?>projects/create">Add project</a></td>
      </tr>
      <?php foreach ($projects as $project): ?>
        <tr>
          <td><?= htmlspecialchars($project['title']); ?></td>
          <td class="projectsTableButtons">
            <a href="<?= BASE_URL ?>projects/view/<?= $project['_id'] ?>">View</a>
            <a href="<?= BASE_URL ?>projects/edit/<?= $project['_id'] ?>">Edit</a>
            <form action="<?= BASE_URL ?>projects/delete/<?= $project['_id'] ?>" method="post">
                <button class="projectsTableBtn" type="submit">Delete</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
    <p>No projects found.</p>
<?php endif; ?>

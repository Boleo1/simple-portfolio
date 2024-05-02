<?php if (isset($projects) && is_array($projects)): ?>
  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <td><a href="<?php BASE_URL ?>projects/create">Add project</td>
      <?php foreach ($projects as $project): ?>
        <tr>
          <td><?= htmlspecialchars($project['title']); ?></td>
          <td>
            <a href="<?= BASE_URL ?>projects/view/<?= $project['_id'] ?>">View</a>
            <a href="<?= BASE_URL ?>projects/edit/<?= $project['_id'] ?>">Edit</a>
            <form action="<?= BASE_URL ?>projects/delete/<?= $project['_id'] ?>" method="post">
                <button type="submit">Delete</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
    <p>No projects found.</p>
<?php endif; ?>

<table class ="contactTable">
  <thead class ="contactHead">
    <tr class ="contactTableRow">
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>
      <th>Date</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody class ="contactTableBody">
    <?php foreach ($contacts as $contact): ?>
    <tr>
      <td><?= htmlspecialchars($contact['name']); ?></td>
      <td><?= htmlspecialchars($contact['email']); ?></td>
      <td><?= htmlspecialchars($contact['message']); ?></td>
      <td><?= htmlspecialchars($contact['_created_date']); ?></td>
      <td>
        <form action="<?php echo BASE_URL .'admin/delete'?>" method="post">
            <input type="hidden" name="id" value="<?= $contact['_id']; ?>">
            <button class="contactTableBtn"type="submit">Delete</button>
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

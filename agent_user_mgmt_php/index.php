<?php
require 'config.php';
$users = $db->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>User Management</title>
</head>
<body>

<div class="container">
    <h2>User Management System</h2>

    <a href="create.php" class="btn">➕ Create New User</a>

    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Role</th><th>Action</th>
        </tr>

        <?php foreach($users as $u): ?>
        <tr>
            <td><?= $u['id'] ?></td>
            <td><?= $u['name'] ?></td>
            <td><?= $u['email'] ?></td>
            <td><?= $u['role'] ?></td>
            <td class="action-links">
                <a href="edit.php?id=<?= $u['id']?>">✏ Edit</a>
                <a href="delete.php?id=<?= $u['id']?>">❌ Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>

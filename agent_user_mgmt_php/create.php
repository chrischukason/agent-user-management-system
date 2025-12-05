<?php
require 'config.php';

if($_POST){
    $stmt=$db->prepare("INSERT INTO users(name,email,password,role) VALUES(?,?,?,?)");
    $stmt->execute([$_POST['name'],$_POST['email'],$_POST['password'],$_POST['role']]);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Create User</title>
</head>
<body>

<div class="container">
    <h2>Create New User</h2>

    <form method="post">
        <label>Name:</label>
        <input name="name" required>

        <label>Email:</label>
        <input name="email" required>

        <label>Password:</label>
        <input name="password" required>

        <label>Role:</label>
        <select name="role">
            <option>admin</option>
            <option>player</option>
            <option>agent</option>
            <option>club_manager</option>
        </select>

        <button type="submit">Create User</button>
    </form>
</div>

</body>
</html>

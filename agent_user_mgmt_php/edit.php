<?php
require 'config.php';
$id=$_GET['id'];
$u=$db->query("SELECT * FROM users WHERE id=$id")->fetch();

if($_POST){
    $stmt=$db->prepare("UPDATE users SET name=?,email=?,password=?,role=? WHERE id=?");
    $stmt->execute([$_POST['name'],$_POST['email'],$_POST['password'],$_POST['role'],$id]);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Edit User</title>
</head>
<body>

<div class="container">
    <h2>Edit User</h2>

    <form method="post">
        <label>Name:</label>
        <input name="name" value="<?= $u['name']?>">

        <label>Email:</label>
        <input name="email" value="<?= $u['email']?>">

        <label>Password:</label>
        <input name="password" value="<?= $u['password']?>">

        <label>Role:</label>
        <select name="role">
            <?php
            $roles=['admin','player','agent','club_manager'];
            foreach($roles as $r){
                echo "<option ".($u['role']==$r?'selected':'').">$r</option>";
            }
            ?>
        </select>

        <button type="submit">Update User</button>
    </form>
</div>

</body>
</html>

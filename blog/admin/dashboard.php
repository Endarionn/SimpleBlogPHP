<?php
session_start();
if (!($_SESSION['admin'] ?? false)) { header("Location: login.php"); exit; }
$posts = json_decode(file_get_contents("../data/posts.json"), true);
?>
<!DOCTYPE html>
<html lang="tr">
<head><title>Admin Panel</title></head>
<body>
<h2>Yazılar</h2>
<a href="new.php">Yeni Yazı</a>
<ul>
<?php foreach ($posts as $post): ?>
<li>
<?= htmlspecialchars($post['title']) ?> - 
<a href="edit.php?id=<?= $post['id'] ?>">Düzenle</a>
</li>
<?php endforeach; ?>
</ul>
</body>
</html>

<?php
session_start();
$posts = json_decode(file_get_contents("data/posts.json"), true);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>GrayHat Türkiye</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header><h1>GrayHat Türkiye</h1></header>
<main>
    <?php foreach (array_reverse($posts) as $post): ?>
    <article class="post">
        <h2><?= htmlspecialchars($post['title']) ?></h2>
        <p><?= nl2br(htmlspecialchars(substr($post['content'], 0, 150))) ?>...</p>
        <a href="post.php?id=<?= $post['id'] ?>">Devamını Oku</a>
    </article>
    <?php endforeach; ?>
</main>
</body>
</html>

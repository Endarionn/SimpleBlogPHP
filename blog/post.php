<?php
session_start();
$id = $_GET['id'] ?? null;
$posts = json_decode(file_get_contents("data/posts.json"), true);
$post = array_filter($posts, fn($p) => $p['id'] == $id);
$post = array_values($post)[0] ?? null;
if (!$post) {
    echo "Yazı bulunamadı.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($post['title']) ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header><h1><?= htmlspecialchars($post['title']) ?></h1></header>
<main>
<article><?= nl2br(htmlspecialchars($post['content'])) ?></article>
</main>
</body>
</html>

<?php
session_start();
if (!($_SESSION['admin'] ?? false)) { header("Location: login.php"); exit; }

if ($_POST) {
    $posts = json_decode(file_get_contents("../data/posts.json"), true) ?? [];
    $posts[] = [
        "id" => time(),
        "title" => $_POST['title'],
        "content" => $_POST['content']
    ];
    file_put_contents("../data/posts.json", json_encode($posts, JSON_PRETTY_PRINT));
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head><title>Yeni Yazı</title></head>
<body>
<form method="post">
    <input name="title" placeholder="Başlık"><br>
    <textarea name="content" placeholder="İçerik"></textarea><br>
    <button type="submit">Yayınla</button>
</form>
</body>
</html>

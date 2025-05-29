<?php
session_start();
if ($_POST['password'] ?? '' === 'admin123') {
    $_SESSION['admin'] = true;
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head><title>Giriş</title></head>
<body>
<form method="post">
    <input type="password" name="password" placeholder="Şifre">
    <button type="submit">Giriş Yap</button>
</form>
</body>
</html>

<?php
setcookie('user', $user['username'], time() - 3600, "/");
setcookie('email', $email['email'], time() - 3660, "/");
header('Location: /My/index.php'); // Редирект

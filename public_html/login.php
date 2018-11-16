<?php

//ログイン

require_once(__DIR__.'/../config/config.php');

$app = new MyApp\Controller\Login();

$app->run();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Log In</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <form action="" method="post" id="login">
      <p>
        <label for="email">メール</label>
        <input type="text" id="email" name="email" placeholder="email" value="<?= isset($app->getValues()->email) ? h($app->getValues()->email) : ''; ?>">
      </p>
      <p>
        <label for="password">パスワード</label>
        <input type="password" id="password" name="password" placeholder="password">
      </p>
      <p class="err center"><?= h($app->getErrors('login')); ?></p>
      <div class="btn" onclick="document.getElementById('login').submit();">Log In</div><!-- /btn -->
      <p class="center fs12"><a href="/signup.php">Sign Up</a></p>
      <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
    </form>
  </div><!-- /container -->

</body>
</html>
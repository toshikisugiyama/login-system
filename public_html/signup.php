<?php

//新規登録

require_once(__DIR__.'/../config/config.php');

$app = new MyApp\Controller\Signup();

$app->run();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Sign Up</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <form action="" method="post" id="signup">
      <p>
        <label for="email">メール</label>
        <input type="text" id="email" name="email" placeholder="email">
      </p>
      <p class="err"><?= h($app->getErrors('email')); ?></p>
      <p>
        <label for="password">パスワード</label>
        <input type="password" id="password" name="password" placeholder="pasword">
      </p>
      <p class="err><?= h($app->getErrors('password')); ?></p>
      <div class="btn" onclick="document.getElementById('signup').submit();">Sign Up</div><!-- /btn -->
      <p class="center"><a class="fs12" href="/login.php">Log In</a></p>
    </form>
  </div><!-- /container -->

</body>
</html>
<?php

//ログイン

require_once(__DIR__.'/../config/config.php');

// $app = new MyApp\Controller\Login();

// $app->run();

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
    <form action="" method="post">
      <p>
        <label for="email">メール</label>
        <input type="text" id="email" name="email" placeholder="email">
      </p>
      <p>
        <label for="password">パスワード</label>
        <input type="password" id="password" name="password" placeholder="pasword">
      </p>
      <div class="btn">Log In</div><!-- /btn -->
      <p class="center"><a class="fs12" href="/signup.php">Sign Up</a></p>
    </form>
  </div><!-- /container -->

</body>
</html>
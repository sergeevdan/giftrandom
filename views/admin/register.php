<!DOCTYPE html>
<html lang="ru">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GiftRandom.ru - Новый пользователь</title>

  <!-- ========== Css Files ========== -->
  <link href="../../source/admin/css/root.css" rel="stylesheet">
  <style type="text/css">
    body{background: #F5F5F5;}
  </style>
  </head>
  <body>

    <div class="login-form">
      <form method="post" action="">
        <div class="top">
          <h1><?=SITENAME?></h1>
          <h4>Новый пользователь</h4>
        </div>
        <div class="form-area">
          <div class="group">
            <input name="login" type="text" class="form-control" placeholder="Логин" required>
            <i class="fa fa-user"></i>
          </div>
<!--          <div class="group">-->
<!--            <input type="text" class="form-control" placeholder="E-mail">-->
<!--            <i class="fa fa-envelope-o"></i>-->
<!--          </div>-->
          <div class="group">
            <input name="password" type="password" class="form-control" placeholder="Пароль" required>
            <i class="fa fa-key"></i>
          </div>
<!--          <div class="group">-->
<!--            <input type="password" class="form-control" placeholder="Password again" required>-->
<!--            <i class="fa fa-key"></i>-->
<!--          </div>-->
          <button name="submit" type="submit" class="btn btn-default btn-block">Добавить</button>
          <div class="group">
            <?php if ($err) { foreach($err AS $error) { ?>
              <h6 style="color: #953b39;"><?=$error?></h6>
            <?php } }?>
          </div>
        </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="/admin/auth.php"><i class="fa fa-sign-in"></i> Войти</a></div>
      </div>
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="ru">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GiftRandom.ru - Вход в панель администратора</title>

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
          <h4>Вход в панель администратора</h4>
        </div>
        <div class="form-area">
          <div class="group">
            <input name="login" type="text" class="form-control" placeholder="Логин" required>
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input name="pass" type="password" class="form-control" placeholder="Пароль" required>
            <i class="fa fa-key"></i>
          </div>
          <!--<div class="checkbox checkbox-primary">
            <input id="checkbox101" type="checkbox" checked>
            <label for="checkbox101"> Запомнить</label>
          </div>-->
          <button type="submit" name="submit" class="btn btn-default btn-block">Войти</button>
          <div class="group">
            <?php if ($error_message) { ?>
              <h6 style="color: #953b39;"><?=$error_message?></h6>
            <?php } ?>
          </div>
        </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="#"><i class="fa fa-lock"></i> Забыл пароль</a></div>
      </div>
    </div>

</body>
</html>
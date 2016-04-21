
<!-- START TOP -->
  <div id="top" class="clearfix">

  	<!-- Start App Logo -->
  	<div class="applogo">
  		<a href="/admin" class="logo"><?=SITENAME?></a>
  	</div>
  	<!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

    <!-- Start Searchbox
    <form class="searchform">
      <input type="text" class="searchbox" id="searchbox" placeholder="Поиск">
      <span class="searchbutton"><i class="fa fa-search"></i></span>
    </form>
     End Searchbox -->

    <!-- Start Top Menu 
    <ul class="topmenu">
      <li><a href="#">Файлы</a></li>
      <li><a href="#">Авторы</a></li>
      <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Мои файлы <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Видео</a></li>
          <li><a href="#">Картинки</a></li>
          <li><a href="#">Записи</a></li>
        </ul>
      </li>
    </ul>
     End Top Menu -->

   

    <!-- Start Top Right -->
    <ul class="top-right">

    <li class="dropdown link">
      <a href="/admin/gifts/index.php?action=add" class="dropdown-toggle hdbutton">Добавить подарок</a>
    </li>

    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><b><?=$user['user_login']?></b><span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
          <li role="presentation" class="dropdown-header">Профиль</li>
          <li><a href="/admin/register.php"><i class="fa falist fa-user-plus"></i>Новый пользователь</a></li>
          <li><a href="#"><i class="fa falist fa-wrench"></i>Настройки</a></li>
          <li class="divider"></li>
          <li><a href="/admin/auth.php?action=logout"><i class="fa falist fa-power-off"></i> Выйти</a></li>
        </ul>
    </li>

    </ul>
    <!-- End Top Right -->

  </div>
  <!-- END TOP -->
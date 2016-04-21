<!DOCTYPE html>
<html lang="ru">
<head>
  <?php include $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/meta_head.php"; ?>
  <title>GiftRandom.ru - Панель администратора</title>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/preloading.php"; ?>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<?php include $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/header.php"; ?>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<?php include $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/sidebar.php"; ?>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTENT -->
<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title">Подарок</h1>
    <ol class="breadcrumb">
      <li><a href="/admin">Панель администратора</a></li>
      <li><a href="/admin/gifts/">Подарки</a></li>
      <li class="active">Добавление подарка</li>
    </ol>


  </div>
  <!-- End Page Header -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START CONTAINER -->
  <div class="container-padding">


    <!-- Start First Row -->
    <div class="row">

      <div class="col-md-12 col-lg-6">
        <div class="panel panel-default">

          <div class="panel-title">
            Информация о подарке

          </div>

          <div class="panel-body">
            <form class="form-horizontal" method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">

              <div class="form-group">
                <label class="col-sm-2 control-label form-label">Название</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="input11" value="<?=$gift['name_gift']?>" autofocus required>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">
                    <?php if ($_GET['action'] == 'add'){?>
                      Добавить
                    <?php } else if ($_GET['action'] == 'edit') {?>
                      Сохранить
                    <?php } ?>
                  </button>
                </div>
              </div>

            </form>
            <!-- End Moda Code -->

          </div>

        </div>
      </div>

    </div>
    <!-- End First Row -->

  </div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// -->

<?php include $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/footer.php"; ?>

</div>
<!-- End Content -->
<!-- //////////////////////////////////////////////////////////////////////////// -->

<?php include $_SERVER['DOCUMENT_ROOT']."/views/admin/layouts/scripts_bottom.php"; ?>

</body>
</html>
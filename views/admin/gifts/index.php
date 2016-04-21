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
    <h1 class="title">Панель администратора</h1>
    <ol class="breadcrumb">
      <li><a href="/admin">Панель администратора</a></li>
      <li class="active">Подарки</li>
    </ol>


  </div>
  <!-- End Page Header -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START CONTAINER -->
  <div class="container-padding">


    <!-- Start First Row -->
    <div class="row">

      <!-- Start Panel -->
      <div class="col-md-6">
        <div class="panel panel-default">

          <div class="panel-body table-responsive">

            <table id="gift_table" class="display">
              <thead>
              <tr>
                <th>#</th>
                <th>Название</th>
                <th></th>
              </tr>
              </thead>



              <tbody>
              <?php $i = 1; foreach ($gifts as $a): ?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$a['name_gift']?></td>
                  <td><a href="/admin/gifts/index.php?action=delete&id=<?=$a['id_gift']?>">Удалить</a> | <a href="/admin/gifts/index.php?action=edit&id=<?=$a['id_gift']?>">Изменить</a></td>
                </tr>
                <?php $i+=1; endforeach ?>
              </tbody>
            </table>

            <script>
              $(document).ready(function() {
                $('#gift_table').DataTable( {
                  "paging":   true,
                  "ordering": false,
                  "info":     true
                } );
              } );
            </script>

          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-6">
        <div class="panel panel-default">

          <div class="panel-title">
            Добавить подарок
          </div>

          <div class="panel-body">
            <form class="form-horizontal" method="post" action="/admin/gifts/index.php?action=add">

              <div class="form-group">
                <label class="col-sm-2 control-label form-label">Название</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="input11" value="" autofocus required>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">
                      Добавить
                  </button>
                </div>
              </div>

            </form>
            <!-- End Moda Code -->

          </div>

        </div>
      </div>
      <!-- End Panel -->

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
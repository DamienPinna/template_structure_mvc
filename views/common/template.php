<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $metaDescription ?>">
  <title><?= $title ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="<?= URL ?>public/design/css/main.css"> -->
  <!-- <?php if (!empty($pageCSS)) : ?>
    <link rel="stylesheet" href="<?= URL ?>public/design/css/<?= $pageCSS ?>">
  <?php endif; ?> -->
</head>

<body>
  <?php require_once "./views/common/header.php" ?>

  <div class="container">
    <?php if (!empty($_SESSION['alert'])) : ?>
      <?php foreach ($_SESSION['alert'] as $alert) : ?>
        <div class="alert <?= $alert['type'] ?>" role="alert">
          <?= $alert['message'] ?>
        </div>
      <?php endforeach; ?>
    <?php unset($_SESSION['alert']);
    endif; ?>

    <?= $content ?>
  </div>

  <?php require_once "./views/common/footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <!-- <?php if (!empty($pageJS)) : ?>
    <script src="<?= URL ?>public/javascript/<?= $pageJS ?>"></script>
  <?php endif; ?> -->
</body>

</html>
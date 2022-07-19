<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $page->title(); ?></title>

  <!-- TODO: understanding following if statement -->
  <?php if (c::get('debug')) { ?>
    <!-- Development Scripts -->
    <script type="module" src="http://localhost:3000/@vite/client"></script>
    <script type="module" src="http://localhost:3000/index.js"></script>
  <?php } else { ?>
    <!-- Production Scripts -->
    <?= css("public/dist/index.css") ?>
    <?= js("public/dist/index.js") ?>
  <?php } ?>

  <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
</head>
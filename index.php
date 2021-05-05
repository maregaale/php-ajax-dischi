<?php 
  include_once __DIR__ . '/partials/database.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue Php Dischi Musicali</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=swap" rel="stylesheet">
    <!-- /Google Font -->

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <!-- /font-awesome -->

    <!-- foglio di stile -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div id="root">
      <header>
        <img src="img/logo.png" alt="logo">
      </header>

      <main>
        <!-- dischi -->
        <?php foreach ($disks as $key => $disk) { ?>
          <div class="disk">
            <img src="<?php echo $disk['poster']; ?>" alt="<?php echo $disk['title']; ?>">
            <h3><?php echo $disk['title']; ?></h3>
            <h4><?php echo $disk['author']; ?></h4>
            <h5><?php echo $disk['year']; ?></h5>
          </div>
        <?php } ?>
        <!-- /dischi -->
      </main>
    </div>

  </body>
</html>
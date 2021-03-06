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

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <!-- /axios -->

    <!-- vueJs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- vueJs -->

    <!-- foglio di stile -->
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>

    <div id="root">
      <header>
        <img src="img/logo.png" alt="logo">
      </header>

      <main>
        <div v-for="disk in disks" class="disk">
          <img :src="disk.poster" alt="disk.title">
          <h3>{{ disk.title }}</h3>
          <h4>{{ disk.author }}</h4>
          <h5>{{ disk.year }}</h5>
        </div>
      </main>
    </div>

  <!-- fogli javascript -->
  <script src="js/script.js" charset="utf-8"></script>
  </body>
</html>
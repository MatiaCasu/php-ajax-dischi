<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- vue/axios -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
  <!-- vue/axios -->
  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <!-- /font -->
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <div id="app" class="body-wrap">
    <div class="head">
      <img src="img/download.png" alt="">
    </div>
    <?php //include __DIR__ . '/main-vue-js.php'; ?>
    <!-- /Stampa dischi con chiamata Axios in Vue -->
    <?php include __DIR__ . '/main-php.php'; ?>
    <!-- /Stampa dischi tramite Php -->
  </div>
  <script src="js/script.js"></script>
</body>
</html>

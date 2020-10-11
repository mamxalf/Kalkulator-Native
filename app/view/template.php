<!DOCTYPE html>
<html>
<head>
  <title>Aplikasi Kalkulator</title>
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="asset/js/Chartjs/Chart.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="?m=home">KALKULATOR</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="?m=home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?m=segitiga">Segitiga</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?m=persegi">Persegi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?m=lingkaran">Lingkaran</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <div class="container">
      <?php 
        include $content;
      ?>
    </div>
  </main>

  <script type="text/javascript" src="asset/js/jquery.slim.min.js"></script>
  <script type="text/javascript" src="asset/js/popper.min.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="asset/js/Chartjs/Chart.min.js"></script>
</body>
</html>
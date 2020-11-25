<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <title>Hi, I'm Diego</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/businessman.png" type="image/x-icon">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
<body>

    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
          <img src="/img/businessman.png" width="50" height="50" alt="my-logo" loading="lazy">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
                  <span class="sr-only">(current)</span>
                </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Protofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacts</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Full Page Image Header with Vertically Centered Content -->
  <header class="masthead">
    <div class="container">
      <div class="row align-items-center row-title">
        <div class="col-sm-3 text-center">
            <img src="/img/DSC_0991.jpg" class="img-fluid my-photo" alt="my-photo">
        </div>
        <div class="col-sm-9 text-center">
            <div class="my-name">Hi, I'm <strong>Diego Setiawan</strong></div>
            <div class="caption">Mahasiswa Gunadarma</div>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Page Content -->
  <section id="portfolio" class="py-5">
    <div class="container">
      <h3 class="text-center title-section"><strong>PORTFOLIO</strong></h3>
      <p class="text-center font-weight-light mb-5"><small>SELECTED LATEST WORKS</small></p>
    </div>
  </section>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
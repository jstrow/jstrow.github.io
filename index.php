<?php
    $title = 'Simple Guides to AWS';
    include 'includes/header.php';
?>
    <section id="jumbotron" class="jumbotron jumbotron-fluid text-white justify-content-center align-content-center">
      <div class="container text-center">
        <h1 class="display-1 text-light text-uppercase">Simple Guides to AWS</h1>
        <p class="lead d-sm-block">Jake Strow</p>
        <div class="lead">
        <div class="btn-group" role="group">
          <a class="btn btn-dark" href="gettingStarted.html" role="button">Getting Started</a>
          <a class="btn btn-dark" href="services.html" role="button">AWS Services</a>
          <a class="btn btn-dark" href="guides.html" role="button">Guides</a>
          <a class="btn btn-dark" href="faq.html" role="button">FAQ</a>
        </div>
      </div>
      </div>
      <div id="awsFav" class="container text-center">
        <i class="fab fa-aws fa-9x text-light"></i>
      </div>
      <div id="homeCards" class="container">
        <h1 class="display-4 text-light text-center">Featured Topics</h1>
        <div class="row d-flex container justify-content-center">
            <a href="gettingStarted.html#whatIsAWS" class="col-sm-3">
              <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Getting Started</div>
                <div class="card-body">
                  <h5 class="card-title">What is AWS?</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, dignissimos? Cumque atque...</p>
                </div>
              </div>
            </a>
            <a href="services.php#lightsail" class="col-sm-3">
              <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Getting started with...</div>
                <div class="card-body">
                  <h5 class="card-title">Lightsail</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, dignissimos? Cumque atque...</p>
                </div>
              </div>
            </a>
            <a href="guides.php#glacierBackup" class="col-sm-3">
              <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">How to...</div>
                <div class="card-body">
                  <h5 class="card-title">Backup a system to Glaicer</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, dignissimos?...</p>
                </div>
              </div>
            </a>
            <a href="faq.php#q4" class="col-sm-3">
              <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Frequently asked questions</div>
                <div class="card-body">
                  <h5 class="card-title">Question 4</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, dignissimos? Cumque atque...</p>
                </div>
              </div>
          </a>
        </div>
      </div>
    </section>
<?php
  include 'includes/footer.php';
?>

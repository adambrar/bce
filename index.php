<!DOCTYPE html>
<html lang="en">

  <head>

    <?php include 'include/head.php' ?>

  </head>

  <body>

    <!-- Navigation -->
    <?php include 'include/nav-bar.php' ?>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('media/designers!.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('media/CLS-25.png')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('media/Compost liberator 1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <div id="carousel-cta" class="container pt-4 pb-4 mt-2">
      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-6">
          <p>The compost contaminant separation <b>specialists</b>. <b>Unique</b> and <b>innovative</b> compost processing technologies and services.</p>
        </div>
        <div class="col-md-3">
          <a class="smooth-scroll btn btn-lg btn-bce btn-block mb-2" href="#solutions">Learn More</a>
        </div>
        <div class="col-md-3">
          <a class="btn btn-lg btn-bce btn-block mb-2" href="contact.php">Get In Touch</a>
        </div>
      </div>
    </div>
    
      <!-- START THE FEATURETTES -->

      <div class="container marketing">

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-5">
              <a href="contaminant-problem.php"><img class="img-fluid rounded" src="media/Contaminated%20food%20and%20yard%20waste.jpg" alt=""></a>
            </div>
            <div class="col-md-7">
              <h2 class="featurette-heading">The Contaminant Problem</h2>
              <p>Composting is a rapidly growing sector of the waste management industry worldwide.  Most waste entering landfills contains between 30% to 40% organic matter.  When left in landfills, the organic material decomposes and releases methane (amongst other gases) contributing greatly to climate change. </p>
              <a class="btn btn-block btn-bce btn-lg btn-block mb-2" href="contaminant-problem.php">Read More About Contamination</a>
            </div>
        </div>

        <hr class="featurette-divider">

        <div id="solutions" class="row featurette">
            <div class="col-md-7 push-md-5">
              <h2 class="featurette-heading">What We Offer</h2>
              <p>As experienced industrial composters, BCE has direct understanding of the needs of compost facility operators.  Our first-hand knowledge is why the contaminant separation systems we have developed are second to none.  We have designed and tested our equipment for simplicity of operation, energy efficiency, and durability.</p>
            <a class="btn btn-block btn-bce btn-lg btn-block mb-2" href="/bce/products.php">Check Out Our Products</a>
            <a class="btn btn-block btn-bce btn-lg btn-block mb-2" href="/bce/services.php">Learn About Our Services</a>
            </div>
            <div class="col-md-5 pull-md-7">
                <a href="what-we-offer.php"><img class="img-fluid rounded" src="media/Contaminated%20food%20and%20yard%20waste.jpg" alt=""></a>
            </div>
        </div>
        
        <hr class="featurette-divider">

    </div>
    <!-- /.container -->

    <?php include 'include/footer.php' ?>

    <?php include 'include/js.php' ?>
    <script src="js/smooth-scroll.js"></script>

  </body>

</html>

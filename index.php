<!DOCTYPE html>
<html lang="en">

  <head>

    <?php include 'include/head.php' ?>
      
    <!-- VideoJS includes -->
    <link href="http://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">
    <!-- VideoJS to support IE8 -->
      <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
  </head>
  <body>

    <!-- Navigation -->
    <?php include 'include/nav-bar.php' ?>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('media/home/CLS-25-1.png')">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('media/home/CLS-25-2.png')">
            <div class="carousel-caption d-none d-md-block">
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
          <a class="smooth-scroll btn btn-lg btn-bce btn-block mb-2" href="/bce/technology.php">Learn More</a>
        </div>
        <div class="col-md-3">
          <a class="btn btn-lg btn-bce btn-block mb-2" href="contact.php">Get In Touch</a>
        </div>
      </div>
    </div>
    
      <!-- START THE FEATURETTES -->

      <div class="container marketing">
        <div id="contaminant-problem" class="row featurette">
            <div class="col-md-6 mt-5 mb-5">
              <a href="contaminant-problem.php"><img class="img-fluid rounded" src="media/home/contaminated-waste.jpg" alt=""></a>
            </div>
            <div class="col-md-6">
              <h3 class="featurette-heading">The Contaminant Problem</h3>
              <p>Composting is a rapidly growing sector of the waste management industry worldwide.  Most waste entering landfills contains between 30% to 40% organic matter.  When left in landfills, the organic material decomposes and releases methane (amongst other gases) contributing greatly to climate change. </p>
              <a class="btn btn-block btn-bce btn-lg btn-block mb-2" href="contaminant-problem.php">Read More About Contamination</a>
            </div>
        </div>
          
        <div class="row">
            <div class="col-md-6 mb-5">
              <h3 class="featurette-heading mb-3 mt-1">Innovative Composting</h3>
              <ul class="list-group ml-5 mr-5">
                <li class="list-group-item"><i class="fa fa-check color-bce"></i> Guaranteed performance</li>
                <li class="list-group-item"><i class="fa fa-check color-bce"></i> Effective and Durable</li>
                <li class="list-group-item"><i class="fa fa-check color-bce"></i> Light to Severe contamination</li>
                <li class="list-group-item"><i class="fa fa-check color-bce"></i> Specialized solutions</li>
              </ul>
            </div>
            <div class="col-md-6 mb-5">
              <div class="video-js-responsive-container">
                <video id="my-video" class="video-js" controls preload="auto" poster="/bce/media/home/CLS-25-in-service.jpg" data-setup="{}">
                  <source src="/bce/media/home/bce-liberator.mp4" type='video/mp4'>
                  <source src="MY_VIDEO.webm" type='video/webm'>
                  <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                </video>
              </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <?php include 'include/footer.php' ?>

    <?php include 'include/js.php' ?>
    <script src="js/smooth-scroll.js"></script>

  </body>

</html>

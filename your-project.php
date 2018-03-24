<!DOCTYPE html>
<html lang="en">

  <head>

    <?php include 'include/head.php' ?>

  </head>

  <body>

    <!-- Navigation -->
    <?php include 'include/nav-bar.php' ?>
    <!-- Page Content -->
    <div class="container">
      <!-- Page Heading Breadcrumbs -->
      <h1 class="container-heading mt-4 mb-5">Your Project</h1>
      <p>Please feel free to reach out and discuss your situation with us.  Because we have many years of industrial composting experience, we understand the true cost of contaminants very well.  The success or failure of a compost facility can hinge on how well contaminants are managed.  BCE offers the equipment and expertise that will help you reliably manage and control your contaminant problem.</p>
      <p>Contact us by phone, email, or the form below, and let us know about your challenges.  We are happy to discuss how we may be able to cut your operating costs and boost profitability, without any obligation.  We look forward to talking with you.</p>
      <p>We specialize in modular, custom solutions to suit the needs of your facility. Please tell us about your project, either by telephone or the form below. There is no charge for a site assessment, and we’ll quickly let you know how we can help.</p>
        
      <div class="row mb-5">
        <div class="col-lg-6 offset-lg-3 self-align-center">
          <form id="myproject-form" action="submit-form.php" method="POST">
              <div id="NameGroup" class="form-goup">
                <label for="ContactName">Name:</label>
                <input type="text" class="form-control" id="ContactName" placeholder="Enter name">
              </div>
              <div id="EmailGroup" class="form-group">
                <label for="ContactEmail">Email address</label>
                <input type="email" class="form-control" id="ContactEmail" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We don't store e-mails and will only use it to contact you directly.</small>
              </div>
              <div id="PhoneGroup" class="form-group">
                <label for="ContactPhone">Phone Number:</label>
                <input type="tel" class="form-control" id="ContactPhone" placeholder="Phone number to contact you">
              </div>
              <div id="LocationGroup" class="form-group">
                <label for="ProjectLocation">Project Location:</label>
                <input type="text" class="form-control" id="ProjectLocation" placeholder="Location of your project">
              </div>
              <div id="DescriptionGroup" class="form-group">
                <label for="ProjectDescription">Describe the project/issue:</label>
                <textarea class="form-control" id="ProjectDescription" rows="10"></textarea>
                <small id="emailHelp" class="form-text text-muted">Add as much or as little detail as you prefer.</small>
              </div>
            <button id="form-submit" type="submit" class="btn btn-block btn-bce text-center">Submit</button>
          </form>
          <!--<a href="#aboutModal" data-toggle="modal" data-target="#myModal">MODAL</a>-->
        </div>         
      </div>
    
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
              <center>
                
              </center>
              <hr>
            </div>
            <div class="modal-footer">
              <center>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->

    <?php include 'include/footer.php' ?>
    <?php include 'include/js.php' ?>
    <script src="/bce/js/send-form.js"></script>
  </body>

</html>

<footer>
      <div class="container">
        <div class="row">
          <div id="footerLinks" class="col-6 d-flex justify-content-center">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="gettingStarted.php">Getting Started</a></li>
              <li><a href="services.php">AWS Services</a></li>
              <li><a href="guides.php">Guides</a></li>
              <li><a href="faq.php">FAQ</a></li>
            </ul>
          </div>
          <div class="col-1 d-flex justify-content-center" data-toggle="tooltip" data-placement="top" title="For site admins">
            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#adminModal">
            Admin Login
            </button>
          </div>
          <div class="col-5 d-flex justify-content-center">
            <p>Copyright &copy; 2018, All Rights Reserved</p>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </footer>
    <!-- Register Modal -->
    <div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-dark">
          <div class="modal-header text-light">
            <h5 class="modal-title" id="exampleModalLongTitle">Admin Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form  name="adminForm" id="adminForm" method="post" 
              onSubmit = "return validateForm();" action="includes/adminLogin.php">
              <div id="error" class="bg-warning"></div>
              <div class="form-group text-light">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control bg-dark text-light" id="username" placeholder="Enter Username" required>
              </div>
              <div class="form-group text-light">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control bg-dark text-light" id="password" placeholder="Enter Password" required>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="reset" class="btn btn-outline-primary">Clear</button>
                <button type="submit" id="submit" class="btn btn-outline-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap.js -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/bootstrapCustom.js"></script>
  </body>
</html>
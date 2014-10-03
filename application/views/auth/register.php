<div class="account-wrapper">

    <div class="account-body">

      <h3 class="account-body-title">Get Started, Free for 30 days.</h3>

      <h5 class="account-body-subtitle">Sign up in 30 seconds. No credit card required.</h5>

      <form class="form account-form" method="POST" action="./index.html">

        <div class="form-group">
          <label for="signup-email" class="placeholder-hidden">Email Address</label>
          <input type="email" class="form-control" id="signup-email" placeholder="Your Email" tabindex="1" required>
        </div> <!-- /.form-group -->

        <div class="form-group">
          <label for="signup-fullname" class="placeholder-hidden">Business Name</label>
          <input type="text" class="form-control" id="signup-fullname" placeholder="Business Name" tabindex="2" required>
        </div> <!-- /.form-group -->

        <div class="form-group">
          <label for="login-password" class="placeholder-hidden">Password</label>
          <input type="password" class="form-control" id="login-password" placeholder="Password" tabindex="4" required>
        </div> <!-- /.form-group -->

        <div class="form-group">
          <label class="checkbox-inline">
          <input type="checkbox" class="" value="" tabindex="5"> I agree to the <a href="javascript:;" target="_blank">Terms of Service</a> &amp; <a href="javascript:;" target="_blank">Privacy Policy</a>
          </label>
        </div> <!-- /.form-group -->

        <div class="form-group">
          <button type="submit" class="btn btn-secondary btn-block btn-lg" tabindex="6">
          Create My Account &nbsp; <i class="fa fa-play-circle"></i>
          </button>
        </div> <!-- /.form-group -->

      </form>

    </div> <!-- /.account-body -->

    <div class="account-footer">
      <p>
      Already have an account? &nbsp;
      <a href="<?php echo base_url(); ?>auth/login" class="">Login to your Account!</a>
      </p>
    </div> <!-- /.account-footer -->

  </div> <!-- /.account-wrapper -->
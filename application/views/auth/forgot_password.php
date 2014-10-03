<div class="account-wrapper">

    <div class="account-body">

      <h3 class="account-body-title">Password Reset</h3>

      <h5 class="account-body-subtitle">We'll email you instructions on how to reset your password.</h5>

      <form class="form account-form" method="POST" action="./account-login.html">

        <div class="form-group">
          <label for="forgot-email" class="placeholder-hidden">Your Email</label>
          <input type="text" class="form-control" id="forgot-email" placeholder="Your Email" tabindex="1">
        </div> <!-- /.form-group -->

        <div class="form-group">
          <button type="submit" class="btn btn-secondary btn-block btn-lg" tabindex="2">
            Reset Password &nbsp; <i class="fa fa-refresh"></i>
          </button>
        </div> <!-- /.form-group -->

        <div class="form-group">
          <a href="<?php echo base_url(); ?>auth/login"><i class="fa fa-angle-double-left"></i> &nbsp;Back to Login</a>
        </div> <!-- /.form-group -->
      </form>

    </div> <!-- /.account-body -->

  </div> <!-- /.account-wrapper -->
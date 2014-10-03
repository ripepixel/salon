<div class="account-wrapper">

    <div class="account-body">

      <h3 class="account-body-title">Welcome back to <?php echo $this->lang->line('sitename'); ?>.</h3>

      <h5 class="account-body-subtitle">Please sign in to access your account.</h5>

      <form class="form account-form" method="POST" action="./index.html">

        <div class="form-group">
          <label for="login-username" class="placeholder-hidden">Email</label>
          <input type="email" class="form-control" id="login-username" placeholder="Email" tabindex="1" required>

        </div> <!-- /.form-group -->

        <div class="form-group">
          <label for="login-password" class="placeholder-hidden">Password</label>
          <input type="password" class="form-control" id="login-password" placeholder="Password" tabindex="2" required>
        </div> <!-- /.form-group -->

        <div class="form-group clearfix">
          <div class="pull-left">         
            <label class="checkbox-inline">
            <input type="checkbox" class="" value="" tabindex="3">Remember me
            </label>
          </div>

          <div class="pull-right">
            <a href="<?php echo base_url(); ?>auth/forgot_password">Forgot Password?</a>
          </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-lg" tabindex="4">
            Signin &nbsp; <i class="fa fa-play-circle"></i>
          </button>
        </div> <!-- /.form-group -->

      </form>


    </div> <!-- /.account-body -->

    <div class="account-footer">
      <p>
      Don't have an account? &nbsp;
      <a href="<?php echo base_url(); ?>auth/register" class="">Create an Account!</a>
      </p>
    </div> <!-- /.account-footer -->

  </div> <!-- /.account-wrapper -->
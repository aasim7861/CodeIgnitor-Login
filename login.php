<?php echo $error; ?>
<form role="form" action="<?= site_url("user/dologin"); ?>" method="post">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="email" class="form-control" id="email" required="" value="<?= set_value("email"); ?>">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" id="pwd" required="" value="<?= set_value("password"); ?>">
  </div>
  <input type="submit" class="btn btn-default" value="Login">
</form>

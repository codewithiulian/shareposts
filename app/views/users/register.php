<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Create an account</h2>
        <p>Please fill out this form and register for free.</p>
        <form action="<?php echo URLROOT?>/users/register" method="post">
          <div class="form-group">
            <label for="name">Name: <sup>*</sup></label>
            <input type="text" name="name" class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : '' ?>" id="name" value="<?php echo $data['name'] ?>">
            <span class="invalid-feedback"><?php echo $data['name_err'] ?></span>
          </div>
          <div class="form-group">
            <label for="email">Email address: <sup>*</sup></label>
            <input type="email" name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '' ?>" id="email" aria-describedby="emailHelp" value="<?php echo $data['email'] ?>">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <span class="invalid-feedback"><?php echo $data['email_err'] ?></span>
          </div>
          <div class="form-group">
            <label for="password">Password: <sup>*</sup></label>
            <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '' ?>" id="password" value="<?php echo $data['password'] ?>">
            <span class="invalid-feedback"><?php echo $data['password_err'] ?></span>
          </div>
          <div class="form-group">
            <label for="confirm_password">Confirm password: <sup>*</sup></label>
            <input type="password" name="confirm_password" class="form-control <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : '' ?>" id="confirm_password" value="<?php echo $data['confirm_password'] ?>">
            <span class="invalid-feedback"><?php echo $data['confirm_password_err'] ?></span>
          </div>
          <div class="row">
            <div class="col">
              <input type="submit" class="btn btn-success btn-block">
            </div>
            <div class="col">
              <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-lock">Have an account? Login</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
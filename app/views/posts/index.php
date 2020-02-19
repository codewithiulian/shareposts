<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Welcome, <?php echo $_SESSION['user_name']; ?>!</h1>
      </div>
      <div class="col">
        <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary pull-right">
          <i class="fa fa-pencil"></i> Add Post
        </a>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
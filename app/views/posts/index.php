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

      <?php foreach($data['posts'] as $post) : ?>
        <div class="card mt-5">
          <div class="card-header">
            <?php echo 'Written by ' . $post->postAuthor . ' on ' . $post->postCreatedDateTime; ?>
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $post->postTitle; ?></h5>
            <p class="card-text"><?php echo $post->postBody; ?></p>
            <a href="<?php echo URLROOT . '/posts/' . $post->postId; ?>" class="btn btn-primary">Read more...</a>
          </div>
        </div>
      <?php endforeach; ?>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
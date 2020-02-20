<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Welcome, <?php echo $_SESSION['user_name']; ?>!</h1>
      </div>
      <div class="col">
        <div class="float-right">
          <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-sm btn-primary pull-right">
            <i class="fa fa-pencil"></i> Add Post
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col"><?php echo flash('post_message'); ?></div>
    </div>
    <div class="row">
      <div class="col">
        <?php foreach($data['posts'] as $post) : ?>
          <div class="card mt-3 mb-2">
            <div class="card-header">
              <div class="row">
                <div class="col"><?php echo 'Written by ' . $post->postAuthor . ' on ' . $post->postCreatedDateTime; ?></div>
                <div class="col-1">
                  <div class="float-right">
                    <a href="<?php echo URLROOT . '/posts/delete/' . $post->postId; ?>"><i class="far fa-trash-alt"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $post->postTitle; ?></h5>
              <p class="card-text"><?php echo $post->postBody; ?></p>
              <a href="<?php echo URLROOT . '/posts/show/' . $post->postId; ?>" class="btn btn-sm btn-primary">Read more...</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
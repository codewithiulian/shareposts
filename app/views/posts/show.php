<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="container">
    <div class="row">
      <div class="col"><?php echo flash('post_message'); ?></div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card mt-3 mb-2">
          <div class="card-header">
            <div class="row">
              <div class="col"><?php echo 'Written by ' . $data['post']->postAuthor . ' on ' . $data['post']->postCreatedDateTime; ?></div>
              <div class="col-1">
                <div class="float-right">
                  <a href="<?php echo URLROOT . '/posts/delete/' . $data['post']->postId; ?>"><i class="far fa-trash-alt"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $data['post']->postTitle; ?></h5>
            <p class="card-text"><?php echo $data['post']->postBody; ?></p>
            <a href="<?php echo URLROOT . '/posts/edit/' . $data['post']->postId; ?>" class="btn btn-sm btn-secondary">Edit</a>
        <a href="<?php echo URLROOT; ?>/posts" type="button" class="btn btn-sm btn-dark"><i class="fas fa-times"></i> Cancel</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
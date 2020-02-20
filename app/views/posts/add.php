<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="card mt-4">
    <div class="card-body">
      <h5 class="card-title">Add a new post</h5>
      <form action="<?php echo URLROOT; ?>/posts/add" method="post">
        <div class="form-group">
          <label for="postTitle">Title</label>
          <input type="text" class="form-control <?php echo (!empty($data['postTitle_err'])) ? 'is-invalid' : ''; ?>" id="postTitle" name="postTitle" value="<?php echo $data['postTitle']; ?>">
          <span class="invalid-feedback"><?php echo $data['postTitle_err'] ?></span>
        </div>
        <div class="form-group">
          <label for="postBody">Post</label>
          <textarea class="form-control <?php echo (!empty($data['postBody_err'])) ? 'is-invalid' : ''; ?>" id="postBody" name="postBody" rows="3"><?php echo $data['postBody']; ?></textarea>
          <span class="invalid-feedback"><?php echo $data['postBody_err'] ?></span>
        </div>
        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Submit</button>
        <a href="<?php echo URLROOT; ?>/posts" type="button" class="btn btn-sm btn-dark"><i class="fas fa-times"></i> Cancel</a>
      </form>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
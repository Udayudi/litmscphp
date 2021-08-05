<?php foreach($posts as $post) : ?>
    <!-- <h3><?php echo $post['title']; ?></h3><br>
    <small>Posted On : <?php echo $post['created_at']; ?></small><br>
    <?php echo $post['body']; ?> -->

    <div class="container">
      <div class="pt-4 pb-4">
        <div class="">
          <div class="row">
            <div class="col-sm-6">
            <div class="card mb-3">
            <h3 class="card-header"><?php echo $post['title']; ?></h3>
            <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                <rect width="100%" height="100%" fill="#868e96"></rect>
                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
            </svg>
            <div class="card-body">
                <p class="card-text"> <?php echo $post['body']; ?></p>
            </div>
            
            <div class="card-body">
                <a href="<?php echo site_url('/posts/'.$post['id']); ?>" class="card-link">Read More</a>
                <a href="#" class="card-link"></a>
            </div>
            <div class="card-footer text-muted">
            <?php echo $post['created_at']; ?>
            </div>
            </div>
            </div>
          </div>
            <div class="col-sm-4"> 
            </div>
          </div>
      </div>
    </div>
</div>

<?php endforeach; ?>

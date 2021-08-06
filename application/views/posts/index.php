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
            <img 
              src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']?>"
            class="d-block user-select-none" width="100%" height="200" />            
          
            <div class="card-body">
                <p class="card-text"> <?php echo word_limiter($post['body'], 30); ?></p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">City : 
                <span class="text-danger"><?php echo $post['city']; ?></span>
              </li>
              <li class="list-group-item">Zipcode : 
                <span class="text-warning"><?php echo $post['zipcode']; ?></span>
              </li>
              <li class="list-group-item">State :
                <span class="text-success"><?php echo $post['state']; ?></span>
              </li>
              
            </ul>
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

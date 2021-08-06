<div class="container pt-4 mt-4">
<h2><?php echo $post['title']; ?></h2>
<div>
    <?php echo $post['body']; ?>
</div>
<div class="card-image">
<img 
              src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']?>"
            class="d-block user-select-none" width="100%" height="200" />
</div>
<p>
Address :
    <span class="text-info">  <?php echo $post['address1']; ?>,</span>
    <span class="text-info">  <?php echo $post['address2']; ?></span>
     City :
    <span class="text-danger"><?php echo $post['city']; ?></span> 
     State :
    <span class="text-success"><?php echo $post['state']; ?></span>
</p>
<p>
</p>
<p>
</p>

<hr>
<a class="btn btn-primary" href="/posts/edit/<?php echo $post['id']; ?>">
    Edit
</a>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
  
</form>


</div>
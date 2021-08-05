<div class="container pt-4 mt-4">
<h2><?php echo $post['title']; ?></h2>
<div>
    <?php echo $post['body']; ?>
</div>

<hr>
<a class="btn btn-primary" href="/posts/edit/<?php echo $post['id']; ?>">
    Edit
</a>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
  
</form>


</div>
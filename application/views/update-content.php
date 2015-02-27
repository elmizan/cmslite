                        <?php foreach ($article->result() as $data) {?>

        <form name="form-validate" class="form-validate" method="post" action="<?php echo site_url(); ?>admin/update/<?= $data->id;?>">
                    <div class="form-group">
                          <label for="title">Title</label>
                          <span class="help-block"> <?php echo form_error('title'); ?> </span>
                          <input type="text" class="form-control" name="title" value="<?= $data->title;?>" placeholder="Enter title">
                    </div>

                    <div class="form-group">
                          <label for="description">Description</label>
                          <span class="help-block"> <?php echo form_error('description'); ?> </span>                          
                          <textarea class="form-control" name="description" value="" placeholder="Enter Description"><?= $data->description;?></textarea>
                    </div>

                    <div class="form-group">
                          <label for="title">Content</label>
                          <span class="help-block"> <?php echo form_error('content'); ?> </span>                          
                          <textarea class="form-control" name="content" value="" placeholder="Enter Content"><?= $data->content;?></textarea>
                    </div>
                                                                  <?php } ?>
              <button type="submit" class="btn btn-default">Save</button>
        </form>
<br />
        <p><?= anchor(''.site_url().'admin/', '&laquo; Back To Index ', ['class' => 'btn btn-primary', 'role' => 'button']);?></p>

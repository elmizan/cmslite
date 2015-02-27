        <form name="form-validate" class="form-validate" method="post" action="<?php echo site_url(); ?>admin/create">
              
                    <div class="form-group">
                          <label for="title">Title</label>
                          <span class="help-block"> <?php echo form_error('title'); ?> </span>
                          <input type="text" class="form-control" name="title" value="<?php echo set_value('title'); ?>" placeholder="Enter title">
                    </div>
                                          
                    <div class="form-group">
                          <label for="description">Description</label>
                          <span class="help-block"> <?php echo form_error('description'); ?> </span>                          
                          <textarea class="form-control" name="description" value="<?php echo set_value('description'); ?>" placeholder="Enter Description"></textarea>
                    </div>

                    <div class="form-group">
                          <label for="title">Content</label>
                          <span class="help-block"> <?php echo form_error('content'); ?> </span>                          
                          <textarea class="form-control" name="content" value="<?php echo set_value('content'); ?>" placeholder="Enter Content"></textarea>
                    </div>
      
              <button type="submit" class="btn btn-default">Save</button>
        </form>
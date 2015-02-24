<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <!-- Example row of columns -->
      <div class="row">
                {blog_entries}
        <div class="col-lg-4">
            <h2>{title}</h2>
            <p>{description}</p>
            <p><?= anchor(''.site_url().'index.php/welcome/detail/{id}', 'View details &raquo;', ['class' => 'btn btn-primary', 'role' => 'button']);?></p>
        </div>
          {/blog_entries}                    
      </div>
    <?= $this->pagination->create_links();?>
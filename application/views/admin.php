<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="table-responsive">
	<table class="table table-stripped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Post Date</th>
                <th>Title</th>
                <th>Description</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	<tr>
        	{blog_entries}                
        		<td>{id}</td>
                <td>{post_date}</td>
                <td>{title}</td>
               	<td>{description}</td>
                <td>{content}</td>
                <td>
                	<?= anchor(''.site_url().'index.php/admin/read/{id}', 'Read');?> |
                	<?= anchor(''.site_url().'index.php/admin/update/{id}', 'Update');?> |
                	<?= anchor(''.site_url().'index.php/admin/delete/{id}', 'Delete');?></td>
                </tr>
          {/blog_entries}      
          </table>              
      </div>
{halaman}
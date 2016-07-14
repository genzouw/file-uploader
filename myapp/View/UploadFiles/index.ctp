<div class="uploadFiles index">
	<h2><?php echo __('Upload Files'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('base64_content'); ?></th>
			<th><?php echo $this->Paginator->sort('created_at'); ?></th>
			<!-- <th><?php echo $this->Paginator->sort('updated_at'); ?></th> -->
			<!-- <th class="actions"><?php echo __('Actions'); ?></th> -->
	</tr>
	</thead>
	<tbody>
	<?php foreach ($uploadFiles as $uploadFile): ?>
	<tr>
		<td><?php echo h($uploadFile['UploadFile']['id']); ?>&nbsp;</td>
		<td><?php echo h($uploadFile['UploadFile']['comment']); ?>&nbsp;</td>
        <td>
        <a href="data:image/png;base64,<?php echo h($uploadFile['UploadFile']['base64_content']); ?>" data-lightbox="group"><img src="data:image/png;base64,<?php echo h($uploadFile['UploadFile']['base64_content']); ?>" class="thumbnail" />&nbsp;</a>
        </td>
		<td><?php echo h($uploadFile['UploadFile']['created_at']); ?>&nbsp;</td>
		<td class="actions">
            <?php
            // echo $this->Html->link(__('View'), array('action' => 'view', $uploadFile['UploadFile']['id']));
            ?>
            <?php
            // echo $this->Html->link(__('Edit'), array('action' => 'edit', $uploadFile['UploadFile']['id']));
            ?>
            <?php
            // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $uploadFile['UploadFile']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $uploadFile['UploadFile']['id'])));
            ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Upload File'), array('action' => 'add')); ?></li>
	</ul>
</div>
<!-- bower:js -->
<script src="/myapp/bower_components/jquery/dist/jquery.js"></script>
<script src="/myapp/bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="/myapp/bower_components/jquery-ui/jquery-ui.js"></script>
<script src="/myapp/bower_components/sprintf/src/sprintf.js"></script>
<script src="/myapp/bower_components/lightbox2/dist/js/lightbox.js"></script>
<!-- endbower -->
<script>
"use strict";
;$(function() {
  // $("a > img").each(function() {
    // var img = $(this).parent();
    // var anchor = $(this).parent();
    // anchor.on("click", function(e) {
      // $(this).attr(
        // 'href',
        // $(this).find('img').attr('src')
      // );
    // });
  // });
  lightbox.option({
    'fitImagesInViewport' : true,
    'wrapAround': true
  });
});
</script>

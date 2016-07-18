	<h2><?php echo __('Upload Files'); ?></h2>

	<?php foreach (array_chunk($uploadFiles, 3) as $uploadFiles): ?>
	<div class="row">
	<?php foreach ($uploadFiles as $uploadFile): ?>
		<div class="col-sm-4">
            <h3>
                <?php echo __('Id'); ?> <?php echo h($uploadFile['UploadFile']['id']); ?>&nbsp;
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $uploadFile['UploadFile']['id']), array(
				    'class' => 'btn btn-primary btn-sm',
				)); ?>
            </h3>
			<dl>
				<dt><?php echo __('Created At'); ?></dt>
				<dd><?php echo h($uploadFile['UploadFile']['created_at']); ?>&nbsp;</dd>
				<dd>
				</dd>
				<dt><?php echo __('Comment'); ?></dt>
				<dd><?php echo h($uploadFile['UploadFile']['comment']) ?: 'なし'; ?>&nbsp;</dd>
				<dd>
                    <a href="./upload_files/getFile/<?php echo h($uploadFile['UploadFile']['file_name']); ?>" data-lightbox="group">
                    <img src="./upload_files/getThumbnailFile/<?php echo h($uploadFile['UploadFile']['file_name']); ?>" class="thumbnail" />
                    </a>
				</dd>
			</dl>
		</div>
	<?php endforeach; ?>
	</div>
	<hr>
	<?php endforeach; ?>

	<div class="row">
		<div class="col-sm-offset-1 col-sm-10">
		<p>
		<?php
		echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?></p>
		</div>
		<div class="col-sm-offset-1 col-sm-10">
		<ul class="pagination">
			<li><?php echo $this->Paginator->first(__('first'), array( 'tag' => false )) ?: '<a>' . __('first') . '</a>' ?></li>
			<li><?php echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')) ?></li>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'active', 'currentTag' => 'span' )); ?>
			<li><?php echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')) ?></li>
			<li><?php echo $this->Paginator->last(__('last'), array( 'tag' => false )) ?: '<a>' . __('last') . '</a>' ?></li>
		</ul>
		</div>
	</div>

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

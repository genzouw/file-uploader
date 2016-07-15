<div class="uploadFiles view">
<h2><?php echo __('Upload File'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($uploadFile['UploadFile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($uploadFile['UploadFile']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Base64 Content'); ?></dt>
		<dd>
            <img src="data:image/png;base64,<?php echo h($uploadFile['UploadFile']['base64_content']); ?>" class="thumbnail" />
			&nbsp;
		</dd>
		<dt><?php echo __('File Name'); ?></dt>
		<dd>
            <a href="../getFile/<?php echo h($uploadFile['UploadFile']['file_name']); ?>"><?php echo h($uploadFile['UploadFile']['file_name']); ?></a>
			&nbsp;
		</dd>
		<dt><?php echo __('File Size'); ?></dt>
		<dd>
			<?php echo h($uploadFile['UploadFile']['file_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created At'); ?></dt>
		<dd>
			<?php echo h($uploadFile['UploadFile']['created_at']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Upload Files'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload File'), array('action' => 'add')); ?> </li>
	</ul>
</div>

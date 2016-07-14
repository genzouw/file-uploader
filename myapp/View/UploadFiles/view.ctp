<div class="uploadFiles view">
<h2><?php echo __('Upload File'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($uploadFile['UploadFile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Path'); ?></dt>
		<dd>
			<?php echo h($uploadFile['UploadFile']['file_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Content'); ?></dt>
		<dd>
			<?php echo h($uploadFile['UploadFile']['file_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created At'); ?></dt>
		<dd>
			<?php echo h($uploadFile['UploadFile']['created_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated At'); ?></dt>
		<dd>
			<?php echo h($uploadFile['UploadFile']['updated_at']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Upload File'), array('action' => 'edit', $uploadFile['UploadFile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Upload File'), array('action' => 'delete', $uploadFile['UploadFile']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $uploadFile['UploadFile']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Upload Files'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload File'), array('action' => 'add')); ?> </li>
	</ul>
</div>

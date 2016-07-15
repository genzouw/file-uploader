<div class="uploadFiles form">
<?php echo $this->Form->create('UploadFile'); ?>
	<fieldset>
		<legend><?php echo __('Edit Upload File'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('comment');
		echo $this->Form->input('remote_address');
		echo $this->Form->input('base64_content');
		echo $this->Form->input('mime_type');
		echo $this->Form->input('file_name');
		echo $this->Form->input('file_size');
		echo $this->Form->input('created_at');
		echo $this->Form->input('updated_at');
		echo $this->Form->input('origin_file_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UploadFile.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('UploadFile.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Upload Files'), array('action' => 'index')); ?></li>
	</ul>
</div>

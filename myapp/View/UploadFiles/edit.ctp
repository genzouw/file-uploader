<div class="uploadFiles form">
<?php echo $this->Form->create('UploadFile'); ?>
	<fieldset>
		<legend><?php echo __('Edit Upload File'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('file_path');
		echo $this->Form->input('file_content');
		echo $this->Form->input('created_at');
		echo $this->Form->input('updated_at');
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

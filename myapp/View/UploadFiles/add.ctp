<div class="uploadFiles form">
<?php echo $this->Form->create(
    'UploadFile',
    array(
        'enctype' => 'multipart/form-data',
        // 'inputDefaults' => array(
            // 'div' => false,
            // 'label' => false,
            // 'error' => false,
        // )
    )
); ?>
    <fieldset>
        <legend><?php echo __('Add Upload File'); ?></legend>
        <?php echo $this->Form->input(
            'comment',
            array(
                'type' => 'text',
                'maxlength' => 50,
            )
        ); ?>
        <?php
        echo $this->Form->input(
            'upload_file',
            array(
                'type' => 'file',
            )
        );
        ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Upload Files'), array('action' => 'index')); ?></li>
	</ul>
</div>

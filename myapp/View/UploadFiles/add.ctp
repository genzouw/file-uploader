    <h2><?php echo __('Add Upload File'); ?></h2>

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">

<?php echo $this->Form->create(
    'UploadFile',
    array(
        'enctype' => 'multipart/form-data',
        'class' => 'form-horizontal',
        'role' => 'form',
        'inputDefaults' => array(
            'div' => false,
            // 'label' => false,
            // 'error' => false,
        )
    )
); ?>
            <div class="form-group">
<?php echo $this->Form->input(
    'upload_file',
    array(
        'type' => 'file',
        'class' => 'form-control',
        'div' => false,
    )
); ?>
            </div>
            <div class="form-group">
<?php echo $this->Form->input(
    'comment',
    array(
        'type' => 'textarea',
        'class' => 'form-control',
        'maxlength' => 50,
        'div' => false,
    )
); ?>
            </div>
<?php echo $this->Form->submit(__('Submit'), array(
    'class' => 'btn btn-primary',
)); ?>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>

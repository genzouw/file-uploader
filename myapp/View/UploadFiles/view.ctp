    <h2><?php echo __('Upload File'); ?></h2>

	<div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <dl>
                <dt><?php echo __('Id'); ?></dt>
                <dd>
                    <?php echo h($uploadFile['UploadFile']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Created At'); ?></dt>
                <dd>
                    <?php echo h($uploadFile['UploadFile']['created_at']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Comment'); ?></dt>
                <dd>
                    <?php echo h($uploadFile['UploadFile']['comment']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('File Name'); ?></dt>
                <dd>
                    <a href="<?php echo $this->Html->webroot; ?>upload_files/getFile/<?php echo h($uploadFile['UploadFile']['file_name']); ?>"><?php echo h($uploadFile['UploadFile']['file_name']); ?></a>
                    &nbsp;
                </dd>
                <dt><?php echo __('Base64 Content'); ?></dt>
                <dd>
                    <img src="data:image/png;base64,<?php echo h($uploadFile['UploadFile']['base64_content']); ?>" class="thumbnail" />
                    &nbsp;
                </dd>
                <dt><?php echo __('File Size'); ?></dt>
                <dd>
                    <?php echo h($uploadFile['UploadFile']['file_size']); ?>
                    &nbsp;
                </dd>
            </dl>
        </div>
    </div>

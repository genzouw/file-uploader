<?php
App::uses('AppModel', 'Model');
/**
 * UploadFile Model
 *
 */
class UploadFile extends AppModel
{

    /**
     * Display field
     *
     * @type string
     */
    public $displayField = 'comment';

    /**
     * Validation rules
     *
     * @type array
     */
    public $validate = array(
        'id' => array(
            'uuid' => array(
                'rule' => array('uuid'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'notBlank' => array(
                'rule' => array('notBlank'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'numeric' => array(
                'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'n' => array(
                'rule' => array('n'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        // 'base64_content' => array(
        // ),
        'base64_content' => array(
            'notBlank' => array(
                'required' => true,
                'rule' => ['notBlank'],
                'message' => 'error.notBlank',
            ),
        ),
        'mime_type' => array(
            'notBlank' => array(
                'required' => true,
                'rule' => ['notBlank'],
                'message' => 'error.notBlank',
            ),
        ),
    );

    public function beforeValidate($options = array())
    {
        $modelData = &$this->data['UploadFile'];

        if (
            isset($modelData['upload_file']['tmp_name']) &&
            !empty($modelData['upload_file']['tmp_name']) &&
            preg_match('/\Aimage.*\z/u',  $modelData['upload_file']['type'])
        ) {
            $file = $modelData['upload_file'];

            $fileContent = file_get_contents($modelData['upload_file']['tmp_name']);
            $modelData['base64_content'] = base64_encode($fileContent);
            $modelData['mime_type'] = $modelData['upload_file']['type'];
            $modelData['origin_file_name'] = $modelData['upload_file']['name'];
            $modelData['file_name'] = hash('sha256', $fileContent) . preg_replace('/\Aimage\//su', '.', $modelData['mime_type']);
            $modelData['file_size'] = $modelData['upload_file']['size'];
            $modelData['remote_address'] = $_SERVER['REMOTE_ADDR'];
        }

        return parent::beforeValidate($options);
    }

    public function generateHash(array $data)
    {
        return hash('sha256', serialize($data));
    }
}

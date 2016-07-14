<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 */
class AppModel extends Model
{
    public function save($data = null, $validate = true, $fieldList = array())
    {
        $now = date('Y-m-d H:i:s');
        // set created_at field before creation
        if (!isset($this->data[$this->name]['id']) || empty($this->data[$this->name]['id'])) {
            $data[$this->name]['created_at'] = $now;
        }
        // set updated_at field value before each save
        $data[$this->name]['updated_at'] = $now;
        return parent::save($data, $validate, $fieldList);
    }
}

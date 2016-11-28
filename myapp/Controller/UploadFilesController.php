<?php
App::uses('AppController', 'Controller');

use Eventviva\ImageResize;

/**
 * UploadFiles Controller
 *
 * @property UploadFile $UploadFile
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class UploadFilesController extends AppController
{

    /**
     * Components
     *
     * @type array
     */
    public $components = array(
        'Paginator' => array(
            'settings' => array(
                'UploadFile' => array(
                    'order' => array(
                        'id' => 'desc',
                    ),
                ),

            ),
        ),
        'Session',
        'Flash'
    );


    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->UploadFile->recursive = 0;
        $uploadFiles = $this->Paginator->paginate();
        $this->set('uploadFiles', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        if (!$this->UploadFile->exists($id)) {
            throw new NotFoundException(__('Invalid upload file'));
        }
        $options = array('conditions' => array('UploadFile.' . $this->UploadFile->primaryKey => $id));
        $uploadFile = $this->UploadFile->find('first', $options);
        if (Configure::read('debug') === 0) {
            $this->response->etag($this->UploadFile->generateHash($uploadFile));
            if ($this->response->checkNotModified($this->request)) {
                return $this->response;
            }
        }
        $this->set('uploadFile', $uploadFile);
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->UploadFile->create();
            if ($this->UploadFile->save($this->request->data)) {
                $this->Flash->success(__('The upload file has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The upload file could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null)
    {
        if (!$this->UploadFile->exists($id)) {
            throw new NotFoundException(__('Invalid upload file'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->UploadFile->save($this->request->data)) {
                $this->Flash->success(__('The upload file has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The upload file could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('UploadFile.' . $this->UploadFile->primaryKey => $id));
            $this->request->data = $this->UploadFile->find('first', $options);
        }
    }

    /**
     * getFile.
     *
     * @param mixed $fileName
     * @return void
     */
    public function getFile($fileName = null)
    {
        $this->autoRender = false;

        $data = $this->UploadFile->find('first', array(
            'conditions' => array(
                'file_name' => $fileName,
            ),
        ));

        if (Configure::read('debug') === 0) {
            $this->response->etag($data['UploadFile']['updated_at']);
            if ($this->response->checkNotModified($this->request)) {
                return $this->response;
            }
        }

        if (empty($data)) {
            throw new NotFoundException(__('Invalid upload file'));
        }
        // echo '<pre>'; var_dump($data); echo '</pre>';die();

        $this->response->type($data['UploadFile']['mime_type']);

        // $this->response->
        $this->response->body(base64_decode($data['UploadFile']['base64_content'], true));
    }

    /**
     * getThumbnailFile.
     *
     * @param mixed $fileName
     * @return void
     */
    public function getThumbnailFile($fileName = null)
    {
        $this->autoRender = false;

        $data = $this->UploadFile->find('first', array(
            'conditions' => array(
                'file_name' => $fileName,
            ),
        ));

        if (Configure::read('debug') === 0) {
            $this->response->etag($data['UploadFile']['updated_at']);
            if ($this->response->checkNotModified($this->request)) {
                return $this->response;
            }
        }

        if (empty($data)) {
            throw new NotFoundException(__('Invalid upload file'));
        }
        // echo '<pre>'; var_dump($data); echo '</pre>';die();

        $this->response->type($data['UploadFile']['mime_type']);

        $image = ImageResize::createFromString(base64_decode($data['UploadFile']['base64_content'], true));
        // $image->scale(25);
        $image->resizeToWidth(300);

        // $this->response->
        $this->response->body($image->getImageAsString());
    }
}

<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Sar extends ResourceController
{
    protected $modelName = 'App\Models\SarModel';
        protected $format = 'json';
        public function __construct()
        {
        $this->validation = \Config\Services::validation();
        }
        public function index()
        {
        return $this->respond($this->model->findAll());
        }
        public function create()
        {
        $data = $this->request->getPost();
        $validate = $this->validation->run($data, 'sar');
        $errors = $this->validation->getErrors();
        if ($errors) {
            return $this->fail($errors);
     }
     $sar = new \App\Entities\Sar();
     $sar->fill($data);
     $sar->created_by = 0;
     $sar->created_date = date("Y-m-d H:i:s");
     if ($this->model->save($sar)) {
     return $this->respondCreated($sar, 'user created');
     }
     }
     public function update($id = null)
     {
     $data = $this->request->getRawInput();
     $data['id'] = $id;
     $validate = $this->validation->run($data, 'update_sar');
     $errors = $this->validation->getErrors();
     if ($errors) {
     return $this->fail($errors);
     }
     if (!$this->model->findById($id)) {
     return $this->fail('id tidak ditemukan');
     }
     $sar = new \App\Entities\sar();
     $sar->fill($data);
     $sar->updated_by = 0;
     $sar->updated_date = date("Y-m-d H:i:s");
     if ($this->model->save($sar)) {
     return $this->respondUpdated($sar, 'sar updated');
     }
     }
     public function delete($id = null)
     {
     if (!$this->model->findById($id)) {
     return $this->fail('id tidak ditemukan');
     }
     if ($this->model->delete($id)) {
     return $this->respondDeleted(['id' => $id . ' Deleted']);
     }
     }
    
     public function show($id = null)
     {
     $data = $this->model->findById($id);
     if ($data) {
     return $this->respond($data);
     }
     return $this->fail('id tidak ditemukan');
     }
    }
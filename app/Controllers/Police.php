<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Police extends ResourceController
{
    protected $modelName = 'App\Models\PoliceModel';
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
    $validate = $this->validation->run($data, 'police');
    $errors = $this->validation->getErrors();
    if ($errors) {
        return $this->fail($errors);
 }
 $police = new \App\Entities\Sar();
 $police->fill($data);
 $police->created_by = 0;
 $police->created_date = date("Y-m-d H:i:s");
 if ($this->model->save($police)) {
 return $this->respondCreated($police, 'police created');
 }
 }
 public function update($id = null)
 {
 $data = $this->request->getRawInput();
 $data['id'] = $id;
 $validate = $this->validation->run($data, 'update_police');
 $errors = $this->validation->getErrors();
 if ($errors) {
 return $this->fail($errors);
 }
 if (!$this->model->findById($id)) {
 return $this->fail('id tidak ditemukan');
 }
 $police = new \App\Entities\Police();
 $police->fill($data);
 $police->updated_by = 0;
 $police->updated_date = date("Y-m-d H:i:s");
 if ($this->model->save($police)) {
 return $this->respondUpdated($police, 'police updated');
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
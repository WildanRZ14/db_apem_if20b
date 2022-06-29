<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Pemadam extends ResourceController
{
    protected $modelName = 'App\Models\PemadamModel';
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
    $validate = $this->validation->run($data, 'pemadam');
    $errors = $this->validation->getErrors();
    if ($errors) {
        return $this->fail($errors);
 }
 $pemadam = new \App\Entities\Pemadam();
 $pemadam->fill($data);
 $pemadam->created_by = 0;
 $pemadam->created_date = date("Y-m-d H:i:s");
 if ($this->model->save($pemadam)) {
 return $this->respondCreated($pemadam, 'pemadam created');
 }
 }
 public function update($id = null)
 {
 $data = $this->request->getRawInput();
 $data['id'] = $id;
 $validate = $this->validation->run($data, 'update_pemadam');
 $errors = $this->validation->getErrors();
 if ($errors) {
 return $this->fail($errors);
 }
 if (!$this->model->findById($id)) {
 return $this->fail('id tidak ditemukan');
 }
 $pemadam = new \App\Entities\Pemadam();
 $pemadam->fill($data);
 $pemadam->updated_by = 0;
 $pemadam->updated_date = date("Y-m-d H:i:s");
 if ($this->model->save($pemadam)) {
 return $this->respondUpdated($pemadam, 'pemadam updated');
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
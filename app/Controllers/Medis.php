<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Medis extends ResourceController
{
    protected $modelName = 'App\Models\MedisModel';
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
    $validate = $this->validation->run($data, 'medis');
    $errors = $this->validation->getErrors();
    if ($errors) {
        return $this->fail($errors);
 }
 $medis = new \App\Entities\Medis();
 $medis->fill($data);
 $medis->created_by = 0;
 $medis->created_date = date("Y-m-d H:i:s");
 if ($this->model->save($medis)) {
 return $this->respondCreated($medis, 'medis created');
 }
 }
 public function update($id = null)
 {
 $data = $this->request->getRawInput();
 $data['id'] = $id;
 $data = $this->request->getRawInput();
 $data['image'] = $image;
 $validate = $this->validation->run($data, 'update_medis');
 $errors = $this->validation->getErrors();
 if ($errors) {
 return $this->fail($errors);
 }
 if (!$this->model->findById($id)) {
 return $this->fail('id tidak ditemukan');
 }
 $medis = new \App\Entities\Medis();
 $medis->fill($data);
 $medis->updated_by = 0;
 $medis->updated_date = date("Y-m-d H:i:s");
 if ($this->model->save($medis)) {
 return $this->respondUpdated($medis, 'medis updated');
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

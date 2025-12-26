<?php

namespace App\Controllers;
use App\Models\NoteModel;


class Note extends BaseController{

  public function index(){

    $model = new NoteModel();
    
    $data['notes'] = $model->findAll();
    
    return view('notes/index', $data);
  
  }

  public function create(){
  
    return view('notes/create');
  
  }

  public function store(){
  
    $model = new NoteModel();
  
    $model->insert([
      'title' => $this->request->getPost('title'),
      'description' => $this->request->getPost('description')
    ]);

    return redirect()->to('notes');
  }

  public function edit($id){
   
    $model = new NoteModel();
   
    $data['note'] = $model->find($id);
    
    return view('notes/edit', $data);
  }

  
  public function update($id){
    
    $model = new NoteModel();

    $model->update($id,[
      'title' => $this->request->getPost('title'),
      'description' => $this->request->getPost('description')
    ]);

    return redirect()->to('notes');

  }

  
  public function delete($id){
    $model = new NoteModel();
        $model->delete($id);

        return redirect()->to('/notes');
  }


}
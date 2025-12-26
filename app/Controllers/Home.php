<?php

namespace App\Controllers;
use App\Models\NoteModel;

class Home extends BaseController
{
    public function index(): string
    {
        $model = new NoteModel();
        $data['notes'] = $model->findAll();
        return view('welcome_message', $data);
    }
}

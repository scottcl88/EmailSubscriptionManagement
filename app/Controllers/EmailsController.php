<?php

namespace App\Controllers;

class EmailsController extends BaseController
{
    public function index()
    {
        $model = model(EmailModel::class);

        $data = [
            'emails'  => $model->getEmails(),
            'page_name' => "emails/overview"
        ];
        echo view('templates/content', $data);
    }
    public function view($email = null)
    {
        $model = model(EmailModel::class);

        $data['emails'] = $model->getEmails($email);
    }
    public function create()
    {
        $model = model(EmailModel::class);
        if ($this->request->getMethod() === 'post' && $this->validate([
            'email' => 'required|min_length[3]|max_length[255]',
        ])) {
            $model->save([
                'email' => $this->request->getPost('email'),
            ]);
            $data['page_name'] = "emails/success";
        } else {
            $data['page_name'] = "emails/create";
        }
        echo view('templates/content', $data);
    }
    public function edit($seg1 = false)
    {
        $model = model(EmailModel::class);
        
        if ($this->request->getMethod() === 'post' && $this->validate([
            'email' => 'required|min_length[3]|max_length[255]',
        ])) {
            $model->save([
                'email_id' => $this->request->getPost('email_id'),
                'email' => $this->request->getPost('email'),
            ]);
            $data['page_name'] = "emails/success";
        } else {
            $data['email'] = $model->getEmails($seg1);
            $data['page_name'] = "emails/edit";
        }
        echo view('templates/content', $data);
    }
}

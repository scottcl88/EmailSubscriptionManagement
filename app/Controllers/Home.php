<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $model = model(EmailModel::class);
    
        $data = [
            'emails'  => $model->getEmails(),
            'title' => 'News archive',
        ];
    
        echo view('emails/overview', $data);
      }
    public function view($email = null)
    {
        $model = model(EmailModel::class);

        $data['emails'] = $model->getEmails($email);
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class EmailModel extends Model
{
    protected $table = 'emails';

    protected $primaryKey  = 'email_id';

    protected $allowedFields = ['email'];

    public function getEmails($email_id = false)
    {
        if ($email_id === false) {
            return $this->findAll();
        }

        return $this->where(['email_id' => $email_id])->first();
    }
}
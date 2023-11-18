<?php

namespace App\Application\Models;


use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{

    protected $table = 'users';

    protected $fillable = [
        'id',
        'username',
        'firstName',
        'lastName',
        'created_at',
        'updated_at'
    ];

    public function findAll()
    {
        return $this->select('id', 'username', 'firstName', 'lastName')->get()->toArray();
    }
}

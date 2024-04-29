<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $fillable = [
        'creator',
        'addressee',
        'content',
        'status'
    ];

    public function addressee()
    {
        return $this->hasOne(Users::class, 'id', 'addressee');
    }

    public function creator()
    {
        return $this->hasOne(Users::class, 'id', 'creator');
    }

}

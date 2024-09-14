<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $table = 'test';
    protected $fillable = ['comments'];
    //get all
    public function getAll()
    {
        return $this->all();
    }
    //get comments
    public function getComments()
    {
        return $this->pluck('comments');
    }
}

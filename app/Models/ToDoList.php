<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  ToDoList extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['id','description','begin_date','end_date','status'];
}

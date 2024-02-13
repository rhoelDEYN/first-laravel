<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    protected $table = 'todo_list';
    protected $primaryKey = 'id';
    protected $fillable = ['task', 'description', 'status'];
    use HasFactory;
}
